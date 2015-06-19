<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Package extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('dashboard/login');
        }
        $this->load->model('backend/package_model');
    }

    public function index() {
        redirect('dashboard/package/view');
    }

    public function view() {

        //Pagination
        $config['base_url'] = base_url('dashboard/package/view/');
        $config['per_page'] = 5;
        $value = $config['per_page'];
        $page = ($this->uri->segment(4)) ? (int) $this->uri->segment(4) : 1;
        $offset = ($page - 1) * $value;
        if ($this->input->post()) {
            $keyword = $this->input->post('keyword');
            $field = 'package_' . $this->input->post('field');
            $config['total_rows'] = $this->package_model->count($keyword, $field);
            $data['packages'] = $this->package_model->view($keyword, $field, $value, $offset);
        } else {
            $config['total_rows'] = $this->package_model->count(NULL, NULL);
            $data['packages'] = $this->package_model->view(NULL, NULL, $value, $offset);
        }
        $this->pagination->initialize($config); //Some config in application/config/pagination.php
        $data['pagination'] = $this->pagination->create_links();

        //Title
        $data['title'] = 'View Packages';

        //Template
        $this->template->backend('packages', $data);
    }

    public function add() {
        $this->load->library('form_validation');
        if (!$this->input->post()) {
            $data['title'] = 'Add Package';
            $this->template->backend('add_package', $data);
        } else {
            $this->form_validation->set_rules('name', 'Package Name', 'required|trim|max_length[50]');
            $this->form_validation->set_rules('price', 'Price', 'required|trim|numeric|max_length[11]');
            $this->form_validation->set_rules('description', 'Description', 'required|trim');
            $this->form_validation->set_error_delimiters('<p class="text-error">', '</p>');
            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'package_name' => $this->input->post('name'),
                    'package_price' => $this->input->post('price'),
                    'package_description' => $this->input->post('description')
                );
                $this->package_model->add($data);
                redirect('dashboard/package');
            } else {
                $data['title'] = 'Add Package';
                $this->template->backend('add_package', $data);
            }
        }
    }

    public function edit($id = NULL) {
        $data['id'] = $id;
        $this->load->library('form_validation');
        if (!$this->input->post()) {
            $result = $this->package_model->get($id);
            if ($result->num_rows() == 1) {
                foreach ($result->result() as $value) {
                    $data['name'] = $value->package_name;
                    $data['price'] = $value->package_price;
                    $data['description'] = $value->package_description;
                }
                $data['title'] = 'Edit Package';
                $this->template->backend('edit_package', $data);
            } else {
                redirect('dashboard/package');
            }
        } else {
            //echo 'Ok';
            $this->form_validation->set_rules('name', 'Package Name', 'required|trim|max_length[50]');
            $this->form_validation->set_rules('price', 'Price', 'required|trim|numeric|max_length[11]');
            $this->form_validation->set_rules('description', 'Description', 'required|trim');
            $this->form_validation->set_error_delimiters('<p class="text-error">', '</p>');
            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'package_name' => $this->input->post('name'),
                    'package_price' => $this->input->post('price'),
                    'package_description' => $this->input->post('description')
                );
                $this->package_model->edit($id, $data);
                redirect('dashboard/package');
            } else {
                $data = array(
                    'id' => $id,
                    'name' => '',
                    'price' => '',
                    'description' => ''
                );
                $data['title'] = 'Edit Package';
                $this->template->backend('edit_package', $data);
            }
        }
    }

    public function del($id) {
        if ($id) {
            $this->package_model->del($id);
            redirect('dashboard/package');
        } else {
            redirect('dashboard/package');
        }
    }

}