<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('customer_logged_in')) {
            redirect('customer/login');
        }
        $this->load->model('backend/order_model');
    }

    public function index() {
        $data['order'] = $this->order_model->count_all();
        $data['payment'] = $this->order_model->count_all('0');
        $this->template->customer('home', $data);
    }

}