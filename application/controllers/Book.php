<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {
  public function index(){
    $data['page']='book/index';
    $this->load->view('menu/content',$data);
  }

  public function show_books(){
    $this->load->model('Book_model');
    $data['books']=$this->Book_model->get_books();
    $data['page']='book/show_books';
    $this->load->view('menu/content',$data);
  }


  public function add_book_form(){
    $data['page']='book/add_book_form';
    $this->load->view('menu/content',$data);
  }
  public function add_book_to_db(){
    $this->load->model('Book_model');
    $insert_data=array(
      'book_id'=>$this->input->post('book_id'),
      'book_name'=>$this->input->post('book_name'),
      'author'=>$this->input->post('author'),
      'isbn'=>$this->input->post('isbn')
    );
    $succes=$this->Book_model->insert_new_book($insert_data);
    if($succes){
      $data['message']='New book is inserted to the library';
    }
    else {
      $data['message']='There was an error, check the primary key';
    }
    //$data['new_book']=$insert_data;
    $data['page']='book/add_book_to_db';
    $this->load->view('menu/content',$data);
  }





}
