<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Payment extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('dashboard/login');
        }
        $this->load->model('backend/payment_model');
    }

    public function index() {
        redirect('dashboard/payment/view');
    }

    public function view() {

        //Pagination
        $config['base_url'] = base_url('dashboard/payment/view/');
        $config['per_page'] = 25;
        $value = $config['per_page'];
        $page = ($this->uri->segment(4)) ? (int) $this->uri->segment(4) : 1;
        $offset = ($page - 1) * $value;
        if ($this->input->post()) {
            $keyword = $this->input->post('keyword');
            if ($this->input->post('field') == 'name') {
                $field = 'payment_' . $this->input->post('field');
            } elseif ($this->input->post('field') == 'payment_id') {
                $field = 'nm_payments.' . $this->input->post('field');
            } else {
                $field = $this->input->post('field');
            }
            $config['total_rows'] = $this->payment_model->count($keyword, $field);
            $data['payments'] = $this->payment_model->view($keyword, $field, $value, $offset);
        } else {
            $config['total_rows'] = $this->payment_model->count(NULL, NULL);
            $data['payments'] = $this->payment_model->view(NULL, NULL, $value, $offset);
        }
        $this->pagination->initialize($config); //Some config in application/config/pagination.php
        $data['pagination'] = $this->pagination->create_links();

        //Title
        $data['title'] = 'View Payments';

        //Template
        $this->template->backend('payments', $data);
    }

    function detail($id) {
        if ($id == NULL) {
            redirect('dashboard/payment/');
        }
        $data['title'] = 'Payment Detail';
        $data['payment'] = $this->payment_model->detail($id);
        $this->template->backend('payment_detail', $data);
    }

    function confirm($id) {
        $data['payment_status'] = '2';
        $this->payment_model->edit($id, $data);
        redirect('dashboard/payment/detail/'.$id);
    }
    
    function unconfirm($id) {
        $data['approval_status'] = '0';
        $this->payment_model->edit($id, $data);
        redirect('dashboard/payment');
    }
    
    public function del($id) {
        if ($id) {
            $this->payment_model->del($id);
            redirect('dashboard/payment');
        } else {
            redirect('dashboard/payment');
        }
    }

}