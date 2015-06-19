<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('dashboard/login');
        }
        $this->load->model('backend/customer_model');
    }

    public function index() {
        redirect('dashboard/customer/view');
    }

    public function view() {

        //Pagination
        $config['base_url'] = base_url('dashboard/customer/view/');
        //$config['total_rows'] = $this->customer_model->count();
        $config['per_page'] = 5;
        $value = $config['per_page'];
        $page = ($this->uri->segment(4)) ? (int) $this->uri->segment(4) : 1;
        $offset = ($page - 1) * $value;
        if ($this->input->post()) {
            $keyword = $this->input->post('keyword');
            $field = 'customer_' . $this->input->post('field');
            $config['total_rows'] = $this->customer_model->count($keyword, $field);
            $data['customers'] = $this->customer_model->view($keyword, $field, $value, $offset);
        } else {
            $config['total_rows'] = $this->customer_model->count(NULL, NULL);
            $data['customers'] = $this->customer_model->view(NULL, NULL, $value, $offset);
        }
        $this->pagination->initialize($config); //Some config in application/config/pagination.php
        $data['pagination'] = $this->pagination->create_links();

        // Title
        $data['title'] = 'View Customers';

        // Template
        $this->template->backend('customers', $data);
    }

    function detail($id) {
        if ($id == NULL) {
            redirect('dashboard/customer/');
        }
        $data['title'] = 'Customer Detail';
        $data['customer'] = $this->customer_model->detail($id);
        $this->template->backend('customer_detail', $data);
    }

    public function export() {
        //$this->load->view('backend/customer_report');
        //$data['title'] = 'Export';
        //$this->template->backend('export_customers', $data);

        $this->load->helper('dompdf');
        $this->load->helper('file');
        // page info here, db calls, etc.
        $html = $this->load->view('backend/customer_report', $data = NULL, true);
        pdf_create($html, 'filename');
        $data = pdf_create($html, '', false);
        write_file('name', $data);
    }
    
    public function del($id) {
        if ($id) {
            $this->customer_model->del($id);
            redirect('dashboard/customer');
        } else {
            redirect('dashboard/customer');
        }
    }

    public function coba() {
        //$this->load->helper('generator');
        echo theme_id();
        echo '<br />';
        echo developer_id();
        echo '<br />';
        echo request_id();
        echo '<br />';
        echo approval_id();
        echo '<br>' . date("dmy");
        echo '<br />';
        echo date('H:i:s');
    }
    

}