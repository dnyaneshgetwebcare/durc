<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Part extends Core_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('part_model');
    include "application/libraries/phpqrcode/qrlib.php";
    include "application/libraries/fpdf/fpdf.php";
    $session = (array) $this->session;
    $flag = true;

    if(isset($session['userdata']['login'])){
      if($session['userdata']['login'] == 1){
        $flag = false;
      }
    }
    if($flag){
      redirect('/login');
    }


  }
  public function home()
  {
    $user_id = $this->session->userdata('id');
    $data = [];
    $data['part_data'] = $this->part_model->get_part();
    // $data['currency'] = '₹';
        $column[] = [
            "data" => "customer_logo", 
            "title" => "Customer Logo", 
            "width" => "5%", 
            "className" => "dt-left"
        ];
        $column[] = [
            "data" => "part_name", 
            "title" => "Part Name", 
            "width" => "20%", 
            "className" => "dt-left", 
        ];
        $column[] = [
            "data" => "customer_name", 
            "title" => "Customer Name", 
            "width" => "10%", 
            "className" => "dt-center", 
        ];
        $column[] = [
            "data" => "customer_part_name", 
            "title" => "Customer Part Name", 
            "width" => "17%", 
            "className" => "dt-center", 
        ];
        $column[] = [
            "data" => "customer_part_number", 
            "title" => "Customer Part Number", 
            "width" => "17%", 
            "className" => "dt-center", 
        ];
        $column[] = [
            "data" => "box_packing_qty", 
            "title" => "Box Packing Qty", 
            "width" => "17%", 
            "className" => "dt-center", 
        ];
        $column[] = [
            "data" => "vendor_initial", 
            "title" => "Vendor Initial", 
            "width" => "7%", 
            "className" => "dt-center", 
        ];
        $column[] = [
            "data" => "gcs_rev_date", 
            "title" => "GCS rev Date", 
            "width" => "17%", 
            "className" => "dt-center", 
        ];
        $column[] = [
            "data" => "stroke_travel", 
            "title" => "Stroke Travel", 
            "width" => "7%", 
            "className" => "dt-center", 
        ];
        $column[] = [
            "data" => "eel_extended", 
            "title" => "EEL Extended", 
            "width" => "7%", 
            "className" => "dt-center", 
        ];
        $column[] = [
            "data" => "eel_retracted", 
            "title" => "EEL Retracted", 
            "width" => "7%", 
            "className" => "dt-center", 
        ];
        $column[] = [
            "data" => "llc_extension", 
            "title" => "LLC Extension", 
            "width" => "7%", 
            "className" => "dt-center", 
        ];
        $column[] = [
            "data" => "maximum_rated_load", 
            "title" => "Maximum Rated Load", 
            "width" => "7%", 
            "className" => "dt-center", 
        ];
        $column[] = [
            "data" => "action", 
            "title" => "Action", 
            "width" => "3%", 
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
    $this->smarty->loadView('part_listing.tpl',$data);
  }
  public function part_listing(){
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
        $data = $this->part_model->get_part_list($condition_arr, $post_data["search"]);
        $part_list_data = [];
        foreach ($data as $key => $value)
        {
            $part_id = $value['part_id'];
            $part_logo =$value['customer_logo'];
            $part_list_data[$key] = [
                "customer_logo" => "<img src='public/uploads/parts/$part_logo'  width='80' height='80'>", 
                "part_name" => $value['part_name'], 
                "customer_name" => $value['customer_name'], 
                "customer_part_name" => $value['customer_part_name'], 
                "customer_part_number" => $value['customer_part_number'], 
                "box_packing_qty" => $value['box_packing_qty'], 
                "vendor_initial" => $value['vendor_initial'], 
                "gcs_rev_date" => $value['gcs_rev_date'], 
                "stroke_travel" => $value['stroke_travel'], 
                "eel_extended" => $value['eel_extended'], 
                "eel_retracted" => $value['eel_retracted'], 
                "llc_extension" => $value['llc_extension'], 
                "maximum_rated_load" => $value['maximum_rated_load'], 
                "action" => "<a  href='add-update-part?id=$part_id' class='edit_parts me-2 text-secondary' >
                <i class='ti ti-edit' title='Edit'></i></a>"];
        }
        $data["data"] = $part_list_data;
        $total_record = $this->part_model->get_part_list_count([], $post_data["search"]);
        $data["recordsTotal"] = $total_record['total_record'];
        $data["recordsFiltered"] = $total_record['total_record'];
        echo json_encode($data);
        exit();
  }
  public function add_update_part()
  {
    $id = $this->input->get('id');
    $data['customer_details'] = $this->part_model->get_customer();
    // pr($data,1);
    if (isset($id)) {
      $part_data = $this->part_model->get_part($id);
      $data['part'] = $part_data[0];
      $data['mode'] ="Update";
      // pr($data['part'],1);
      $this->smarty->loadView('add_update_part.tpl',$data);
    }else{
      $data['mode'] ="Add";
      $this->smarty->loadView('add_update_part.tpl',$data);
    }


  }
  public function add_update_part_action() {
  // pr($_FILES,1);
    // pr($this->input->post(),1);
    // $upload_data = [];
    // $profileImageData = $_FILES["customer_logo"]["name"] != "" && $_FILES["customer_logo"]["name"] != null ? $_FILES["customer_logo"]: [];
    // $config["upload_path"] = "public/uploads/parts/";
    // $config["allowed_types"] = "jpg|png|jpeg|png";
    // $this->load->library("upload", $config);
    // $upload_error_msg = "";
    // $upload_error = 0;
    // if (!empty($profileImageData)) {
    //   if (!$this->upload->do_upload("customer_logo")) {
    //     $upload_error_msg = $error = [
    //       "error" => $this->upload->display_errors(),
    //     ];
    //     $upload_error = 1;
    //   } else {
    //     $upload_data = $this->upload->data();
    //   }
    // }else if($this->input->post("mode") == "update"){

    //     $upload_data['file_name'] = $this->input->post("customer_logo_old");
    // }
    

      $data = [
      "part_name" => $this->input->post('part_name'),
      "customer_id" => $this->input->post('customer_name'),
      "customer_part_name" => $this->input->post('customer_part_name'),
      "customer_part_number" => $this->input->post('customer_part_number'),
      "box_packing_qty" => $this->input->post('box_packing_qty'),
      "vendor_initial" => $this->input->post('vendor_initial'),
      "gcs_rev_date" => $this->input->post('gcs_rev_date'),
      "stroke_travel" => $this->input->post('stroke_travel'),
      "eel_extended" => $this->input->post('eel_extended'),
      "eel_retracted" => $this->input->post('eel_retracted'),
      "llc_extension" => $this->input->post('llc_extension'),
      "maximum_rated_load" => $this->input->post('maximum_rated_load'),
      // 'status' => "Active",
    ];
      $mode = $this->input->post('mode');
      if ($mode == "add") {
        $data['added_by'] = 1;
        $data['added_date'] = date('Y-m-d H:i:s');
        $result = $this->part_model->insert_part_data($data);

        if ($result > 0) {
          $success = 1;
          $message = "Part added successfully!";
        } else {
          $success = 0;
          $message = "Error inserting data.";
        }
      } elseif ($mode == "update") {
        if (!empty($upload_data)) {
          $data['customer_logo'] = $upload_data['file_name'];
        } else {
          // $data['customer_logo'] = $this->input->post('profile_image_old');
        }

        $data['updated_by'] = 1;
        $data['updated_date'] = date('Y-m-d H:i:s');
        $data['part_id'] = $this->input->post('part_id');

        $result = $this->part_model->update_part_data($data);
      }
      if ($result > 0) {
        $success = 1;
        $message = "Part " . ($mode == "add" ? "inserted" : "Updated") . " Successfully!";
      } else if ($result < 0) {
        $success = -1;
        $message = "Part Name already exists.";
      } else {
        $success = 0;
        $message = "Error " . ($mode == "add" ? "inserting" : "updating") . " data.";
      }
    


    $return_arr['message'] = $message;
    $return_arr['success'] = $success;

    echo json_encode($return_arr);
    exit();
  }


  public function delete_part()
  {
    $id = $this->input->post("id");

    $result = $this->part_model->delete_part($id);

    if ($result) {
      $success = 1;
      $message = "part Delete successfully!";
    } else {
      $success = 0;
      $message = "An error occurred. Please try again.!";
    }

    $return_arr["message"] = $message;
    $return_arr["success"] = $success;
    echo json_encode($return_arr);
    exit();
  }
  public function add_customer()
  {
    $id = $this->input->get('id');
    if (isset($id)) {
      $cutomer_data = $this->part_model->get_customer($id);
      $data['part'] = $cutomer_data[0];
      $data['mode'] ="Update";
    }else{
      $data['mode'] ="Add";
    }
    $this->smarty->loadView('add_update_customer.tpl',$data);
  }
  public function add_update_customer_action() {
  // pr($_FILES,1);
    // pr($this->input->post(),1);
    $upload_data = [];
    $profileImageData = $_FILES["customer_logo"]["name"] != "" && $_FILES["customer_logo"]["name"] != null ? $_FILES["customer_logo"]: [];
    $config["upload_path"] = "public/uploads/parts/";
    $config["allowed_types"] = "jpg|png|jpeg|png";
    $this->load->library("upload", $config);
    $upload_error_msg = "";
    $upload_error = 0;
    if (!empty($profileImageData)) {
      if (!$this->upload->do_upload("customer_logo")) {
        $upload_error_msg = $error = [
          "error" => $this->upload->display_errors(),
        ];
        $upload_error = 1;
      } else {
        $upload_data = $this->upload->data();
      }
    }else if($this->input->post("mode") == "update"){

        $upload_data['file_name'] = $this->input->post("customer_logo_old");
    }
    

    if($upload_error == 0){
      $data = [
      "customer_name" => $this->input->post('customer_name'),
      "job_stricker_label" => $this->input->post('job_stricker_label'),
      "job_stricker_suffix" => $this->input->post('job_stricker_suffix'),
      "customer_logo" => $upload_data['file_name']
    ];
      $mode = $this->input->post('mode');
      if ($mode == "add") {
        $data['added_by'] = $this->session->userdata("id") ;
        $data['added_date'] = date('Y-m-d H:i:s');
        $result = $this->part_model->insert_cutomer_data($data);

        if ($result > 0) {
          $success = 1;
          $message = "Part added successfully!";
        } else {
          $success = 0;
          $message = "Error inserting data.";
        }
      } elseif ($mode == "update") {
        if (!empty($upload_data)) {
          $data['customer_logo'] = $upload_data['file_name'];
        } else {
          // $data['customer_logo'] = $this->input->post('profile_image_old');
        }

        $data['updated_by'] = $this->session->userdata("id") ;
        $data['updated_date'] = date('Y-m-d H:i:s');
        $data['customer_id'] = $this->input->post('customer_id');

        $result = $this->part_model->update_customer_data($data);
      }
      if ($result > 0) {
        $success = 1;
        $message = "Customer " . ($mode == "add" ? "inserted" : "Updated") . " Successfully!";
      } else if ($result < 0) {
        $success = -1;
        $message = "Customer already exists.";
      } else {
        $success = 0;
        $message = "Error " . ($mode == "add" ? "inserting" : "updating") . " data.";
      }
    }else{
      $success = 0;
      $message = $upload_error_msg['error'];
    }


    $return_arr['message'] = $message;
    $return_arr['success'] = $success;

    echo json_encode($return_arr);
    exit();
  }
  public function customer_listing()
  {
      $data['customer_details'] = $this->part_model->get_customer();
      // pr($data,1);
      $this->smarty->loadView('customer_listing.tpl',$data);
  }
  
}

?>
