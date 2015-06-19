<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Invitation extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('dashboard/login');
        }
        $this->load->model('backend/invitation_model');
    }

    public function index() {
        $this->view();
    }

    public function view() {
        $data['title'] = 'View Theme Request';
        $data['invitations'] = $this->invitation_model->view();
        $this->template->backend('invitations', $data);
    }

    public function detail($id = NULL) {
        $data['id'] = $id;
        if (!$this->input->post()) {
            $result = $this->invitation_model->get($id);
            if ($result->num_rows() == 1) {
                foreach ($result->result() as $value) {
                    $data['id'] = $value->theme_id;
                    $data['namatheme'] = $value->theme_name;
                    $data['destheme'] = $value->theme_description;
                    $data['groom_father_name'] = $value->theme_preview;
                    $data['groom_mother_name'] = $value->theme_images;
                    $data['bride_name'] = $value->theme_files;
                    $data['bride_nick_name'] = $value->theme_category;
                    $data['bride_father_name'] = $value->theme_resolution;
                    $data['bride_mother_name'] = $value->theme_widget;
                    $data['groom_bio'] = $value->theme_compatibility;
                    $data['bride_bio'] = $value->theme_framework;
                    $data['love_story'] = $value->theme_wp_version;
                    $data['message'] = $value->theme_files_included;
                    $data['date'] = $value->theme_column;
                    $data['time'] = $value->theme_layout;
                    $data['address'] = $value->theme_demo_url;
                    $data['reception_date'] = $value->theme_usulan_harga;
                    $data['reception_time'] = $value->theme_tags;
                    $data['reception_address'] = $value->theme_msg_reviewer;
                    
                    $data['url'] = $value->developer_id;
                }
                $data['title'] = 'Invitation Detail';
                $this->template->backend('invitation_detail', $data);
            } else {
                redirect('dashboard/invitation');
            }
        } else {
            redirect('dashboard/invitation');
        }
    }

    function edit($id) {
        $data['invitation_url'] = $this->input->post('url');
        $this->invitation_model->edit($id, $data);
        redirect('dashboard/invitation/detail/' . $id);
    }

    public function del($id) {
        if ($id) {
            $this->invitation_model->del($id);
            redirect('dashboard/invitation');
        } else {
            redirect('dashboard/invitation');
        }
    }

}