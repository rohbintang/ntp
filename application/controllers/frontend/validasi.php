<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Validasi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function index() {
        if (!$this->input->post()) {
            $this->load->view('basic');
        } else {
            $data['query'] = NULL;
            $validation = $this->form_validation;
            $validation->set_rules('namalengkap', 'Namalengkap', 'required|min_length[7]|max_length[35]|xss_clean');
            $validation->set_rules('alamat', 'Alamat', 'required|max_length[30]|xss_clean');
            $validation->set_rules('nomortelfon', 'Nomortelfon', 'required|numeric|min_length[5]|max_length[12]|xss_clean');
            $validation->set_rules('namalengkappria', 'Namalengkappria', 'required|max_length[35]|xss_clean');
            $validation->set_rules('namapanggilanpria', 'Namapanggilanpria', 'required|max_length[35]|xss_clean');
            $validation->set_rules('namaayahpria', 'Namaayahpria', 'required|max_length[35]|xss_clean');
            $validation->set_rules('namaibupria', 'Namaibupria', 'required|max_length[35]|xss_clean');
            $validation->set_rules('namalengkapwanita', 'Namalengkapwanita', 'required|max_length[35]|xss_clean');
            $validation->set_rules('namapanggilanwanita', 'Namapanggilanwanita', 'required|max_length[35]|xss_clean');
            $validation->set_rules('namaayahwanita', 'Namaayahwanita', 'required|max_length[35]|xss_clean');
            $validation->set_rules('namaibuwanita', 'Namaibuwanita', 'required|max_length[35]|xss_clean');
            $validation->set_rules('biodatapria', 'Biodatapria', 'required|max_length[1000]|xss_clean');
            $validation->set_rules('biodatawanita', 'Biodatawanita', 'required|max_length[1000]|xss_clean');
            $validation->set_rules('kisahcinta', 'Kisahcinta', 'required|max_length[3000]|xss_clean');
            $validation->set_rules('tanggalnikah', 'Tanggalnikah', 'required|max_length[30]|xss_clean');
            $validation->set_rules('waktunikah', 'Waktunikah', 'required|max_length[35]|xss_clean');
            $validation->set_rules('alamatnikah', 'Alamatnikah', 'required|max_length[35]|xss_clean');
            $validation->set_rules('tanggalresepsi', 'Tanggalresepsi', 'required|max_length[35]|xss_clean');
            $validation->set_rules('wakturesepsi', 'Wakturesepsi', 'required|max_length[35]|xss_clean');
            $validation->set_rules('alamatresepsi', 'Alamatresepsi', 'required|max_length[35]|xss_clean');
            $validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|xss_clean');
            $validation->set_rules('password', 'Password', 'required|min_length[5]|xss_clean');
            $validation->set_rules('confpass', 'Confirm Password', 'required|matches[password]|xss_clean');
            $validation->set_rules('email', 'Email', 'required|valid_email|xss_clean');
            if ($validation->run() == TRUE) {
                $data['query'] = "Namalengkap = " . $validation->set_value('namalengkap') . "Alamat = " . $validation->set_value('alamat') . "Nomortelfon = " . $validation->set_value('nomortelfon') . "Namalengkappria = " . $validation->set_value('namalengkappria') . "Namapanggilanpria = " . $validation->set_value('namapanggilanpria') . "Namaayahpria = " . $validation->set_value('namaayahpria') . "Namaibupria = " . $validation->set_value('namaibupria') . "Namalengkapwanita = " . $validation->set_value('namalengkapwanita') . "Namapanggilanwanita = " . $validation->set_value('namapanggilanwanita') . "Namaayahwanita = " . $validation->set_value('namaayahwanita') . "Namaibuwanita = " . $validation->set_value('namaibuwanita') . "Biodatapria = " . $validation->set_value('bidatapria') . "Biodatawanita = " . $validation->set_value('biodatawanita') . "Kisahcinta = " . $validation->set_value('kisahcinta') . "Tanggalnikah = " . $validation->set_value('tanggalnikah') . "Waktunikah = " . $validation->set_value('waktunikah') . "Alamatnikah = " . $validation->set_value('alamatnikah') . "Tanggalresepsi = " . $validation->set_value('tanggalresepsi') . "Wakturesepsi = " . $validation->set_value('wakturesepsi') . "Alamatresepsi = " . $validation->set_value('alamatresepsi') . "Username = " . $validation->set_value('username') . "<br>Password = " . $validation->set_value('password') . "<br>Email = " . $validation->set_value('email');
                header("location: http://localhost/CI/index.php/validasi");
            } else {
                $this->load->view('basic', $data);
            }
        }

        //$this->load->view('reguler',$data);
        //$this->load->view('premium',$data);
    }

}

/* End of file form_validasi.php */
/* Location: ./application/controllers/form_validasi.php */