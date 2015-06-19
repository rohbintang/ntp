<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Theme_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function count($keyword, $field, $status) {
        $this->db->join('nm_requests', 'nm_requests.theme_id=nm_theme.theme_id');
        $this->db->join('nm_developers', 'nm_theme.developer_id=nm_developers.developer_id');
        if ($keyword) {
            $this->db->like($field, $keyword);
        }
        // $status = $unverified==NULL?0:1;
        $this->db->where('theme_status', $status);
        return $this->db->count_all_results('nm_theme');
    }

    
       function view($keyword = NULL, $field = NULL, $value, $offset) {
        // $this->db->select('*');
        // $this->db->from('nm_approvals');
        $this->db->join('nm_developers', 'nm_theme.developer_id=nm_developers.developer_id');
        $this->db->join('nm_requests', 'nm_requests.theme_id=nm_theme.theme_id');
        $this->db->join('nm_approvals', 'nm_approvals.request_id=nm_requests.request_id');

        $this->db->where('approval_status =', 1);
        $this->db->where('request_status =', 1);
        $this->db->group_by('theme_name'); 
        $this->db->limit($value, $offset);
        if ($keyword != NULL) {
            $this->db->like($field, $keyword);
        }
       
        return $this->db->get('nm_theme');
    }

    function add($data) {
        return $this->db->insert('nm_theme', $data);
    }

    function detail($id) {

        //$this->db->join('nm_orders', 'nm_orders.payment_id=nm_payments.payment_id');
        //$this->db->join('nm_requests', 'nm_requests.theme_id=nm_theme.theme_id');
        $this->db->join('nm_developers', 'nm_theme.developer_id=nm_developers.developer_id');
        $this->db->where('nm_theme.theme_id', $id);
        return $this->db->get('nm_theme');
    }

    function del($id) {
        $this->db->where('theme_id', $id);
        $this->db->delete('nm_theme');
    }

    function edit($id, $data) {
        $this->db->where('theme_id', $id);
        return $this->db->update('nm_theme', $data);
    }

}