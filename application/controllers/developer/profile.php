<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('developer_logged_in')) {
            redirect('developer/login');
        }
        $this->load->model('developer/developer_model');
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
                    'developer_name' => $this->input->post('name'),
                    'developer_email' => $this->input->post('email'),
                    'developer_uname' => $this->input->post('username')
                );
                $this->developer_model->edit($this->session->userdata('developer_id'), $data);
                redirect('dashboard/user');
            } else {
                $data['title'] = 'Profile';
                $data['name'] = '';
                $data['email'] = '';
                $data['username'] = '';
                $data['password'] = '';
                $data['confirm'] = '';
                $this->template->developer('profile', $data);
            }
        } elseif ($this->input->post('pass')) {
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirm', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_error_delimiters('<p class="text-error">', '</p>');
            if ($this->form_validation->run() == TRUE) {
                $data['developer_pwd'] = md5($this->input->post('password'));
                $this->developer_model->edit($this->session->userdata('developer_id'), $data);
                redirect('dashboard/user');
            } else {
                $data['title'] = 'Profile';
                $result = $this->developer_model->get($this->session->userdata('developer_id'));
                if ($result->num_rows() == 1) {
                    foreach ($result->result() as $value) {
                        $data['name'] = $value->developer_name;
                        $data['email'] = $value->developer_email;
                        $data['username'] = $value->developer_uname;
                        $data['password'] = $value->developer_pwd;
                        $data['confirm'] = '';
                    }
                }
                $this->template->developer('profile', $data);
            }
        } else {
            $data['title'] = 'Profile';
            $result = $this->developer_model->get($this->session->userdata('developer_id'));
            if ($result->num_rows() == 1) {
                foreach ($result->result() as $value) {
                    $data['name'] = $value->developer_name;
                    $data['email'] = $value->developer_email;
                    $data['username'] = $value->developer_uname;
                    $data['password'] = $value->developer_pwd;
                    $data['confirm'] = '';
                }
            }
            $this->template->developer('profile', $data);
        }
    }

}