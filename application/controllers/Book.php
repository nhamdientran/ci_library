<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {
  public function show_books(){
    $this->load->model('Book_model');
    $data['books']=$this->Book_model->get_books();
    $data['page']='book/show_books';
    $this->load->view('menu/content',$data);
  }
}
