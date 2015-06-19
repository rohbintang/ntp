<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Re extends CI_Controller {

     public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('dashboard/login');
        }
        $this->load->model('backend/request_model');
        $this->load->model('backend/theme_model');
        $this->load->model('backend/approval_model');
    }

    public function index() {
        redirect('dashboard/unapprove/view');
    }
    
  public function view() {

       $config['base_url'] = base_url('dashboard/theme/unverified/');
       $config['per_page'] = 5;
        $value = $config['per_page'];
        $page = ($this->uri->segment(4)) ? (int) $this->uri->segment(4) : 1;
        $offset = ($page - 1) * $value;
        if ($this->input->post()) {
            $keyword = $this->input->post('keyword');
            $field = 'user_' . $this->input->post('field');
            $config['total_rows'] = $this->request_model->count($keyword, $field, 0);
            $data['requests'] = $this->request_model->view($keyword, $field, $value, $offset, 0);
        } else {
            $config['total_rows'] = $this->request_model->count(NULL, NULL, 0);
            $data['requests'] = $this->request_model->view(NULL, NULL, $value, $offset, 0);
        }
        $this->pagination->initialize($config); //Some config in application/config/pagination.php
        $data['pagination'] = $this->pagination->create_links();

        //Title
        $data['title'] = 'View Requests';

        //Template
        $this->template->backend('unapprove', $data);
    }

    function detail($id) {
        if ($id == NULL) {
            redirect('dashboard/unapprove/');
        }
        $data['title'] = 'Request Detail';
        $data['request'] = $this->request_model->detail($id);
        $this->template->backend('unapprove_detail', $data);
    }

    public function approval($id) {

        if (!$this->input->post()) {
            redirect('dashboard/unapprove/view');
        } else {
            $today = getdate();
            // $approval_id = 'AP'.$this->session->userdata('developer_id').$today['yday'].$today['hours'].$today['minutes'].$today['seconds'];
            // $request = $this->request_model->detail($id);
            // $request = $request->row();
            $data = array(
                'approval_date' =>date('Y-m-d'),
                'approval_message' => $this->input->post('message'),
                'approval_status' => $this->input->post('status'),
                // 'request_id'=> $id
                );
            $this->approval_model->edit($id, $data);
            $request = array(
                'request_status'=>1
                );
            $this->request_model->edit($this->input->post('request_id'), $request);
            $this->theme_model->edit($this->input->post('theme_id'),array('approval_status'=>2));
            redirect('dashboard/unapprove/');
        }
    }


}