<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
       
        $this->load->model('frontend/users_model');
        $this->load->library('form_validation');
    }

    public function index() {
         if (!$this->input->post()) {
            $data['title'] = 'Register';
            $this->template->frontend('register', $data);
        } else {
           $this->form_validation->set_rules('uname', 'Username', 'required|trim|min_length[5]|max_length[20]|is_unique[nm_customers.customer_uname]');
            $this->form_validation->set_rules('email', 'Email', 'required|max_length[50]|valid_email|is_unique[nm_customers.customer_email]');
            
            $this->form_validation->set_rules('pwd', 'Password', 'required');
            $this->form_validation->set_rules('cpwd', 'Confirm password', 'required|matches[pwd]');
            $this->form_validation->set_error_delimiters('<p class="text-error">', '</p>');
            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'customer_uname' => $this->input->post('uname'),
                    'customer_email' => $this->input->post('email'),
                    
                    'customer_pwd' => md5($this->input->post('pwd'))
                );
                $this->users_model->add($data);
                redirect('user');
            } else {
                $data['title'] = 'Add User';
                $this->template->frontend('register', $data);
            }
        }
    
    }
}