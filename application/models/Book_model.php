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

public function insert_new_book($insert_data){
  $this->db->db_debug = false;
  $test=$this->db->insert('book',$insert_data);
  return $test;
}

}
