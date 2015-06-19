<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Authentication {

    var $CI;
    var $user_table = 'nm_users';

    function login($user_username = '', $user_password = '') {
        $this->CI = & get_instance();
        if ($user_username == '' OR $user_password == '')
            return false;
        //Check if already logged in
        if ($this->CI->session->userdata('user_username') == $user_username)
            return true;
        //Check against user table
        $this->CI->db->where('user_username', $user_username);
        $query = $this->CI->db->get_where($this->user_table);
        if ($query->num_rows() > 0) {
            $user_data = $query->row_array();
            $user_password = md5($user_password);
            if ($user_password != $user_data['user_password'])
                return false;
            //Destroy old session
            $this->CI->session->sess_destroy();
            //Create a fresh, brand new session
            $this->CI->session->sess_create();
            //Set session data
            $user_data['user_username'] = $user_data['user_username']; // for compatibility with Simplelogin
            $user_data['user_id'] = $user_data['user_id']; // for compatibility with Simplelogin
            $user_data['logged_in'] = true;
            $this->CI->session->set_userdata($user_data);
            return true;
        }
        else {
            return false;
        }
    }

    function devlogin($developer_uname = '', $developer_pwd = '') {
        $this->CI = & get_instance();
        if ($developer_uname == '' OR $developer_pwd == '')
            return false;
        //Check if already logged in
        if ($this->CI->session->userdata('developer_uname') == $developer_uname)
            return true;
        //Check against user table
        $this->CI->db->where('developer_uname', $developer_uname);
        $query = $this->CI->db->get_where('nm_developers');
        if ($query->num_rows() > 0) {
            $user_data = $query->row_array();
            $developer_pwd = md5($developer_pwd);
            if ($developer_pwd != $user_data['developer_pwd'])
                return false;
            //Destroy old session
            $this->CI->session->sess_destroy();
            //Create a fresh, brand new session
            $this->CI->session->sess_create();
            //Set session data
            $user_data['developer_uname'] = $user_data['developer_uname']; // for compatibility with Simplelogin
            $user_data['developer_id'] = $user_data['developer_id']; // for compatibility with Simplelogin
            $user_data['developer_logged_in'] = true;
            $this->CI->session->set_userdata($user_data);
            return true;
        }
        else {
            return false;
        }
    }

    function customerlogin($customer_uname = '', $customer_pwd = '') {
        $this->CI = & get_instance();
        if ($customer_uname == '' OR $customer_pwd == '')
            return false;
        //Check if already logged in
        if ($this->CI->session->userdata('customer_uname') == $customer_uname)
            return true;
        //Check against user table
        $this->CI->db->where('customer_uname', $customer_uname);
        $query = $this->CI->db->get_where('nm_customers');
        if ($query->num_rows() > 0) {
            $user_data = $query->row_array();
            $customer_pwd = md5($customer_pwd);
            if ($customer_pwd != $user_data['customer_pwd'])
                return false;
            //Destroy old session
            $this->CI->session->sess_destroy();
            //Create a fresh, brand new session
            $this->CI->session->sess_create();
            //Set session data
            $user_data['customer_uname'] = $user_data['customer_uname']; // for compatibility with Simplelogin
            $user_data['customer_id'] = $user_data['customer_id']; // for compatibility with Simplelogin
            $user_data['customer_logged_in'] = true;
            $this->CI->session->set_userdata($user_data);
            return true;
        }
        else {
            return false;
        }
    }

    function logout() {
        $this->CI = & get_instance();
        $this->CI->session->sess_destroy();
    }

}

?>
