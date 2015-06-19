<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
         if (!$this->session->userdata('customer_logged_in')) {
            redirect('login');
        }
        $this->load->model('frontend/users_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="text-error">', '</p>');
        
    }

    public function index() {
        $data['lihat']=$this->users_model->lihat();
    	$this->users_model->lihat($this->session->userdata('customer_id'), $data);
        $data['side'] = 'frontend/userbar';
        $this->template->frontend('user',$data);
        
    }
public function download() {

    $data['side']='frontend/userbar';
    $this->template->frontend('downloadtheme',$data);
}

      public function out() {
        $this->authentication->logout();
        redirect('home');
    }

public function invoices(){

    $data['side']='frontend/userbar';
    $this->template->frontend('invoices',$data);
    
}
}