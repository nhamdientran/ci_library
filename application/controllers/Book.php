<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {
  function __construct()
	{
		parent::__construct();
		if(isset($_SESSION['logged_in'])){
      //we dont' do anything
    }
    else {
      redirect('login/login_form');
    }
	}

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
    if(isset($_SESSION['logged_in'])) {
      if($_SESSION['admin'] == true) {
        $data['page']='book/add_book_form';
        $this->load->view('menu/content',$data);
      }
    else {
      $data['message']='You dont have an access to this page';
      $data['page']='book/add_book_to_db';
      $this->load->view('menu/content',$data);
    }
    }
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

  public function delete_selected($delete_id){
    $this->load->model('Book_model');
    $data['book_id']=$delete_id;
    $data['chosen_book']=$this->Book_model->get_chosen_book($delete_id);
    $data['page']='book/delete_selected';
    $this->load->view('menu/content',$data);
  }

  public function delete_book($book_id){
    $this->load->model('Book_model');
    $succes=$this->Book_model->delete_book($book_id);
    if($succes){
      $data['message']='The book has been deleted';
    }
    else {
      $data['message']='There was an error, the book has been borrowed';
    }
    //$data['new_book']=$insert_data;
    $data['page']='book/add_book_to_db';
    $this->load->view('menu/content',$data);
  }

  public function edit_selected($edit_id){
    $this->load->model('Book_model');
    $data['book_id']=$edit_id;
    $data['chosen_book']=$this->Book_model->get_chosen_book($edit_id);
    $data['page']='book/edit_selected';
    $this->load->view('menu/content',$data);
  }

public function save_edited(){
  $this->load->model('Book_model');
  $update_id=$this->input->post('book_id');
  $data_update=array(
    'book_name'=>$this->input->post('book_name'),
    'author'=>$this->input->post('author'),
    'isbn'=>$this->input->post('isbn')
  );
  $success=$this->Book_model->save_edited($update_id,$data_update);
  if($success){
    $data['message']='You have updated book: '.$this->input->post('book_name');
  }
  else {
    $data['message']='Something went wrong';
  }
  $data['page']='book/add_book_to_db';
  $this->load->view('menu/content',$data);
}








}
