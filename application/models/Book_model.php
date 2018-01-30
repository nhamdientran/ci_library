<?php
/**
 *
 */
class Book_model extends CI_model
{

  public function get_books(){
    $this->db->select('*');
    $this->db->from('book');
    return $this->db->get()->result_array();
  }
}
