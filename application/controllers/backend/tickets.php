<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tickets extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('dashboard/login');
        }
        $this->load->model('backend/tickets_model');
        $this->load->library('form_validation');
    }

    public function index() {
         $this->template->backend('tickets');
    }

}