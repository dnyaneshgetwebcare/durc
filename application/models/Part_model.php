<?php
class Part_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  public function get_part($part_id = '')
  {
    $this->db->select('p.*');
    $this->db->from('part_master as p');
    if($part_id > 0){
      $this->db->where("part_id",$part_id);
    }
    $result_obj = $this->db->get();
    $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
    return $ret_data;
  }
  public function get_part_list($condition_arr = [],$search_params = "")
  {
      $this->db->select('p.*,c.customer_name as customer_name,c.customer_logo');
      $this->db->from('part_master as p');
      $this->db->join('customer_master as c',"c.customer_id = p.customer_id");
      if (count($condition_arr) > 0) {
            $this->db->limit($condition_arr["length"], $condition_arr["start"]);
            if ($condition_arr["order_by"] != "") {
                $this->db->order_by($condition_arr["order_by"]);
            }
      }
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
      return $ret_data;
  }
  public function get_part_list_count()
  {
      $this->db->select('count(p.part_id) as total_record');
      $this->db->from('part_master as p');
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
      return $ret_data;
  }

  public function insert_part_data($data=[])
  {
    $this->db->select('*');
    $this->db->from('part_master');
    $this->db->where('part_name', $data['part_name']);
    $result_obj = $this->db->get();
    $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
    if (count($ret_data) > 0) {
      $insert_id = -1;
    } else {
      $this->db->insert('part_master', $data);
      $insert_id = $this->db->insert_id();
    }
    return $insert_id;

  }
  public function insert_cutomer_data($data=[])
  {
    $this->db->select('*');
    $this->db->from('customer_master');
    $this->db->where('customer_name', $data['customer_name']);
    $result_obj = $this->db->get();
    $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
    if (count($ret_data) > 0) {
      $insert_id = -1;
    } else {
      $this->db->insert('customer_master', $data);
      $insert_id = $this->db->insert_id();
    }
    return $insert_id;

  } 
  public function check_part_code($part_code)
  {
    $this->db->select('*');
    $this->db->from('part_master');
    $this->db->where('part_code', $part_code);
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
    $this->db->where('part_id', $id);
    $this->db->update('part_master', $data);

    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function delete_part($id)
  {
    $this->db->where("part_id", $id);
    $result = $this->db->delete("part_master");
    // $last_query = $this->db->last_query();
    return $result;
  }
  public function update_part_data($data)
  {
    $this->db->where('part_id', $data['part_id']);
    $this->db->update('part_master', $data);
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }
  public function update_customer_data($data)
  {
    $this->db->where('customer_id', $data['customer_id']);
    $this->db->update('customer_master', $data);
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }
   public function get_customer($customer_id = '')
  {
    $this->db->select('c.*');
    $this->db->from('customer_master as c');
    if($customer_id > 0){
      $this->db->where("customer_id",$customer_id);
    }
    $result_obj = $this->db->get();
    $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
    return $ret_data;
  }



}

?>
