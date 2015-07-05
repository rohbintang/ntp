<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('developer_logged_in')) {
            redirect('developer/login');
        }
        $this->load->model('developer/report_model');
        $this->load->model('developer/request_model');
        $this->load->library('form_validation');
    }

    public function index() {
        redirect('developer/report/themes');
    }
	
	public function themes(){
	
        //Pagination
        $config['base_url'] = base_url('developer/report/themes/');
         $config['per_page'] = 5;
        $value = $config['per_page'];
        $page = ($this->uri->segment(4)) ? (int) $this->uri->segment(4) : 1;
        $offset = ($page - 1) * $value;
        
		$config['total_rows'] = $this->report_model->count();
		$data['users'] = $this->report_model->themes($value, $offset,0);
		
        $this->pagination->initialize($config); //Some config in application/config/pagination.php
        $data['pagination'] = $this->pagination->create_links();

        //Title
        $data['title'] = 'Report Themes';
		$data['tipe'] = 0;//keseluruhan
        //Template
        $this->template->developer('report', $data);
	}

	public function permonth(){
	
        //Pagination
        $config['base_url'] = base_url('developer/report/themes/');
         $config['per_page'] = 5;
        $value = $config['per_page'];
        $page = ($this->uri->segment(4)) ? (int) $this->uri->segment(4) : 1;
        $offset = ($page - 1) * $value;
        
		$config['total_rows'] = $this->report_model->count();
		$data['users'] = $this->report_model->themes($value, $offset,1);
		
        $this->pagination->initialize($config); //Some config in application/config/pagination.php
        $data['pagination'] = $this->pagination->create_links();

        //Title
        $data['title'] = 'Report Themes';
		$data['tipe'] = 1;//perbulan

        //Template
        $this->template->developer('report', $data);
	}
	
	public function peryear(){
	
        //Pagination
        $config['base_url'] = base_url('developer/report/themes/');
         $config['per_page'] = 5;
        $value = $config['per_page'];
        $page = ($this->uri->segment(4)) ? (int) $this->uri->segment(4) : 1;
        $offset = ($page - 1) * $value;
        
		$config['total_rows'] = $this->report_model->count();
		$data['users'] = $this->report_model->themes($value, $offset,2);
		
        $this->pagination->initialize($config); //Some config in application/config/pagination.php
        $data['pagination'] = $this->pagination->create_links();

        //Title
        $data['title'] = 'Report Themes';
		$data['tipe'] = 2;//keseluruhan

        //Template
        $this->template->developer('report', $data);
	}
	
	public function income_permonth(){
	
        //Pagination
        $config['base_url'] = base_url('developer/report/themes/');
         $config['per_page'] = 5;
        $value = $config['per_page'];
        $page = ($this->uri->segment(4)) ? (int) $this->uri->segment(4) : 1;
        $offset = ($page - 1) * $value;
        
		$config['total_rows'] = $this->report_model->count();
		$data['users'] = $this->report_model->themes($value, $offset,3);
		
        $this->pagination->initialize($config); //Some config in application/config/pagination.php
        $data['pagination'] = $this->pagination->create_links();

        //Title
        $data['title'] = 'Report Themes';
		$data['tipe'] = 3;//income perbulan

        //Template
        $this->template->developer('report', $data);
	}
	
	public function income_peryear(){
	
        //Pagination
        $config['base_url'] = base_url('developer/report/themes/');
         $config['per_page'] = 5;
        $value = $config['per_page'];
        $page = ($this->uri->segment(4)) ? (int) $this->uri->segment(4) : 1;
        $offset = ($page - 1) * $value;
        
		$config['total_rows'] = $this->report_model->count();
		$data['users'] = $this->report_model->themes($value, $offset,4);
		
        $this->pagination->initialize($config); //Some config in application/config/pagination.php
        $data['pagination'] = $this->pagination->create_links();

        //Title
        $data['title'] = 'Report Themes';
		$data['tipe'] = 4;//income pertahun

        //Template
        $this->template->developer('report', $data);
	}
}