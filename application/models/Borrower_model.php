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
}
