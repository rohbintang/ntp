<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('customer_logged_in')) {
            redirect('customer/login');
        }
        $this->load->model('customer/customer_model');
        $this->load->library('form_validation');
    }

    public function index() {
        if ($this->input->post('profile')) {
            $this->form_validation->set_rules('name', 'Name', 'required|trim|min_length[5]|max_length[55]');
            $this->form_validation->set_rules('email', 'Email', 'required|max_length[50]|valid_email');
            $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[5]|max_length[20]');
            $this->form_validation->set_error_delimiters('<p class="text-error">', '</p>');
            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'customer_name' => $this->input->post('name'),
                    'customer_email' => $this->input->post('email'),
                    'customer_uname' => $this->input->post('username')
                );
                $this->customer_model->edit($this->session->userdata('customer_id'), $data);
                redirect('dashboard/user');
            } else {
                $data['title'] = 'Profile';
                $data['name'] = '';
                $data['email'] = '';
                $data['username'] = '';
                $data['password'] = '';
                $data['confirm'] = '';
                $this->template->customer('profile', $data);
            }
        } elseif ($this->input->post('pass')) {
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirm', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_error_delimiters('<p class="text-error">', '</p>');
            if ($this->form_validation->run() == TRUE) {
                $data['customer_pwd'] = md5($this->input->post('password'));
                $this->customer_model->edit($this->session->userdata('customer_id'), $data);
                redirect('dashboard/customer');
            } else {
                $data['title'] = 'Profile';
                $result = $this->customer_model->get($this->session->userdata('customer_id'));
                if ($result->num_rows() == 1) {
                    foreach ($result->result() as $value) {
                        $data['name'] = $value->customer_name;
                        $data['email'] = $value->customer_email;
                        $data['username'] = $value->customer_uname;
                        $data['password'] = $value->customer_pwd;
                        $data['confirm'] = '';
                    }
                }
                $this->template->customer('profile', $data);
            }
        } else {
            $data['title'] = 'Profile';
            $result = $this->customer_model->get($this->session->userdata('customer_id'));
            if ($result->num_rows() == 1) {
                foreach ($result->result() as $value) {
                    $data['name'] = $value->customer_name;
                    $data['email'] = $value->customer_email;
                    $data['username'] = $value->customer_uname;
                    $data['password'] = $value->customer_pwd;
                    $data['confirm'] = '';
                }
            }
            $this->template->customer('profile', $data);
        }
    }

}