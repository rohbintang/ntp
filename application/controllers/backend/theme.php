<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Theme extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('dashboard/login');
        }
        $this->load->model('backend/theme_model');
        $this->load->library('form_validation');
    }

    public function index() {
        redirect('dashboard/theme/view');
    }

    public function unverified() {

        //Pagination
        $config['base_url'] = base_url('dashboard/theme/unverified/');
        $config['per_page'] = 5;
        $value = $config['per_page'];
        $page = ($this->uri->segment(4)) ? (int) $this->uri->segment(4) : 1;
        $offset = ($page - 1) * $value;
        if ($this->input->post()) {
            $keyword = $this->input->post('keyword');
            $field = 'user_' . $this->input->post('field');
            $config['total_rows'] = $this->theme_model->count($keyword, $field, 0);
            $data['users'] = $this->theme_model->view($keyword, $field, $value, $offset, 0);
        } else {
            $config['total_rows'] = $this->theme_model->count(NULL, NULL, 0);
            $data['users'] = $this->theme_model->view(NULL, NULL, $value, $offset, 0);
        }
        $this->pagination->initialize($config); //Some config in application/config/pagination.php
        $data['pagination'] = $this->pagination->create_links();

        //Title
        $data['title'] = 'Unverified Themes';

        //Template
        $this->template->backend('theme', $data);
    }

    function detail($id) {
        if ($id == NULL) {
            redirect('dashboard/theme/');
        }
        $data['title'] = 'Request Detail';
        $data['theme'] = $this->theme_model->detail($id);
        // $data['themes'] = $this->order_model->getThemes($id);
        $this->template->backend('theme_detail', $data);
    }

    public function view() {

        

        //Pagination
        $config['base_url'] = base_url('dashboard/theme/view/');
         $config['per_page'] = 5;
        $value = $config['per_page'];
        $page = ($this->uri->segment(4)) ? (int) $this->uri->segment(4) : 1;
        $offset = ($page - 1) * $value;
        if ($this->input->post()) {
            $keyword = $this->input->post('keyword');
            $field = 'theme_' . $this->input->post('field');
            $config['total_rows'] = $this->theme_model->count($keyword, $field, 1);
            $data['users'] = $this->theme_model->view($keyword, $field, $value, $offset, 1);
        } else {
            $config['total_rows'] = $this->theme_model->count(NULL, NULL, 1);
            $data['users'] = $this->theme_model->view(NULL, NULL, $value, $offset, 1);
        }
        $this->pagination->initialize($config); //Some config in application/config/pagination.php
        $data['pagination'] = $this->pagination->create_links();

        //Title
        $data['title'] = 'View Themes';

        //Template
        $this->template->backend('theme', $data);
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
                $this->theme_model->edit($id, $data);
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
                $this->theme_model->edit($id, $data);
                redirect('dashboard/user');
            } else {
                $data['title'] = 'Edit User';
                $result = $this->theme_model->get($id);
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
            $result = $this->theme_model->get($id);
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
            $this->theme_model->del($id);
            redirect('dashboard/user');
        } else {
            redirect('dashboard/user');
        }
    }

}