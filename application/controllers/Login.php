<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  public function login_form(){
    $data['page']='login/login_form';
    $this->load->view('menu/content',$data);
  }

  public function log_in(){
    $user_form=$this->input->post('username');
    $pass_form=$this->input->post('password');
    // echo $encrypted_pass;
    //later we can get the username and Password
    //from database
    $real_username='admin';
    $real_password='admin123';
    if($user_form==$real_username && $pass_form==$real_password){
      $_SESSION['logged_in']=true;
      $_SESSION['admin']=true;
      $_SESSION['user']=$user_form;
      $data['message']='You have logged in';
    }
    else if ($user_form!=$real_username) {
        $this->load->model('Borrower_model');
        $check_pass=$this->Borrower_model->check_user($user_form);
        if ($check_pass==$pass_form) {
            $_SESSION['logged_in']=true;
            $_SESSION['admin']=false;
            $_SESSION['user']=$user_form;
            $data['message']='You have logged in';
          }
      }

    else{
      $data['message']='Username/Password did not match';
    }

    $data['page']='book/add_book_to_db';
    $this->load->view('menu/content',$data);
  }
  public function logout(){
    session_destroy();
    $data['message']='You have logged out';
    $data['page']='book/add_book_to_db';
    $this->load->view('menu/content',$data);
  }

}
