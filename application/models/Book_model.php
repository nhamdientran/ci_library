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

public function get_chosen_book($delete_id){
  $this->db->select('book_name,author,isbn');
  $this->db->from('book');
  $this->db->where('book_id',$delete_id);
  return $this->db->get()->result_array();
}

public function delete_book($book_id){
  $this->db->db_debug = false;
  $this->db->where('book_id',$book_id);
  $test=$this->db->delete('book');
  return $test;
}

public function save_edited($update_id,$data_update){
  $this->db->db_debug = false;
  $this->db->where('book_id',$update_id);
  $test=$this->db->update('book',$data_update);
  return $test;
}





}
