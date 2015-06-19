<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Order extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('developer');
        }
        $this->load->model('developer/order_model');
    }

    public function index() {
        redirect('dashboard/order/view');
    }

    public function view() {

        //Pagination
        $config['base_url'] = base_url('dashboard/order/view/');
        $config['per_page'] = 25;
        $value = $config['per_page'];
        $page = ($this->uri->segment(4)) ? (int) $this->uri->segment(4) : 1;
        $offset = ($page - 1) * $value;
        if ($this->input->post()) {
            $keyword = $this->input->post('keyword');
            if ($this->input->post('field') == 'name') {
                $field = 'customer_' . $this->input->post('field');
            } else {
                $field = $this->input->post('field');
            }
            $config['total_rows'] = $this->order_model->count($keyword, $field);
            $data['orders'] = $this->order_model->view($keyword, $field, $value, $offset);
        } else {
            $config['total_rows'] = $this->order_model->count(NULL, NULL);
            $data['orders'] = $this->order_model->view(NULL, NULL, $value, $offset);
        }
        $this->pagination->initialize($config); //Some config in application/config/pagination.php
        $data['pagination'] = $this->pagination->create_links();

        //Title
        $data['title'] = 'View Orders';

        //Template
        $this->template->backend('orders', $data);
    }

    function detail($id) {
        if ($id == NULL) {
            redirect('dashboard/order/');
        }
        $data['title'] = 'Order Detail';
        $data['order'] = $this->order_model->detail($id);
        $data['themes'] = $this->order_model->getThemes($id);
        $this->template->backend('order_detail', $data);
    }

    public function export() {
        //$this->load->view('backend/customer_report');
        if ($this->input->post()) {
            //echo date('Y-m-d', strtotime($this->input->post('start')));
            //echo '<br />';
            //echo $this->input->post('start');
            //echo '<br />';
            //echo $this->input->post('end');
            //echo '<br />';
            $this->load->helper('dompdf');
            $this->load->helper('file');
            $start = date('Y-m-d', strtotime($this->input->post('start')));
            $end = date('Y-m-d', strtotime($this->input->post('end')));
            //echo $start.'<br />'.$end;
            $data['orders'] = $this->order_model->report($start, $end);
            $data['start'] = date('d F Y', strtotime($this->input->post('start')));
            $data['end'] = date('d F Y', strtotime($this->input->post('end')));
            $html = $this->load->view('backend/order_report', $data, true);
            pdf_create($html, 'Laporan Pemesanan Undangan Online');
            //$data = pdf_create($html, '', false);
            //write_file('name', $data);
        } else {
            $data['title'] = 'Export';
            $this->template->backend('export_orders', $data);
        }
    }

}