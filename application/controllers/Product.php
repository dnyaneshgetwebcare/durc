<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends Core_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('product_model');
    include "application/libraries/phpqrcode/qrlib.php";
    include "application/libraries/fpdf/fpdf.php";
    require_once(APPPATH.'libraries/tcpdf/tcpdf.php');
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
    $data['product_data'] = $this->product_model->get_products();
    $data['currency'] = '₹';
    $this->smarty->loadView('product_listing.tpl',$data);
  }
  public function add_product()
  {
    $id = $this->input->get('id');
    if (isset($id)) {
      $product_data = $this->product_model->get_products($id);
      $data['product'] = $product_data[0];
        // pr($data['product'],1);
    $this->smarty->view('add_product.tpl',$data);
  }else{
      $this->smarty->view('add_product.tpl');
  }


  }
  // public function add_product_action()
  // {
  //   $imageData = $_FILES['image']['name'] != '' ? $_FILES['image'] : [];
  //   $config['upload_path'] = 'public/img/uploads/products/';
  //   $config['allowed_types'] = 'gif|jpg|png|jpeg';
  //
  //   $this->load->library('upload', $config);
  //   $upload_data = [];
  //   if (!empty($imageData)) {
  //     if (!$this->upload->do_upload('image')) {
  //       $error = ['error' => $this->upload->display_errors()];
  //     } else {
  //       $upload_data = $this->upload->data();
  //     }
  //   }
  //   $product_code = $this->generate_product_code();
  //   $product_code_validate = $this->product_model->check_product_code($product_code);
  //   if($product_code_validate == -1){
  //     $product_code = $this->generate_product_code();
  //   }else{
  //     $product_code = $product_code;
  //   }
  //
  //   $data = [
  //     'Product_code' => $product_code,
  //     "product_name" => $this->input->post('product_name'),
  //     "mrp_price" => $this->input->post('mrp_price'),
  //     "unit" => $this->input->post('unit'),
  //     "unit_val" => $this->input->post('unit_val'),
  //     "product_description" => $this->input->post('product_description'),
  //     "image" => $upload_data['file_name'],
  //     "offer_value" => $this->input->post('offer_value'),
  //     'status' => "Active",
  //     'created_by' => 1,
  //     'created_on' => date('Y-m-d H:i:s'),
  //   ];
  //   $result = $this->product_model->insert_product_data($data);
  //   if ($result < 0) {
  //     $success = -1;
  //     $message = "Product Already Exits.";
  //   }else if ($result) {
  //     $tempDir = "public/img/qr_code/".$result."/";
  //     if (!is_dir($tempDir)) {
  //       mkdir($tempDir, 0777, true);
  //     } else {
  //       $files = glob($tempDir . '/*');
  //       foreach($files as $file){
  //         if(is_file($file))
  //         unlink($file);
  //       }
  //     }
  //
  //     $codeContents = $result;
  //     $fileName = '005_file_'.md5($codeContents).'.png';
  //     $pdfFileName = '005_file_'.md5($codeContents).'.pdf';
  //     $pngAbsoluteFilePath = $tempDir.$fileName;
  //     $urlRelativeFilePath = $tempDir.$fileName;
  //     if (!file_exists($pngAbsoluteFilePath)) {
  //
  //       QRcode::png(base_url()."product-details?id=".$codeContents, $pngAbsoluteFilePath, QR_ECLEVEL_L, 4,5);
  //       // echo 'File generated!';
  //
  //       $data['id'] = $result;
  //       $data['qr_code'] = $fileName;
  //       $qr_added = $this->product_model->add_qr_code($data);
  //       if ($qr_added > 0) {
  //         $success = 1;
  //         $message = "Product added successfully !";
  //       }else{
  //         $success = 1;
  //         $message = "QR code Not  Generated!";
  //       }
  //     }
  //   } else {
  //     $success = 0;
  //     $message = "Error add data.";
  //   }
  //
  //   $return_arr['message'] = $message;
  //   $return_arr['success'] = $success;
  //
  //   echo json_encode($return_arr);
  //   exit();
  // }
  //
  //
  //
  //

  public function add_product_action() {

    $upload_data = [];
            $profileImageData =
                      $_FILES["image"]["name"] != ""
                          ? $_FILES["image"]
                          : [];
                  $config["upload_path"] = "public/img/uploads/products/";
                  $config["allowed_types"] = "jpg|png|jpeg|png";
                  $this->load->library("upload", $config);
                  $upload_error_msg = "";
                  if (!empty($profileImageData)) {
                      if (!$this->upload->do_upload("image")) {
                          $upload_error_msg = $error = [
                              "error" => $this->upload->display_errors(),
                          ];
                          $upload_error = 1;
                      } else {
                          $upload_data = $this->upload->data();
                      }
                  }
            // pr($_FILES);
            // pr($upload_error_msg);
            // exit();

      // $imageData = $_FILES['image']['name'] != '' ? $_FILES['image'] : [];
      //   $config['upload_path'] = 'public/img/uploads/products/';
      //   $config['allowed_types'] = 'gif|jpg|png|jpeg';
      //
      //   $this->load->library('upload', $config);
      //   $upload_data = [];
      //   if (!empty($imageData)) {
      //     if (!$this->upload->do_upload('image')) {
      //       $error = ['error' => $this->upload->display_errors()];
      //     } else {
      //       $upload_data = $this->upload->data();
      //     }
      //   }


      $product_code = $this->generate_product_code();
      $product_code_validate = $this->product_model->check_product_code($product_code);
        if($product_code_validate == -1){
          $product_code = $this->generate_product_code();
        }else{
          $product_code = $product_code;
        }
      // while ($this->product_model->check_product_code($product_code) != -1) {
      //     $product_code = $this->generate_product_code();
      // }

      $data = [
          "product_name" => $this->input->post('product_name'),
          "mrp_price" => $this->input->post('mrp_price'),
          "unit" => $this->input->post('unit'),
          "unit_val" => $this->input->post('unit_val'),
          "product_description" => $this->input->post('product_description'),
          "image" => $upload_data['file_name'],
          "offer_value" => $this->input->post('offer_value'),
          'status' => "Active",

      ];

      $mode = $this->input->post('mode');
      if ($mode == "add") {
          $data['Product_code'] = $product_code;
          $data['created_by'] = 1;
          $data['created_on'] = date('Y-m-d H:i:s');
          $result = $this->product_model->insert_product_data($data);

          if ($result > 0) {
              $tempDir = "public/img/qr_code/" . $result . "/";
              if (!is_dir($tempDir)) {
                  mkdir($tempDir, 0777, true);
              } else {
                  $files = glob($tempDir . '/*');
                  foreach ($files as $file) {
                      if (is_file($file))
                          unlink($file);
                  }
              }

              $codeContents = $result;
              $fileName = 'qr_code_' . md5($codeContents) . '.png';
              $pngAbsoluteFilePath = $tempDir . $fileName;

              if (!file_exists($pngAbsoluteFilePath)) {

                $this->generatePdfQr($data,$pngAbsoluteFilePath);
                $data = [];
                $data['qr_code'] = $fileName;
                $qr_added = $this->product_model->add_qr_code($data,$result);

                  if ($qr_added > 0) {
                      $success = 1;
                      $message = "QR code added successfully!";
                  } else {
                      $success = 0;
                      $message = "QR code not added!";
                  }
              } else {
                  $success = 0;
                  $message = "File already generated! Using cached file.";
              }
          } else {
              $success = 0;
              $message = "Error inserting data.";
          }

      } elseif ($mode == "update") {
          if (!empty($upload_data)) {
              $data['image'] = $upload_data['file_name'];
          } else {
              $data['image'] = $this->input->post('profile_image_old');
          }

          $data['updated_by'] = 1;
          $data['updated_on'] = date('Y-m-d H:i:s');
          $data['product_id'] = $this->input->post('product_id');

          $result = $this->product_model->update_product_data($data);
      }

      if ($result > 0) {
          $success = 1;
          $message = "Product " . ($mode == "add" ? "inserted" : "updated") . " successfully!";
      } else if ($result < 0) {
          $success = -1;
          $message = "Product already exists.";
      } else {
          $success = 0;
          $message = "Error " . ($mode == "add" ? "inserting" : "updating") . " data.";
      }

      $return_arr['message'] = $message;
      $return_arr['success'] = $success;

      echo json_encode($return_arr);
      exit();
  }

  function generate_product_code() {
    $letters = '';
    for ($i = 0; $i < 3; $i++) {
      $letters .= chr(rand(65, 90));
    }

    $digits = '';
    for ($i = 0; $i < 7; $i++) {
      $digits .= rand(0, 9);
    }
    $randomCode = $letters . $digits;

    return $randomCode;
  }

  public function delete_product()
  {
        $id = $this->input->post("id");

        $result = $this->product_model->delete_product($id);

        if ($result) {
            $success = 1;
            $message = "Product Delete successfully!";
        } else {
            $success = 0;
            $message = "An error occurred. Please try again.!";
        }

        $return_arr["message"] = $message;
        $return_arr["success"] = $success;
        echo json_encode($return_arr);
        exit();
  }
  public function generatePdfQr($content = '',$path = ""){
      $product_name = $content['product_name'];
      $Product_code = $content['Product_code'];
      $product_description = $content['product_description'];
      $image = $content['image'];
      $mrp_price = $content['mrp_price'].$content['unit'];
      $codeContents = $product_name."\n".$product_description."\n".$Product_code."\n".$mrp_price."\n".$image;
      QRcode::png($codeContents, $path, QR_ECLEVEL_H, 4,5);
  }

  public function job_striker(){
    $data = [];
     $this->smarty->view('job_stiker.tpl',$data);
  }

}

?>
