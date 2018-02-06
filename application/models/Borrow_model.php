<?php
/**
 *
 */
class Borrow_model extends CI_model
{

  public function get_borrower_id(){
    $this->db->select('borrower_id');
    $this->db->from('borrower');
    return $this->db->get()->result_array();
  }

  public function get_free_book_id(){
    $this->db->select('book.book_id');
    $this->db->from('book');
    $this->db->join('borrow','book.book_id=borrow.book_id','left');
    $this->db->where('borrow.book_id',NULL);
    return $this->db->get()->result_array();
  }

  public function add_borrow($add_data){
      $this->db->db_debug = false;
      $test=$this->db->insert('borrow',$add_data);
      return $test;
  }
  public function get_borrows(){
    $this->db->select('firstname, lastname, book_name, return_date');
    $this->db->from('borrower');
    $this->db->join('borrow','borrower.borrower_id=borrow.borrower_id','inner');
    $this->db->join('book','borrow.book_id=book.book_id','inner');
    $this->db->order_by('return_date','desc');
    return $this->db->get()->result_array();

  }






}
