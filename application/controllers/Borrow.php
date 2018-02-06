<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Borrow extends CI_Controller {

  function __construct()
	{
		parent::__construct();
		$this->load->model('Borrow_model');
	}

  public function borrow_a_book(){
    $data['borrower_id_list']=$this->Borrow_model->get_borrower_id();
    $data['free_book_id_list']=$this->Borrow_model->get_free_book_id();

    $data['page']='borrow/borrow_a_book';
    $this->load->view('menu/content',$data);
  }
  public function add_borrow(){
    $add_data=array(
      'book_id'=>$this->input->post('book_id'),
      'borrower_id'=>$this->input->post('borrower_id'),
      'borrow_date'=>$this->input->post('borrow_date'),
      'return_date'=>$this->input->post('return_date')
    );
    $success=$this->Borrow_model->add_borrow($add_data);
    if($success){
      $data['message']='You have added a new borrow';
    }
    else {
      $data['message']='Something went wrong';
    }
    $data['page']='book/add_book_to_db';
    $this->load->view('menu/content',$data);
  }

  public function show_borrows(){
    $data['borrows']=$this->Borrow_model->get_borrows();
    $data['page']='borrow/show_borrows';
    $this->load->view('menu/content',$data);
  }






}
