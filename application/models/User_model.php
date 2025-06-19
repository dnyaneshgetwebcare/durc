<?php
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function insert_user_data($data=[])
    {
      $this->db->select('*');
      $this->db->from('user_master');
      $this->db->where('email', $data['email']);
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
      if (count($ret_data) > 0) {
        $insert_id = -1;
      } else {
        $this->db->insert('user_master', $data);
        $insert_id = $this->db->insert_id();
      }
      return $insert_id;

    }
    public function update_user_data($data)
    {
      $this->db->where('id', $data['id']);
      $this->db->update('user_master', $data);
      if ($this->db->affected_rows() > -1) {
        return true;
      } else {
        return false;
      }
    }

    public function check_login_credentials($email, $password)
    {
      $this->db->select('*');
      $this->db->from('user_master');
      $this->db->where('email',$email);
      $this->db->where('password',$password);
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
      return $ret_data;
    }


    public function get_user($id = '')
    {
      $this->db->select('u.*');
      $this->db->from('user_master as u');
      if($id > 0){
        $this->db->where("id",$id);
      }
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
      return $ret_data;
    }
    public function change_pass_action($data)
    {
      $this->db->where('id', $data['id']);
      $this->db->update('user_master', $data);
      if ($this->db->affected_rows() > -1) {
        return true;
      } else {
        return false;
      }
    }
    public function get_config_settings($id = '')
    {
      $this->db->select('c.*');
      $this->db->from('config_settings as c');
      if($id > 0){
        $this->db->where("id",$id);
      }
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
      return $ret_data;
    }

    public function update_config_setting($data)
    {
      $this->db->update_batch('config_settings', $data, 'name');
      if ($this->db->affected_rows() > -1) {
        return true;
      } else {
        return false;
      }
      
    }

    public function get_shift_master($id = '')
    {
      $this->db->select('u.*');
      $this->db->from('shift_master as u');
      if($id > 0){
        $this->db->where("id",$id);
      }
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
      return $ret_data;
    }
    public function check_shift_exist($start_time = '',$end_time = '',$shift_id = '')
    {
      $this->db->select('s.*');
      $this->db->from('shift_master as s');
      if($shift_id > 0){
        $this->db->where("s.shift_id !=",$shift_id);
      }
      $this->db->group_start();
      $this->db->where("CAST('$start_time' AS TIME) BETWEEN s.shift_start_time AND s.shift_end_time");
      $this->db->or_where("CAST('$end_time' AS TIME) BETWEEN s.shift_start_time AND s.shift_end_time");
      $this->db->group_end();
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
      return $ret_data;
    }
    public function insert_shift($data=[])
    {
      
      $this->db->insert('shift_master', $data);
      $insert_id = $this->db->insert_id();
      return $insert_id;
    }
    public function update_shift($data = array(),$shift_id = '')
    {
      $this->db->where('shift_id', $shift_id);
      $this->db->update('shift_master', $data);
      if ($this->db->affected_rows() > -1) {
        return true;
      } else {
        return false;
      }
    }

}

?>
