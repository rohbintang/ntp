<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $result = $this->authentication->devlogin($username, $password);
        if ($result) {
            redirect('developer/home');
        } else {
            redirect('developer/login');
        }
    }

    public function logout() {
        $this->authentication->logout();
        redirect('developer/login');
    }

}