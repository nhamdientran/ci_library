<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Borrower extends CI_Controller {
  public function show_borrowers(){
    $this->load->model('Borrower_model');
    $data['borrowers']=$this->Borrower_model->get_borrowers();
    $data['page']='borrower/show_borrowers';
    $this->load->view('menu/content',$data);
  }


  public function add_borrower(){
    if(isset($_SESSION['logged_in'])) {
      if($_SESSION['admin'] == true) {
        $data['page']='borrower/add_borrower';
        $this->load->view('menu/content',$data);
      }
      else {
        $data['message']='You dont have an access to this page';
        $data['page']='book/add_book_to_db';
        $this->load->view('menu/content',$data);
      }
    }
  }
  public function save_borrower(){
    // print_r($this->input->post());
    $this->load->model('Borrower_model');
    $insert_data=array(
      'borrower_id'=>$this->input->post('borrower_id'),
      'firstname'=>$this->input->post('firstname'),
      'lastname'=>$this->input->post('lastname'),
      'phone'=>$this->input->post('phone'),
      'streetAddress'=>$this->input->post('streetAddress'),
      'postalCode'=>$this->input->post('postalCode'),
      'user'=>$this->input->post('user'),
      'password'=>$this->input->post('password')
    );
    $test=$this->Borrower_model->insert_borrower($insert_data);
    if($test){
      $data['message']='New borrower added succesfully!';
    }
    else {
      $data['message']='Error. Check the borrower_id!';
    }

    $data['page']='book/add_book_to_db';
    $this->load->view('menu/content',$data);

  }







}
