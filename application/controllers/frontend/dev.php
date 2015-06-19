<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dev extends CI_Controller {

    public function __construct() {
        parent::__construct();
         if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
        $this->load->model('frontend/dev_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="text-error">', '</p>');
        $this->load->model('frontend/order_model');

        
       


        
    }

    public function index() {
        $data['lihat']=$this->dev_model->lihat();
    	$this->dev_model->lihat($this->session->userdata('developer_id'), $data);
        $data['side'] = 'frontend/devbar';
        $this->template->frontend('dev',$data);
        
    }

public function upload () {
    $data['lihat']=$this->dev_model->lihat();
    $this->dev_model->lihat($this->session->userdata('developer_id'), $data);
        
    $data['side'] = 'frontend/devbar';
    if ($this->input->post() == NULL) {
            $this->template->frontend('basic', $data);
        } else {
            $validation = $this->form_validation;
            //if ($validation->run() == TRUE) {
            //echo 'OK';
            //print_r($data);
            $result = $this->order_model->insert_invitation_basic();
            if ($result) {
                redirect('dev/succes');
            } else {
                echo 'Data yang anda masukkan salah';
            }
            
        }
}



 public function succes() {
        $data['side'] = 'frontend/devbar';
        $this->template->frontend('succes',$data);
    }

      public function out() {
        $this->authentication->logout();
        redirect('home');
    }
}
?>