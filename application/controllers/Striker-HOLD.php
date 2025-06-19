<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Striker extends Core_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('striker_model');
        include "application/libraries/phpqrcode/qrlib.php";
        include "application/libraries/fpdf/fpdf.php";
        require_once (APPPATH . 'libraries/tcpdf/tcpdf.php');
    }
    public function generate_qr($content = '', $path = "", $job_striker_id = '')
    {
        $part_id = $job_striker_id;
        $product_name = $content['customer_part_number'];
        $product_serial_number = "Part Serial " . $content['production_serial_number'];
        $vendor_initial = "Vendor Initial " . $content['vendor_initial'];
        $gcs_rev_date = "GCS Rev Date " . $content['gcs_rev_date'];
        $production_date = "Production Date " . $content['production_date'];
        $stroke_travel = "Stroke Travel " . $content['stroke_travel'];
        $eel_extended = "Eyelet to Eyelet Length Fully Extended " . $content['eel_extended'];
        $eel_retracted = "Eyelet to Eyelet Length Fully Retracted " . $content['eel_retracted'];
        $llc_extension = "Lateral Load Capacity at Full Extension " . $content['llc_extension'];
        $maximum_rated_load = "Maximum Rated Load " . $content['maximum_rated_load'];
        $codeContents = $product_name . "\n" . $product_serial_number . "\n" . $vendor_initial . "\n" . $gcs_rev_date . "\n" . $production_date . "\n" . $eel_extended . "\n" . $eel_retracted . "\n" . $llc_extension . "\n" . $maximum_rated_load . "\n\n|" . base64_encode($part_id) . "|";
        QRcode::png($codeContents, $path, QR_ECLEVEL_L, 5, 5);
    }
    public function generate_striker($path = '', $data = [])
    {
        // pr($data,1);
        $serial_nubmer = explode("-",$data['production_serial_number']);
        $data['production_serial_number'] = str_replace("/",".",$serial_nubmer[0]);
        $data['serial_number'] = $serial_nubmer[1];
        // $data['gcs_rev_date'] = str_replace("-",".",$data['gcs_rev_date']);
        $pdf = new TCPDF('P', 'mm', array(
            60,
            60
        ) , true, 'UTF-8', false);
        $pdf->SetMargins(0, 4, 2, 0);
        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        // remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->SetAutoPageBreak(false);
        // set font
        $pdf->SetFont('helvetica', '', 10);
        // add a page
        $pdf->AddPage();
        $data['part_data'] = $data;
        $html = $this->smarty->fetch("job_striker_print.tpl", $data);
        // pr($html,1);
        // $pdf->setCellPaddings( $left = '', $top = '2px', $right = '', $bottom = '2px');
        $pdf->writeHTML($html, true, 0, true, 0);
        // $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
        $pdf->Output($path, 'F');

    }

    public function job_striker()
    {
        $data = [];
        $part_data = $this->striker_model->get_part_data();
        $data['part_data'] = $part_data;
        $this->smarty->loadView('job_stiker.tpl', $data);
    }
    public function generate_job_striker()
    {
        $post_data = $this->input->post();
        $part_id = $post_data['part_id'];
        $part_data = $this->striker_model->get_part_data($part_id);
        $part_data = $part_data[0];
        $part_data['customer_logo'] = base_url() . "public/uploads/parts/" . $part_data['customer_logo'];
        $job_striker_count = $this->striker_model->get_job_striker_count($part_id);
        $job_striker_count = $job_striker_count['total_striker'];
        $part_data['production_date'] = date("Y-m-d");
        $part_data['production_serial_number'] = date("Y/m/d") . "-" . ($job_striker_count + 1);
        unset($part_data['added_by'], $part_data['added_date'], $part_data['updated_by'], $part_data['updated_date']);
        $job_striker_insert_arr = [
            "part_id" => $part_id, 
            "striker_data" => json_encode($part_data) , 
            "part_serial_number" => $part_data['production_serial_number'], 
            "added_date" => date("Y-m-d H:i:s") , 
            "added_by" => $this->session->userdata("id") 
        ];
        $insert_data = $this->striker_model->insert_job_striker($job_striker_insert_arr);
        $success = 0;
        $message = "Something Went Wrong";
        if ($insert_data > 0)
        {
            $job_striker_id = $insert_data;
            $tempDir = "public/uploads/qr_code/" . date("Y") . "/";
            if (!is_dir($tempDir))
            {
                mkdir($tempDir, 0777, true);
            }
            $tempDir .= date("m") . "/";
            if (!is_dir($tempDir))
            {
                mkdir($tempDir, 0777, true);
            }
            $tempDir .= $part_id . "/";
            if (!is_dir($tempDir))
            {
                mkdir($tempDir, 0777, true);
            }

            $qr_fileName = 'qr_code_' . date("Y_m_d") . "_" . ($job_striker_count + 1) . '.png';
            $pngAbsoluteFilePath = $tempDir . $qr_fileName;
            $this->generate_qr($part_data, $pngAbsoluteFilePath, $job_striker_id);
            $part_data['qr_code'] = base_url() . $pngAbsoluteFilePath;
            $striker_fileName = 'job_striker_' . date("Y_m_d") . "_" . ($job_striker_count + 1) . '.pdf';
            $strikerDir = dirname(dirname(__DIR__)) . "/public/uploads/job_striker/" . $striker_fileName;
            $part_data['job_striker'] = base_url() . "/public/uploads/job_striker/" . $striker_fileName;
            $this->generate_striker($strikerDir, $part_data);

            $job_striker_update_arr = [
                "part_id" => $part_id, 
                "striker_data" => json_encode($part_data) , 
                "striker_pdf_url" => $part_data['job_striker'], 
                "part_serial_number" => $part_data['production_serial_number'], 
                "added_date" => date("Y-m-d H:i:s") , 
                "added_by" => $this->session->userdata("id") 
            ];
            $insert_data = $this->striker_model->update_job_striker($job_striker_update_arr, $job_striker_id);
            if ($insert_data)
            {
                $success = 1;
                $message = "Print Job successfully.";
            }

        }
        $return_arr = ["success" => $success, "message" => $message, "pdf_url" => $part_data['job_striker']];
        echo json_encode($return_arr);
        exit();

    }
    public function job_striker_listing()
    {
        $column[] = [
            "data" => "part_name", 
            "title" => "Part Name/Description", 
            "width" => "20%", 
            "className" => "dt-left"
        ];
        $column[] = [
            "data" => "part_serial_number", 
            "title" => "Part Serial Number", 
            "width" => "10%", 
            "className" => "dt-left", 
        ];
        $column[] = [
            "data" => "added_by", 
            "title" => "Added By", 
            "width" => "10%", 
            "className" => "dt-center", 
        ];
        $column[] = [
            "data" => "added_date", 
            "title" => "Added Date", 
            "width" => "10%", 
            "className" => "dt-center", 
        ];
        $column[] = [
            "data" => "action", 
            "title" => "Action", 
            "width" => "7%", 
            "className" => "dt-center"
        ];
        $data["data"] = $column;
        $data["is_searching_enable"] = false;
        $data["is_paging_enable"] = true;
        $data["is_serverSide"] = true;
        $data["is_ordering"] = true;
        $data["is_heading_color"] = "#a18f72";
        $data["no_data_message"] = '<div class="p-3 no-data-found-block"><img class="p-2" src="' . base_url() . 'public/assets/images/images/no_data_found_new.png" height="150" width="150"><br> No Employee data found..!</div>';
        $data["is_top_searching_enable"] = true;
        $data["sorting_column"] = json_encode([]);
        $data["page_length_arr"] = [[10, 50, 100, 200], [10, 50, 100, 200]];
        $data["admin_url"] = base_url();
        $data["base_url"] = base_url();
        $this->smarty->loadView('job_stiker_listing.tpl', $data);
    }
    public function get_job_striker_data()
    {
        $post_data = $this->input->post();
        $column_index = array_column($post_data["columns"], "data");
        $order_by = "";
        foreach ($post_data["order"] as $key => $val)
        {
            if ($key == 0)
            {
                $order_by .= $column_index[$val["column"]] . " " . $val["dir"];
            }
            else
            {
                $order_by .= "," . $column_index[$val["column"]] . " " . $val["dir"];
            }
        }
        $condition_arr["order_by"] = $order_by;
        $condition_arr["start"] = $post_data["start"];
        $condition_arr["length"] = $post_data["length"];
        $base_url = $this->config->item("base_url");
        $data = $this->striker_model->get_job_striker_data($condition_arr, $post_data["search"]);
        // pr($data,1);
        $job_striker_data = [];
        foreach ($data as $key => $value)
        {
            $part_serial_number = explode("-",$value['part_serial_number']);
            $part_serial_number = str_replace("/",".",$part_serial_number[0])."-".$part_serial_number[1];
            $job_striker_data[$key] = [
                "part_name" => $value['part_name'], 
                "part_serial_number" => $part_serial_number, 
                "added_by" => $value['user_name'], 
                "added_date" => date_formate($value['added_date']) , 
                "action" => "<div class='download-qr ms-4' title='Print Job Striker' data-val='".$value['job_striker_id']."' data-url='".$value['striker_pdf_url']."'><i class='ti ti-printer'></i></div>"];
        }
        $data["data"] = $job_striker_data;
        $total_record = $this->striker_model->get_job_striker_data_count([], $post_data["search"]);
        $data["recordsTotal"] = $total_record['total_record'];
        $data["recordsFiltered"] = $total_record['total_record'];
        echo json_encode($data);
        exit();
    }
    public function reprint_job_striker_data()
    {
        
        $insert_data = [
            "job_stricker_id" => $this->input->post("job_sticker_id"),
            "reason"=>$this->input->post("reason"),
            "printed_by"=>$this->session->userdata("id") ,
            "printed_date"=> date("Y-m-d H:i:s")
        ];
        $insert_id = $this->striker_model->insert_job_reprint_striker_data($insert_data);
        $message ="Something went wrong";
        $success = 0;
        if($insert_id > 0){
            $message ="added successfully.";
            $success = 1;
        }
        $return_arr['success'] = $success;
        $return_arr['message'] = $message;
        echo json_encode($return_arr);
        exit();
    }

    // box slip module

    public function reprint_box_slip_data()
    {
        
        $insert_data = [
            "box_slip_print_id" => $this->input->post("box_slip_id"),
            "reason"=>$this->input->post("reason"),
            "printed_by"=>$this->session->userdata("id") ,
            "printed_date"=> date("Y-m-d H:i:s")
        ];
        $insert_id = $this->striker_model->insert_box_slip_reprint_data($insert_data);
        $message ="Something went wrong";
        $success = 0;
        if($insert_id > 0){
            $message ="added successfully.";
            $success = 1;
        }
        $return_arr['success'] = $success;
        $return_arr['message'] = $message;
        echo json_encode($return_arr);
        exit();
    }

    public function box_slip_print()
    {
        $data = [];
        // $part_data = $this->striker_model->get_part_data();
        // $data['part_data'] = $part_data;
        $user_id = $this->session->userdata('id');
        $box_slip_scann_data = $this->striker_model->get_box_slip_scann_data($user_id);
        $job_count = 0;
        $job_packing_qty = 0;
        $box_slip_user_data_id = 0;
        $shift_name = '';
        $part_name = '';
        $print_count = 0;
        if(is_array($box_slip_scann_data)){
            if (count($box_slip_scann_data) > 0)
            {
                $part_json = json_decode($box_slip_scann_data['part_json'], true);
                $job_packing_qty = $part_json['box_packing_qty'];
                $shift_name = $part_json['shift_name'];
                $job_count = count($part_json['part_serial_numbers']);
                $box_slip_user_data_id = $box_slip_scann_data['box_slip_user_data_id'];
                $part_data = $this->striker_model->get_part_data($part_json['part_id']);
                $part_name = $part_data[0]['part_name'];
                $print_count = $box_slip_scann_data['print_count'];
            }
        }else{
            $userdata = $this->session->userdata();
            if(isset($userdata['shift_name'])){
                $shift_name = $this->session->userdata("shift_name");
            }
            
        }
        $data['total_print'] = $this->config->item("print_count");
        $data['print_count'] = $print_count;
        $data['part_name'] = $part_name;
        $data['shift_data'] = $this->striker_model->get_shift_data();
        $data['box_slip_user_data_id'] = $box_slip_user_data_id;
        $data['job_packing_qty'] = $job_packing_qty;
        $data['job_count'] = $job_count;
        $data['shift_name'] = $shift_name;
        $data['print_opt'] = ($job_count == $job_packing_qty && $job_count >0 && $job_packing_qty >0 ) ? "Yes" : "No";
        $data['job_percentage'] = $job_packing_qty != 0 ? ($job_count / $job_packing_qty) * 100 : 0;
        // pr($data,1);
        $this->smarty->loadView('box_slip.tpl', $data);
    }
    public function scann_part()
    {
        $post_data = $this->input->post();
        
        $job_striker_data = explode("|", $post_data['qr_data']);
        $job_striker_id = base64_decode($job_striker_data[1]);

        $job_striker_details = $this->striker_model->get_job_striker_details($job_striker_id);
        $user_id = $this->session->userdata('id');
        $box_slip_scann_data = $this->striker_model->get_box_slip_scann_data($user_id);
        $success = 0;
        $message = "Something went wrong";
        $job_packing_qty = $job_striker_details['box_packing_qty'];
        $box_slip_user_details_id = 0;
        $part_scann_data = $this->striker_model->get_part_scann_data($job_striker_details['part_id'],$job_striker_details['part_serial_number']);
        $flag = 1;
        if(isset($part_scann_data['part_serial_number'])){
            $flag = 0;
            $success = 0;
            $message = "This part serial number has already been scanned.";
        }else{

            $part_scann_data = $this->striker_model->get_last_part_scann_data($job_striker_details['part_id']);

            if(isset($part_scann_data['part_serial_number'])){
                $next_part_serial_number_arr = explode("-", $part_scann_data['part_serial_number']);
                $next_part_serial_number = ((int) $next_part_serial_number_arr[1])+1;

                $current_part_serial_number = $job_striker_details['part_serial_number'];
                $current_part_serial_number = explode("-", $job_striker_details['part_serial_number']);
                $current_part_serial_number = ((int) $current_part_serial_number[1]);
                // pr($current_part_serial_number,1);
                if($current_part_serial_number != $next_part_serial_number){
                    $flag = 0;
                    $next_part_serial_number_value = $next_part_serial_number_arr[0]."-".$next_part_serial_number;
                    $next_part_serial_number_value =  str_replace("/",".",$next_part_serial_number_value);
                    $success = 0;
                    $message = "Please scan the parts serial number-wise.The next part serial number to scan is ".$next_part_serial_number_value;
                }
            }else{

                $current_part_serial_number = $job_striker_details['part_serial_number'];
                $current_part_serial_number = explode("-", $job_striker_details['part_serial_number']);
                $current_part_serial_number = ((int) $current_part_serial_number[1]);

                if($current_part_serial_number != 1){
                   $flag = 0;
                   $success = 0;
                    $message = "Please scan the parts starting with the first serial number"; 
                }
            }
        }
        $part_name = '';
        if($flag == 1){
            if (isset($box_slip_scann_data['user_id']))
            {
                $box_slip_user_details_id = $box_slip_scann_data['box_slip_user_data_id'];
                $part_json = json_decode($box_slip_scann_data['part_json'], true);
                $job_count = count($part_json['part_serial_numbers']);
                 // scann count equal to qty 
                if ($job_count >= $job_packing_qty)
                {
                  $success = 0;
                  $message = "Box quantity fulfilled.";
                }else{
                    // check same part condition
                    if ($part_json['part_id'] == $job_striker_details['part_id'])
                    {
                        $part_serial_number_arr = $part_json['part_serial_numbers'];
                        // check part serial aleady scann 
                        if (!in_array($job_striker_details['part_serial_number'], $part_serial_number_arr))
                        {

                            $current_part_serial_number = $job_striker_details['part_serial_number'];
                            $current_part_serial_number = explode("-", $job_striker_details['part_serial_number']);
                            $current_part_serial_number = ((int) $current_part_serial_number[1]);
                            $previous_part_serial_number = end($part_serial_number_arr);
                            $previous_part_serial_number_arr = explode("-", $previous_part_serial_number);
                            $previous_part_serial_number_val = (int) $previous_part_serial_number_arr[1];
                            $next_part_serial_number = ($previous_part_serial_number_val+1);
                            // check next part serial number serial wise or not
                            if($current_part_serial_number == $next_part_serial_number){
                              array_push($part_serial_number_arr, $job_striker_details['part_serial_number']);
                              $part_json["part_serial_numbers"] = $part_serial_number_arr;
                              $part_json["shift_name"] = $post_data['shift_name'];
                              $this->session->set_userdata('shift_name', $post_data['shift_name']);
                              $update_arr = ["part_json" => json_encode($part_json) ];
                              $update_id = $this->striker_model->update_box_slip_scann_data($update_arr, $box_slip_scann_data['box_slip_user_data_id']);
                              if ($update_id)
                              {
                                $insert_arr = [
                                    "part_id"=>$job_striker_details['part_id'],
                                    "part_serial_number"=>$job_striker_details['part_serial_number'],
                                    "year"=> date("Y")
                                ];
                                $box_slip_scann_data = $this->striker_model->insert_job_scann_data($insert_arr);
                                $job_count = count($part_json['part_serial_numbers']);
                                $success = 1;
                                $message = "Part scan successfully.";
                                $striker_data = json_decode($job_striker_details['striker_data'],TRUE);
                                $part_name =$striker_data['part_name'];
                              }
                            }else{
                                $next_part_serial_number = $previous_part_serial_number_arr[0]."-".($previous_part_serial_number_val+1);
                                $next_part_serial_number = explode("-",$next_part_serial_number);
                                $next_part_serial_number = str_replace("/",".",$next_part_serial_number[0])."-".$next_part_serial_number[1];
                              $success = 0;
                              $message = "Please scan the parts serial number-wise.The next part serial number to scan is ".$next_part_serial_number;
                            }

                        }
                        else
                        {
                            $message = "This part serial number has already been scanned.";
                        }
                    }
                    else
                    {
                        $striker_data = json_decode($job_striker_details['striker_data'],TRUE);
                        $message = "Scan the '".$striker_data['part_name']."' part again.";
                    }
                }
                
            }
            else
            {
                
                $part_json = [
                    "part_id" => $job_striker_details['part_id'], 
                    "part_serial_numbers" => [$job_striker_details['part_serial_number']], 
                    "box_packing_qty" => $job_striker_details['box_packing_qty'], 
                    "shift_name" => $post_data['shift_name']
                ];
                $this->session->set_userdata('shift_name', $post_data['shift_name']);
                $insert_arr = ["user_id" => $user_id, "part_json" => json_encode($part_json) ];
                $box_slip_scann_data = $this->striker_model->insert_box_slip_scann_data($insert_arr);

                if ($box_slip_scann_data > 0)
                {
                    $insert_arr = [
                        "part_id"=>$job_striker_details['part_id'],
                        "part_serial_number"=>$job_striker_details['part_serial_number'],
                        "year"=> date("Y")
                    ];
                    $box_slip_scann_data = $this->striker_model->insert_job_scann_data($insert_arr);
                    $box_slip_user_details_id = $box_slip_scann_data;
                    $success = 1;
                    $message = "Part scan successfully.";
                    $job_count = 1;
                    $job_packing_qty = $job_striker_details['box_packing_qty'];
                    $striker_data = json_decode($job_striker_details['striker_data'],TRUE);
                    $part_name =$striker_data['part_name'];
                }
            }
            $print_enable = "No";
            if (($job_packing_qty == $job_count) && $job_packing_qty > 0 && $job_count > 0)
            {
                $print_enable = "Yes";
            }
            $return_arr['part_name'] = $part_name;
            $return_arr['box_slip_user_details_id'] = $box_slip_user_details_id;
            $return_arr['job_count'] = $job_count;
            $return_arr['job_packing_qty'] = $job_packing_qty;
            $return_arr['job_percentage'] = $job_packing_qty != 0 ? ($job_count / $job_packing_qty) * 100 : 0;
            $return_arr['print_enable'] = $print_enable;
        }
        
        $return_arr['success'] = $success;
        $return_arr['message'] = $message;
        echo json_encode($return_arr);
        exit();

    }
    public function box_scann_slip_print()
    {
        $post_data = $this->input->post();
        $box_slip_id = $post_data['box_slip_id'];
        $success = 0;
        $message = "Something went wrong";
        $pdf_url = '';
        $print_count = $this->config->item("print_count");
        $print_count_val  = 0;
        $reload_page = "No";
        if ($box_slip_id > 0)
        {

            $user_id = $this->session->userdata('id');
            $box_slip_scann_data = $this->striker_model->get_box_slip_scann_details($user_id, $box_slip_id);
            if($box_slip_scann_data['print_count'] == 0){
                // pr($box_slip_scann_data,1);
                $part_json = json_decode($box_slip_scann_data['part_json'], true);
                $part_data = $this->striker_model->get_part_data($part_json['part_id']);
                $part_data = $part_data[0];
                $start_serial_number = explode("-",$part_json['part_serial_numbers'][0]);
                $start_serial_number = $start_serial_number[1];
                $end_serial_number = explode("-",end($part_json['part_serial_numbers']));
                $end_serial_number = $end_serial_number[1];
                $box_count = $this->striker_model->get_box_count();
                $box_count = (int) $box_count['total_box'];
                $insert_arr =[
                    "part_id" => $part_json['part_id'],
                    "start_serial_number" => $start_serial_number,
                    "end_serial_number" => $end_serial_number,
                    "box_packing_qty" => $part_json['box_packing_qty'],
                    "box_number"=> ($box_count+1),
                    "customer_part_number" => $part_data['customer_part_number'],
                    "shift"=>$part_json['shift_name'],
                    "part_json" => json_encode($part_json),
                    "paking_date" => date("Y-m-d"),
                    "added_by"=>$user_id,
                    "added_date" => date("Y-m-d H:i:s") 
                ];

                $box_insert_id = $this->striker_model->insert_box_striker($insert_arr);
                if($box_insert_id > 0){
                    $print_data = [
                      "part_id" => $part_json['part_id'],
                      "part_name" => $part_data['part_name'],
                      "start_serial_number" => $start_serial_number,
                      "end_serial_number" => $end_serial_number,
                      "box_packing_qty" => $part_json['box_packing_qty'],
                      "box_number"=>($box_count+1),
                      "shift"=>$part_json['shift_name'],
                      "part_json" => json_encode($part_json),
                      "company_name" => $this->config->item("company_name_with_address"),
                      "paking_date" => date("Y-m-d"),
                      "customer_part_number" => $part_data['customer_part_number'],
                      "document_number" => $this->config->item("documnet_name"),
                      "refrence" => $this->config->item("reference_number")
                    ];
                    // pr($print_data,1);
                    $tempDir = "public/uploads/box_slip/" . date("Y") . "/";
                    if (!is_dir($tempDir))
                    {
                        mkdir($tempDir, 0777, true);
                    }
                    $tempDir .= date("m") . "/";
                    if (!is_dir($tempDir))
                    {
                        mkdir($tempDir, 0777, true);
                    }
                    $tempDir .= "box_slip_".($box_count+1).".pdf";
                    $this->box_slip_prints($print_data,$tempDir);
                    $pdf_url = base_url().$tempDir;
                    $update_arr = ['pdf_url'=>$pdf_url];
                    $insert_data = $this->striker_model->update_box_slip_data($update_arr, $box_insert_id);
                    if ($insert_data)
                    {

                        $update_arr = [
                            "box_slip_url" => $pdf_url,
                            "print_count" => 1 
                        ];
                        $update_id = $this->striker_model->update_box_slip_scann_data($update_arr, $box_slip_scann_data['box_slip_user_data_id']);
                        // $this->striker_model->delete_box_slip_scann_data($user_id,$box_slip_id);
                        $success = 1;
                        $message = "Print Box Slip successfully.";
                        $print_count_val = 1;
                    }
                }
            }else{

                if(($box_slip_scann_data['print_count']+1) != $print_count){
                    $update_arr = [
                            "print_count" => $box_slip_scann_data['print_count']+1
                        ];
                    $update_id = $this->striker_model->update_box_slip_scann_data($update_arr, $box_slip_scann_data['box_slip_user_data_id']);
                    if($update_id){
                        $pdf_url = $box_slip_scann_data['box_slip_url'];
                        $success = 1;
                        $message = "Print Box Slip successfully.";
                        $print_count_val = $box_slip_scann_data['print_count']+1;
                    }
                }else{
                    $reload_page = "Yes";
                    $pdf_url = $box_slip_scann_data['box_slip_url'];
                    $this->striker_model->delete_box_slip_scann_data($user_id,$box_slip_id);
                    $success = 1;
                    $message = "Print Box Slip successfully.";
                    $print_count_val = $box_slip_scann_data['print_count']+1;
                }
            }
        }
        $return_arr['print_count'] = $print_count_val;
        $return_arr['reload_page'] = $reload_page;
        $return_arr['pdf_url'] = $pdf_url;
        $return_arr['success'] = $success;
        $return_arr['message'] = $message;
        echo json_encode($return_arr);
        exit();
    }
    public function box_slip_prints($data = [],$path = '')
    {
        $data['company_logo'] = base_url("public/uploads/company_logo/").$this->config->item('company_logo');
        $data['paking_date'] = date("d-m-Y", strtotime($data['paking_date']));
        $path = dirname(dirname(__DIR__)) . "/".$path;
        $pdf = new TCPDF('P', 'mm', 'A5', true, 'UTF-8', false);
        $pdf->SetMargins(4, 7, 4, 4);
        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        // remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->SetAutoPageBreak(false);
        // set font
        $pdf->SetFont('helvetica', '', 10);
        // add a page
        $pdf->AddPage();
        // pr($data,1);
        $html = $this->smarty->fetch("box_slip_print.tpl", $data);
        // pr($html,1);
        // $pdf->setCellPaddings( $left = '', $top = '2px', $right = '', $bottom = '2px');
        $pdf->writeHTML($html, true, 0, true, 0);
        // $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
        $pdf->Output($path, 'F');
    }

    public function box_slip_prints_pdf(){
      $pdf = new TCPDF();
        $pdf->AddPage();
        $pdf->SetFont('times', '', 12);
        $pdf->Cell(0, 10, 'Hello, Printer!', 0, 1, 'C');
        
        // Example to print directly (browser dialog)
        $pdfContent = $pdf->Output('public/uploads/box_slip/example.pdf', 'S');
        // Optionally save the PDF file
        // $pdf->Output('document.pdf', 'D'); // 'D' means force download
        pr("$pdfContent",1);
        return $pdfContent;
    }
    
    public function box_slip_listing()
    {
        $column[] = [
            "data" => "box_number", 
            "title" => "Box Number", 
            "width" => "10%", 
            "className" => "dt-center", ];
        $column[] = [
            "data" => "part_name", 
            "title" => "Part Name/Description", 
            "width" => "27%", 
            "className" => "dt-left", ];
        $column[] = [
            "data" => "part_serial_numbers",
            "title" => "Part Serial Numbers",
            "width" => "30%", 
            "className" => "dt-left", ];
        $column[] = [
            "data" => "box_qty",
            "title" => "Box Qty",
            "width" => "8%", 
            "className" => "dt-left", ];
        $column[] = [
            "data" => "shift",
            "title" => "Shift",
            "width" => "8%", 
            "className" => "dt-left", ];
        $column[] = [
            "data" => "added_by", 
            "title" => "Added By", 
            "width" => "7%", 
            "className" => "dt-center"
        ];
        $column[] = [
            "data" => "added_date", 
            "title" => "Added Date", 
            "width" => "15%", 
            "className" => "dt-center"
        ];
        $column[] = [
            "data" => "action", 
            "title" => "Action", 
            "width" => "7%", 
            "className" => "dt-center"
        ];
        $data["data"] = $column;
        $data["is_searching_enable"] = false;
        $data["is_paging_enable"] = true;
        $data["is_serverSide"] = true;
        $data["is_ordering"] = true;
        $data["is_heading_color"] = "#a18f72";
        $data["no_data_message"] = '<div class="p-3 no-data-found-block"><img class="p-2" src="' . base_url() . 'public/assets/images/images/no_data_found_new.png" height="150" width="150"><br> No Employee data found..!</div>';
        $data["is_top_searching_enable"] = true;
        $data["sorting_column"] = json_encode([]);
        $data["page_length_arr"] = [[10, 50, 100, 200], [10, 50, 100, 200]];
        $data["admin_url"] = base_url();
        $data["base_url"] = base_url();
        $this->smarty->loadView('box_slip_listing.tpl', $data);
    }
    public function get_box_slip_data()
    {
        $post_data = $this->input->post();
        $column_index = array_column($post_data["columns"], "data");
        $order_by = "";
        foreach ($post_data["order"] as $key => $val)
        {
            if ($key == 0)
            {
                $order_by .= $column_index[$val["column"]] . " " . $val["dir"];
            }
            else
            {
                $order_by .= "," . $column_index[$val["column"]] . " " . $val["dir"];
            }
        }
        $condition_arr["order_by"] = $order_by;
        $condition_arr["start"] = $post_data["start"];
        $condition_arr["length"] = $post_data["length"];
        $base_url = $this->config->item("base_url");
        $data = $this->striker_model->get_box_slip_data($condition_arr, $post_data["search"]);
        
        $job_striker_data = [];
        foreach ($data as $key => $value)
        {
            
            $part_json = json_decode($value['part_json'],TRUE);
            $part_serial_number_arr = $part_json['part_serial_numbers'];
            foreach ($part_serial_number_arr as $part_serial_number_key => $part_serial_number_value) {
               $part_serial_number = explode("-",$part_serial_number_value);
               $part_serial_number = str_replace("/",".",$part_serial_number[0])." ".$part_serial_number[1];
               $part_serial_number_arr[$part_serial_number_key] = $part_serial_number;
            }
            $part_serial_numbers = implode(",",$part_serial_number_arr);
            $job_striker_data[$key] = [
                "box_number"=>$value['box_number'],
                "part_name" => $value['part_name'], 
                "part_serial_numbers" => $part_serial_numbers,
                "box_qty"=> $part_json['box_packing_qty'],
                "shift"=> $value['shift'],
                "added_by" => $value['user_name'], 
                "added_date" => date_formate($value['added_date']) , 
                "action" => "<div class='download-qr ms-4' title='Print Job Striker' data-val='".$value['box_slip_print_id']."' data-url='".$value['pdf_url']."'><i class='ti ti-printer'></i></div>"];
        }
        // pr($job_striker_data,1);
        $data["data"] = $job_striker_data;
        $total_record = $this->striker_model->get_box_slip_data_count([], $post_data["search"]);
        $data["recordsTotal"] = $total_record['total_record'];
        $data["recordsFiltered"] = $total_record['total_record'];
        echo json_encode($data);
        exit();
    }

}

?>
