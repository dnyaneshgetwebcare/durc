<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends Core_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('user_model');
        include "application/libraries/phpqrcode/qrlib.php";
        include "application/libraries/fpdf/fpdf.php";
        require_once(APPPATH.'libraries/tcpdf/tcpdf.php');

    }
    public function login()
    {
        $data = [];
        $this->smarty->loadView('login.tpl',$data,'No','No');
    }
    public function page_not_found()
    {
        $data = [];
        $this->smarty->loadView('page_not_found.tpl',$data,'No','No');
    }
   
    public function user_listing()
    {
        $data['user_details'] = $this->user_model->get_user();
      $this->smarty->loadView('user_listing.tpl',$data);
    }
    public function add_update_user()
    {
      $id = $this->input->get('id');
      if (isset($id)) {
        $data['user_data'] = $this->user_model->get_user($id);
        $data['user'] = $data['user_data'][0];
        $this->smarty->loadView('add_update_user.tpl',$data);
      }else{
        $this->smarty->loadView('add_update_user.tpl');
      }

    }

    public function add_update_user_action()
    {

      $data = [
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        "password" => md5($this->input->post('password')),
        "type" => $this->input->post('type'),

      ];


          $mode = $this->input->post('mode');
          if ($mode == "add") {
            $data['added_by'] = $this->session->userdata("id") ;
            $data['added_date'] = date('Y-m-d H:i:s');
            $result = $this->user_model->insert_user_data($data);

            if ($result > 0) {
              $success = 1;
              $message = "user added successfully!";
            } else {
              $success = 0;
              $message = "Error inserting data.";
            }

          } elseif ($mode == "update") {


            $data['updated_by'] = $this->session->userdata("id") ;
            $data['updated_date'] = date('Y-m-d H:i:s');
            $data['id'] = $this->input->post('id');
            unset($data['password']);
            $result = $this->user_model->update_user_data($data);
          }

          if ($result > 0) {
            $success = 1;
            $message = "User " . ($mode == "add" ? "inserted" : "Updated") . " Successfully!";
          } else if ($result < 0) {
            $success = -1;
            $message = "Email Name already exists.";
          } else {
            $success = 0;
            $message = "Error " . ($mode == "add" ? "inserting" : "updating") . " data.";
          }

          $return_arr['message'] = $message;
          $return_arr['success'] = $success;

          echo json_encode($return_arr);
          exit();

    }

    
    public function login_action()
    {
      $email = $this->input->post('email');
      $password =  md5($this->input->post('password'));
      $user = $this->user_model->check_login_credentials($email, $password);
      // pr($password,1);
      $redirect_url = '';
      if (count($user) > 0) {
        $user_data = $user[0];
        $user[0]['login'] = true;
        $this->session->set_userdata($user[0]);
        $redirect_url = "part-listing";
        if($user_data['type'] == 'Job Striker Print Man'){
            $redirect_url = "job-striker";
        }else if($user_data['type'] == 'Packing Slip Print Man'){
          $redirect_url = "box-slip-print";
        }
        $success = 1;
        $message = "Login successfully!";
      } else {
        $success = 0;
        $message = "Invalid credentials!";
      }
      $return_arr['message'] = $message;
      $return_arr['success'] = $success;
      $return_arr['redirect_url'] = $redirect_url;
      echo json_encode($return_arr);
      exit();
    }
    public function logout(){
      unset($_SESSION['userdata']);
      session_destroy();
      redirect('/login');
    }
    public function change_pass_action()
    {
      $data['id'] = $this->input->post('id');
      $data['password'] =  md5($this->input->post('password'));
      $result = $this->user_model->change_pass_action($data);
      if ($result > 0) {
        $success = 1;
        $message = "Password Updated successfully!";
      } else {
        $success = 0;
        $message = "Invalid Data!";
      }
      $return_arr['message'] = $message;
      $return_arr['success'] = $success;
      echo json_encode($return_arr);
      exit();
    }
    public function config_setting()
    {

      $data['config_setting'] = $this->user_model->get_config_settings();
      $data['config_setting'] = $data['config_setting'];
      $data['company_logo_url'] = base_url("public/uploads/company_logo");
      $this->smarty->loadView('config_setting.tpl',$data);
    }


    public function update_config_setting_action() 
    {
        // pr($this->input->post(),1);
        $upload_data = [];
        $upload_error_msg = "";
        $companyImageData = $_FILES["company_logo"]["name"] != "" ? $_FILES["company_logo"]: [];
        if (!empty($companyImageData)) {
          $companyImageData = $_FILES["company_logo"];
          $config["upload_path"] = "public/uploads/company_logo/";
          $config["allowed_types"] = "jpg|png|jpeg";

          $this->load->library("upload", $config);

          if (!$this->upload->do_upload("company_logo")) {
            $upload_error_msg = $this->upload->display_errors();
          } else {
            $upload_data = $this->upload->data();
          }
        }
       
        $data = [
          "document_number" => $this->input->post('document_number'),
          "reference_number" => $this->input->post('reference_number'),
          "id" => $this->input->post('id'),

        ];
        if (!empty($upload_data)) {
          $data['company_logo'] = $upload_data['file_name'];
        } else {
          $data['company_logo'] = $this->input->post('company_logo_old');
        }

        $post_data = $this->input->post();
        unset($post_data['company_logo_old']);
        $config_data[0] = ["name" => "company_logo","value" => $data['company_logo']];
        foreach ($post_data as $key => $value) {
            array_push($config_data, ["name" =>$key,"value" => $value]);
        }
        $result = $this->user_model->update_config_setting($config_data);
        if ($result > 0) {
          $success = 1;
          $message = "Config Setting Update Successfully.";
        } else {
          $success = 0;
          $message = "Error updating data.";
        }

        if ($upload_error_msg) {
          $message .= " Upload Error: " . $upload_error_msg;
        }

        $return_arr['message'] = $message;
        $return_arr['success'] = $success;

        echo json_encode($return_arr);
        exit();
      }

    /* shift */
    public function shift_listing()
    {
      $data['shift_details'] = $this->user_model->get_shift_master();
      foreach ($data['shift_details'] as $key => $value) {
        $data['shift_details'][$key]['shift_start_time_formated'] = date("g:i A", strtotime($value['shift_start_time']));
        $data['shift_details'][$key]['shift_end_time_formated'] = date("g:i A", strtotime($value['shift_end_time']));
      }
      $this->smarty->loadView('shift_listing.tpl',$data);
    }
    public function add_shift(){
      $shift_name = $this->input->post("shift_name");
      $shift_start_time = $this->input->post("shift_start_time");
      $shift_end_time = $this->input->post("shift_end_time");
      $mode = $this->input->post("mode");
      $shift_id = $this->input->post("shift_id");
      $shift_already_added = $this->user_model->check_shift_exist($shift_start_time,$shift_end_time,$shift_id);
      $message = "Something went wrong";
      $success = 0;
      if(count($shift_already_added) == 0){
        if($mode == "Add"){
            $data = [
              "shift_name" =>$shift_name,
              "shift_start_time"=>$shift_start_time,
              "shift_end_time" => $shift_end_time,
              "added_by"=>$this->session->userdata("id") ,
              "added_date"=>date('Y-m-d H:i:s')
            ];
            $shift_insert_id = $this->user_model->insert_shift($data);
            if($shift_insert_id > 0){
              $message = "Shift added successfully.";
              $success = 1; 
            }
        }else{
            $data = [
              "shift_name" =>$shift_name,
              "shift_start_time"=>$shift_start_time,
              "shift_end_time" => $shift_end_time,
              "updated_by"=>$this->session->userdata("id") ,
              "updated_date"=>date('Y-m-d H:i:s')
            ];
            $shift_updated = $this->user_model->update_shift($data,$shift_id);
            if($shift_updated){
              $message = "Shift updated successfully.";
              $success = 1; 
            }
        }
        

      }else{
        $message = "Shift already exists,for this time.";
        $success = 0;
      }

      $return_arr['message'] = $message;
      $return_arr['success'] = $success;
      echo json_encode($return_arr);
      exit();
    }


}

?>
