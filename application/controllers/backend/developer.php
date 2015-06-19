<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Developer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('dashboard/login');
        }
        $this->load->model('backend/developer_model');
        $this->load->library('form_validation');
    }

    public function index() {
        redirect('dashboard/developer/view');
    }

    public function view() {

        //Pagination
        $config['base_url'] = base_url('dashboard/user/view/');
        $config['per_page'] = 5;
        $value = $config['per_page'];
        $page = ($this->uri->segment(4)) ? (int) $this->uri->segment(4) : 1;
        $offset = ($page - 1) * $value;
        if ($this->input->post()) {
            $keyword = $this->input->post('keyword');
            $field = 'user_' . $this->input->post('field');
            $config['total_rows'] = $this->developer_model->count($keyword, $field);
            $data['users'] = $this->developer_model->view($keyword, $field, $value, $offset);
        } else {
            $config['total_rows'] = $this->developer_model->count(NULL, NULL);
            $data['users'] = $this->developer_model->view(NULL, NULL, $value, $offset);
        }
        $this->pagination->initialize($config); //Some config in application/config/pagination.php
        $data['pagination'] = $this->pagination->create_links();

        //Title
        $data['title'] = 'View Developers';

        //Template
        $this->template->backend('developers', $data);
    }

    public function add() {

        if (!$this->input->post()) {
            $data['title'] = 'Add User';
            $this->template->backend('add_user', $data);
        } else {
            $this->form_validation->set_rules('name', 'Name', 'required|trim|min_length[5]|max_length[55]');
            $this->form_validation->set_rules('email', 'Email', 'required|max_length[50]|valid_email|is_unique[nm_users.user_email]');
            $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[5]|max_length[20]|is_unique[nm_users.user_username]');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirm-password', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_error_delimiters('<p class="text-error">', '</p>');
            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'user_name' => $this->input->post('name'),
                    'user_email' => $this->input->post('email'),
                    'user_username' => $this->input->post('username'),
                    'user_password' => md5($this->input->post('password'))
                );
                $this->developer_model->add($data);
                redirect('dashboard/user');
            } else {
                $data['title'] = 'Add User';
                $this->template->backend('add_user', $data);
            }
        }
    }

    public function profile() {
        if ($this->input->post('profile')) {
            $this->form_validation->set_rules('name', 'Name', 'required|trim|min_length[5]|max_length[55]');
            $this->form_validation->set_rules('email', 'Email', 'required|max_length[50]|valid_email');
            $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[5]|max_length[20]');
            $this->form_validation->set_error_delimiters('<p class="text-error">', '</p>');
            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'user_name' => $this->input->post('name'),
                    'user_email' => $this->input->post('email'),
                    'user_username' => $this->input->post('username')
                );
                $this->developer_model->edit($this->session->userdata('user_id'), $data);
                redirect('dashboard/user');
            } else {
                $data['title'] = 'Profile';
                $data['name'] = '';
                $data['email'] = '';
                $data['username'] = '';
                $data['password'] = '';
                $data['confirm'] = '';
                $this->template->backend('profile', $data);
            }
        } elseif ($this->input->post('pass')) {
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirm', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_error_delimiters('<p class="text-error">', '</p>');
            if ($this->form_validation->run() == TRUE) {
                $data['user_password'] = md5($this->input->post('password'));
                $this->developer_model->edit($this->session->userdata('user_id'), $data);
                redirect('dashboard/user');
            } else {
                $data['title'] = 'Profile';
                $result = $this->developer_model->get($this->session->userdata('user_id'));
                if ($result->num_rows() == 1) {
                    foreach ($result->result() as $value) {
                        $data['name'] = $value->user_name;
                        $data['email'] = $value->user_email;
                        $data['username'] = $value->user_username;
                        $data['password'] = $value->user_password;
                        $data['confirm'] = '';
                    }
                }
                $this->template->backend('profile', $data);
            }
        } else {
            $data['title'] = 'Profile';
            $result = $this->developer_model->get($this->session->userdata('user_id'));
            if ($result->num_rows() == 1) {
                foreach ($result->result() as $value) {
                    $data['name'] = $value->user_name;
                    $data['email'] = $value->user_email;
                    $data['username'] = $value->user_username;
                    $data['password'] = $value->user_password;
                    $data['confirm'] = '';
                }
            }
            $this->template->backend('profile', $data);
        }
    }
    
    public function edit($id) {
        if ($this->input->post('edit')) {
            $this->form_validation->set_rules('name', 'Name', 'required|trim|min_length[5]|max_length[55]');
            $this->form_validation->set_rules('email', 'Email', 'required|max_length[50]|valid_email');
            $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[5]|max_length[20]');
            $this->form_validation->set_error_delimiters('<p class="text-error">', '</p>');
            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'user_name' => $this->input->post('name'),
                    'user_email' => $this->input->post('email'),
                    'user_username' => $this->input->post('username')
                );
                $this->developer_model->edit($id, $data);
                redirect('dashboard/user');
            } else {
                $data['title'] = 'Edit User';
                $data['id'] = $id;
                $data['name'] = '';
                $data['email'] = '';
                $data['username'] = '';
                $data['password'] = '';
                $data['confirm'] = '';
                $this->template->backend('edit_user', $data);
            }
        } elseif ($this->input->post('pass')) {
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirm', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_error_delimiters('<p class="text-error">', '</p>');
            if ($this->form_validation->run() == TRUE) {
                $data['user_password'] = md5($this->input->post('password'));
                $this->developer_model->edit($id, $data);
                redirect('dashboard/user');
            } else {
                $data['title'] = 'Edit User';
                $result = $this->developer_model->get($id);
                if ($result->num_rows() == 1) {
                    foreach ($result->result() as $value) {
                        $data['id'] = $id;
                        $data['name'] = $value->user_name;
                        $data['email'] = $value->user_email;
                        $data['username'] = $value->user_username;
                        $data['password'] = $value->user_password;
                        $data['confirm'] = '';
                    }
                }
                $this->template->backend('edit_user', $data);
            }
        } else {
            $data['title'] = 'Edit User';
            $result = $this->developer_model->get($id);
            if ($result->num_rows() == 1) {
                foreach ($result->result() as $value) {
                    $data['id'] = $id;
                    $data['name'] = $value->user_name;
                    $data['email'] = $value->user_email;
                    $data['username'] = $value->user_username;
                    $data['password'] = $value->user_password;
                    $data['confirm'] = '';
                }
            }
            $this->template->backend('edit_user', $data);
        }
    }

    public function del($id) {
        if ($id) {
            $this->developer_model->del($id);
            redirect('dashboard/user');
        } else {
            redirect('dashboard/user');
        }
    }

    public function dev (){

        $config['base_url'] = base_url('dashboard/user/dev/');
        $config['per_page'] = 5;
        $value = $config['per_page'];
        $page = ($this->uri->segment(4)) ? (int) $this->uri->segment(4) : 1;
        $offset = ($page - 1) * $value;
        if ($this->input->post()) {
            $keyword = $this->input->post('keyword');
            $field = 'user_' . $this->input->post('field');
            $config['total_rows'] = $this->developer_model->countdev($keyword, $field);
            $data['dev'] = $this->developer_model->viewdev($keyword, $field, $value, $offset);
        } else {
            $config['total_rows'] = $this->developer_model->countdev(NULL, NULL);
            $data['dev'] = $this->developer_model->viewdev(NULL, NULL, $value, $offset);
        }
        $this->pagination->initialize($config); //Some config in application/config/pagination.php
        $data['pagination'] = $this->pagination->create_links();

        //Title
        $data['title'] = 'View Themes Developer';

        //Template
        $this->template->backend('dev', $data);
    }

}