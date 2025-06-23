<?php
class Striker_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function insert_job_striker($data=[])
    {
      $this->db->insert('job_striker', $data);
      $insert_id = $this->db->insert_id();
      return $insert_id;

    }
    public function insert_job_reprint_striker_data($data=[])
    {
      $this->db->insert('job_stricker_reprint_details', $data);
      $insert_id = $this->db->insert_id();
      return $insert_id;

    }
    public function insert_box_slip_reprint_data($data=[])
    {
      $this->db->insert('box_slip_reprint_details', $data);
      $insert_id = $this->db->insert_id();
      return $insert_id;

    }
    public function get_shift_data()
    {
      $this->db->select('*');
      $this->db->from('shift_master');
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
      return $ret_data;
    }
    public function update_job_striker($job_striker_update_arr = [],$id = ''){
      $this->db->where('job_striker_id', $id);
      $this->db->update('job_striker', $job_striker_update_arr);
      if ($this->db->affected_rows() > 0) {
        return true;
      } else {
        return false;
      }
    }
    public function get_part_data($part_id = '')
    {
      $this->db->select('p.*,c.customer_name as customer_name,c.customer_logo as customer_logo,c.job_stricker_suffix as job_stricker_suffix,c.job_stricker_label as job_stricker_label');
      $this->db->from('part_master as p');
      $this->db->join('customer_master as c',"c.customer_id = p.customer_id");
      if($part_id > 0){
        $this->db->where('part_id', $part_id);
      }
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
      return $ret_data;
    }
    public function get_job_striker_count($part_id = '')
    {
      $this->db->select('count(job_striker_id) as total_striker');
      $this->db->from('job_striker');
      $this->db->where('part_id',$part_id);
      $this->db->where('YEAR(added_date)',date("Y"));
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
      return $ret_data;
    }
    public function get_job_striker_data($condition_arr = [],
        $search_params = "")
    {
      $this->db->select('j.*,p.part_name as part_name,u.name as user_name');
      $this->db->from('job_striker as j');
      $this->db->join('part_master as p',"p.part_id = j.part_id");
      $this->db->join('user_master as u',"u.id = j.added_by");
      if (count($condition_arr) > 0) {
            $this->db->limit($condition_arr["length"], $condition_arr["start"]);
            if ($condition_arr["order_by"] != "") {
                $this->db->order_by($condition_arr["order_by"]);
            }
      }
      if (!empty($search_params["value"])) {
            $keyword = $search_params["value"];
            $this->db->group_start(); // Start a group of OR conditions
            
            $fields = [
                'p.part_name',
                'u.name',
                'j.part_serial_number',
                // Add other relevant fields as needed
            ];
            
            foreach ($fields as $field) {
                $this->db->or_like($field, $keyword);
            }
            
            $this->db->group_end(); // End the group of OR conditions
        }
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
      return $ret_data;
    }
    public function get_job_striker_data_count($condition_arr = [],
        $search_params = "")
    {
      $this->db->select('count(j.job_striker_id) as total_record');
      $this->db->from('job_striker as j');
      $this->db->join('part_master as p',"p.part_id = j.part_id");
      $this->db->join('user_master as u',"u.id = j.added_by");
      if (!empty($search_params["value"])) {
            $keyword = $search_params["value"];
            $this->db->group_start(); // Start a group of OR conditions
            
            $fields = [
                'p.part_name',
                'u.name',
                'j.part_serial_number',
                // Add other relevant fields as needed
            ];
            
            foreach ($fields as $field) {
                $this->db->or_like($field, $keyword);
            }
            
            $this->db->group_end(); // End the group of OR conditions
        }
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
      return $ret_data;
    }
    public function get_job_striker_details($job_striker_id = '')
    {
      $this->db->select('j.*,p.box_packing_qty as box_packing_qty');
      $this->db->from('job_striker as j');
      $this->db->join('part_master as p','j.part_id = p.part_id');
      $this->db->where('job_striker_id', $job_striker_id);
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
      return $ret_data;
    }
    public function get_box_slip_scann_data($user_id = '')
    {
      $this->db->select('bx.*');
      $this->db->from('box_slip_user_data as bx');
      $this->db->where('user_id', $user_id);
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
      return $ret_data;
    }

		 public function get_user_interlock($part_id = '', $user_id='')
    {
      $this->db->select('bx.user_id as user_id,u.name as user_name');
      $this->db->from('box_slip_user_data as bx');
			$this->db->join('user_master as u',"u.id = bx.user_id");
      $this->db->where("JSON_EXTRACT(`part_json`, '$.part_id') =", $part_id);
      $this->db->where("user_id !=", $user_id);
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
      return $ret_data;
    }
    public function insert_box_slip_scann_data($data=[])
    {
      $this->db->insert('box_slip_user_data', $data);
      $insert_id = $this->db->insert_id();
      return $insert_id;

    }
    public function get_part_scann_data($part_id = '',$part_serial_number='')
    {
      $this->db->select('s.*');
      $this->db->from('scanned_part as s');
      $this->db->where('part_id', $part_id);
      $this->db->where('part_serial_number', $part_serial_number);
      $this->db->where('year', date("Y"));
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
      return $ret_data;
    }
    public function get_last_part_scann_data($part_id = '')
    {
      $this->db->select('s.part_serial_number');
      $this->db->from('scanned_part as s');
      $this->db->where('part_id', $part_id);
      $this->db->where('year', date("Y"));
      $this->db->order_by("s.scanned_part_id","desc");
      $this->db->limit(1); 
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
      // pr($this->db->last_query());
      return $ret_data;
    }
    public function insert_job_scann_data($data=[])
    {
      $this->db->insert('scanned_part', $data);
      $insert_id = $this->db->insert_id();
      return $insert_id;

    }
    public function update_box_slip_scann_data($update_arr = [],$id = ''){
      $this->db->where('box_slip_user_data_id', $id);
      $this->db->update('box_slip_user_data', $update_arr);
      if ($this->db->affected_rows() > -1) {
        return true;
      } else {
        return false;
      }
    }
    public function delete_box_slip_scann_data($id='',$box_slip_user_data_id='')
    {
      $this->db->where('user_id', $id);
      $this->db->where('box_slip_user_data_id', $box_slip_user_data_id);
      $this->db->delete('box_slip_user_data');

    }
    public function get_box_slip_scann_details($user_id = '',$box_slip_id = '')
    {
      $this->db->select('bx.*');
      $this->db->from('box_slip_user_data as bx');
      $this->db->where('user_id', $user_id);
      $this->db->where('box_slip_user_data_id', $box_slip_id);
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
      return $ret_data;
    }
    public function get_box_count($part_id = 0)
    {
      $this->db->select('count(box_slip_print_id) as total_box');
      $this->db->from('box_slip_print');
      $this->db->where('YEAR(added_date)',date("Y"));
      $this->db->where('part_id',$part_id);
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
      return $ret_data;
    }
    public function insert_box_striker($data=[])
    {
      $this->db->insert('box_slip_print', $data);
      $insert_id = $this->db->insert_id();
      return $insert_id;

    }
    public function update_box_slip_data($update_arr = [],$id = ''){
      $this->db->where('box_slip_print_id', $id);
      $this->db->update('box_slip_print', $update_arr);
      if ($this->db->affected_rows() > 0) {
        return true;
      } else {
        return false;
      }
    }

    public function get_box_slip_data($condition_arr = [],
        $search_params = "")
    {
      $this->db->select('b.*,p.part_name as part_name,u.name as user_name');
      $this->db->from('box_slip_print as b');
      $this->db->join('part_master as p',"p.part_id = b.part_id");
      $this->db->join('user_master as u',"u.id = b.added_by");
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
    public function get_box_slip_data_count()
    {
      $this->db->select('count(box_slip_print_id) as total_record');
      $this->db->from('box_slip_print');
      $result_obj = $this->db->get();
      $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
      return $ret_data;
    }


}

?>
