<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->template->frontend('contact');
    }

    public function sendmail() {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'emailmu',
            'smtp_pass' => 'paswwordmu',
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from($this->input->post('from'), $this->input->post('name'));
        $this->email->to('m.rohbintang@ymail.com');

        $this->email->subject($this->input->post('subject'));

        $this->email->message($this->input->post('message', true));


        if (!$this->email->send())
            show_error($this->email->print_debugger());
        else
            echo 'Your e-mail has been sent!';
    }

}