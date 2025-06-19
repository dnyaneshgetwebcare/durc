<?php
class Product_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  public function get_products($product_id = '')
  {
    $this->db->select('p.*');
    $this->db->from('product_master as p');
    if($product_id > 0){
      $this->db->where("product_id",$product_id);
    }
    $result_obj = $this->db->get();
    $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
    return $ret_data;
  }

  public function insert_product_data($data=[])
  {
    $this->db->select('*');
    $this->db->from('product_master');
    $this->db->where('product_name', $data['product_name']);
    $result_obj = $this->db->get();
    $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
    if (count($ret_data) > 0) {
      $insert_id = -1;
    } else {
      $this->db->insert('product_master', $data);
      $insert_id = $this->db->insert_id();
    }
    return $insert_id;

  }
  public function check_product_code($product_code)
  {
    $this->db->select('*');
    $this->db->from('product_master');
    $this->db->where('product_code', $product_code);
    $result_obj = $this->db->get();
    $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
    $insert_id = 1;
    if (count($ret_data) > 0) {
      $insert_id = -1;
    }
    return $insert_id;

  }
  public function add_qr_code($data='',$id='')
  {
    $this->db->where('product_id', $id);
    $this->db->update('product_master', $data);

    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function delete_product($id)
  {
    $this->db->where("product_id", $id);
    $result = $this->db->delete("product_master");
    // $last_query = $this->db->last_query();
    return $result;
  }
  public function update_product_data($data)
{
  $this->db->where('product_id', $data['product_id']);
  $this->db->update('product_master', $data);
  if ($this->db->affected_rows() > 0) {
    return true;
  } else {
    return false;
  }
}



}

?>
