<?php
/**
 *
 */
class Borrower_model  extends CI_model
{

public function get_borrowers(){
  $this->db->select('*');
  $this->db->from('borrower');
  return $this->db->get()->result_array();
}

public function check_user($user_form){
  $this->db->select('password');
  $this->db->from('borrower');
  $this->db->where('user',$user_form);
  return $this->db->get()->row('password');
}

public function insert_borrower($insert_data){
  $this->db->db_debug=false;
  $test=$this->db->insert('borrower',$insert_data);
  return $test;
}

}
