<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Theme extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('developer_logged_in')) {
            redirect('developer/login');
        }
        $this->load->model('developer/theme_model');
        $this->load->model('developer/request_model');
        $this->load->library('form_validation');
    }

    public function index() {
        redirect('developer/theme/view');
    }

    public function view() {

        //Pagination
        $config['base_url'] = base_url('developer/theme/view/');
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
        $this->template->developer('theme', $data);
    }

    public function request() {

        //Pagination
        $config['base_url'] = base_url('developer/theme/view/');
        $config['per_page'] = 5;
        $value = $config['per_page'];
        $page = ($this->uri->segment(4)) ? (int) $this->uri->segment(4) : 1;
        $offset = ($page - 1) * $value;
        if ($this->input->post()) {
            $keyword = $this->input->post('keyword');
            $field = 'user_' . $this->input->post('field');
            $config['total_rows'] = $this->theme_model->count($keyword, $field);
            $data['users'] = $this->theme_model->request($keyword, $field, $value, $offset);
        } else {
            $config['total_rows'] = $this->theme_model->count(NULL, NULL);
            $data['users'] = $this->theme_model->request(NULL, NULL, $value, $offset);
        }
        $this->pagination->initialize($config); //Some config in application/config/pagination.php
        $data['pagination'] = $this->pagination->create_links();

        //Title
        $data['title'] = 'View Themes';

        //Template
        $this->template->developer('theme', $data);
    }

    public function resubmit($id) {
        if (!$this->input->post()) {
            $data['title'] = 'Resubmit Theme';
            $data['error'] = '';
            $result = $this->theme_model->get($id);
            $result = $result->row();
            $data['id'] = $id;
            $data['name'] = $result->theme_name;
            $data['desc'] = $result->theme_description;
            $data['price'] = $result->theme_price;
            $this->template->developer('edit_theme', $data);
        } else {
            $config['upload_path'] = './themes/';
            $config['allowed_types'] = 'zip';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload()) {
                $data['error'] = $config['upload_path'];
                $this->template->developer('edit_theme', $data);
            } else {
                $uploadData = $this->upload->data();
                $data = array(
                    'theme_name' => $this->input->post('name'),
                    'theme_description' => $this->input->post('desc'),
                    'theme_price' => $this->input->post('price'),
                    'theme_files' => $uploadData['file_name'],
                );
                $this->theme_model->edit($id, $data);
                $today = getdate();
                $request_id = 'RQ'.$this->session->userdata('developer_id').$today['yday'].$today['hours'].$today['minutes'].$today['seconds'];
                $request = array(
                    'request_id' => $request_id,
                    'theme_id' => $id,
                    'request_date' =>date('Y-m-d'),
                    // 'approval_id' => $approval_id
                    );
                $this->request_model->add($request);
                $approval = array(
                    'approval_id' => '',
                    'approval_status' => 0,
                    'request_id'=>$request_id
                    );
                $this->request_model->approval($approval);
                // $approval_id = $this->db->insert_id();

                redirect('developer/theme/view');
            }
        }
    }

    public function add() {

        if (!$this->input->post()) {
            $data['title'] = 'Add Themes';
            $data['error'] = '';
            $this->template->developer('add_theme', $data);
        } else {
            $config['upload_path'] = './themes/';
            $config['allowed_types'] = '*';

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload())
            {
                $data['error'] = $this->upload->display_errors();

                $this->template->developer('add_theme', $data);
            }
            else
            {
                $uploadData = $this->upload->data();
				$image = $_FILES['imagefile']['name'];
				$tmp_image = $_FILES['imagefile']['tmp_name'];
                $today = getdate();
				move_uploaded_file($tmp_image,APPPATH.'../themes/images/'.$image);
                $theme_id = 'TH'.$this->session->userdata('developer_id').$today['yday'].$today['hours'].$today['minutes'].$today['seconds'];
                $data = array(
                    'theme_id' =>$theme_id,
                    'theme_name' => $this->input->post('name'),
                    'theme_description' => $this->input->post('desc'),
                    'theme_price' => $this->input->post('price'),
					'theme_images' => $image,
                    'theme_files' => $uploadData['file_name'],
                    'developer_id' => $this->session->userdata('developer_id')
                );
                $this->theme_model->add($data);
                
                $today = getdate();
                $request_id = 'RQ'.$this->session->userdata('developer_id').$today['yday'].$today['hours'].$today['minutes'].$today['seconds'];
                $request = array(
                    'request_id' => $request_id,
                    'theme_id' => $theme_id,
                    'request_date' =>date('Y-m-d'),
                    // 'approval_id' => $approval_id
                    );
                $this->request_model->add($request);
                $approval = array(
                    'approval_id' => '',
                    'approval_status' => 0,
                    'request_id'=>$request_id
                    );
                $this->request_model->approval($approval);
                $approval_id = $this->db->insert_id();

                redirect('developer/theme/view');
            }
            // $this->form_validation->set_rules('name', 'Name', 'required|trim|min_length[5]|max_length[55]');
            // $this->form_validation->set_rules('email', 'Email', 'required|max_length[50]|valid_email|is_unique[nm_users.user_email]');
            // $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[5]|max_length[20]|is_unique[nm_users.user_username]');
            // $this->form_validation->set_rules('password', 'Password', 'required');
            // $this->form_validation->set_rules('confirm-password', 'Confirm Password', 'required|matches[password]');
            // $this->form_validation->set_error_delimiters('<p class="text-error">', '</p>');
            // if ($this->form_validation->run() == TRUE) {
            //     $data = array(
            //         'user_name' => $this->input->post('name'),
            //         'user_email' => $this->input->post('email'),
            //         'user_username' => $this->input->post('username'),
            //         'user_password' => md5($this->input->post('password'))
            //     );
            //     $this->theme_model->add($data);
            //     redirect('dashboard/user');
            // } else {
            //     $data['title'] = 'Add User';
            //     $this->template->developer('add_user', $data);
            // }
        }
    }

}