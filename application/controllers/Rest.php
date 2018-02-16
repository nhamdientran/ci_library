<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest extends CI_Controller {

  public function get_borrowers(){
    $this->load->model('Borrower_model');
    $borrowers=$this->Borrower_model->get_borrowers();
    echo json_encode($borrowers);
  }
}
