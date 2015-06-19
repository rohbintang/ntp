<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
    }

    public function index (){
    	$this->load->view('frontend/login');
    }

   // public function proses() {
   //      // echo $this->input->post('username');
   //      // return 'ok';
   //      $username = $this->input->post('username');
   //      $password = $this->input->post('password');
   //      $result = $this->liblogin->in($username, $password);
   //      if ($result) {
   //          redirect('dev');
   //      } else {
   //          redirect('login');
   //      }
   //  }

   //  public function logout() {
   //      $this->authentication->logout();
   //      redirect('login');
   //  }

}