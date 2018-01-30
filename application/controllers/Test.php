<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
  public function index(){
    echo 'This is index-methdod';
  }
  public function mymethod(){
    echo 'This is mytmehod';
  }
  public function second(){
    $data['aname']="Bob";
    $data['students']=array(
      array("fname"=>'Ann', "lname"=>'Smith'),
      array("fname"=>'Bob', "lname"=>'Smith'),
      array("fname"=>'Jill', "lname"=>'Jones')
    );
    $this->load->view('test/second',$data);
  }

  public function third(){
    $this->load->model('Test_model');
    $data['names']=$this->Test_model->get_students();
    $this->load->view('test/third',$data);
  }
}
