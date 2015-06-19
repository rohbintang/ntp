<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

        $this->load->model('frontend/theme_model');
        $this->load->model('frontend/dev_model');
    }
    
    public function index() {
        $data['newtheme']= $this->theme_model->newtheme();
        $data['lihat']= $this->dev_model->lihat();
        $this->template->frontend('home',$data);

    }

    
}