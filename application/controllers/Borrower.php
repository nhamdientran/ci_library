<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Borrower extends CI_Controller {
  public function show_borrowers(){
    $this->load->model('Borrower_model');
    $data['borrowers']=$this->Borrower_model->get_borrowers();
    $data['page']='borrower/show_borrowers';
    $this->load->view('menu/content',$data);
  }
}
