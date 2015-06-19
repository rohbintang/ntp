<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customer_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function count($keyword, $field) {
        if ($keyword) {
            $this->db->like($field, $keyword);
        }
        return $this->db->count_all_results('nm_customers');
    }

    function view($keyword = NULL, $field = NULL, $value, $offset) {
        $this->db->limit($value, $offset);
        if ($keyword != NULL) {
            $this->db->like($field, $keyword);
        }
        return $this->db->get('nm_customers');
    }

    function detail($id) {
        $this->db->select('*');
        $this->db->from('nm_customers');
        // $this->db->join('nm_requests', 'nm_requests.developer_id=nm_developers.developer_id');
        // $this->db->join('nm_approvals', 'nm_approvals.approval_id=nm_requests.approval_id');
        // $this->db->join('nm_theme', 'nm_requests.theme_id=nm_theme.theme_id');
        $this->db->where('nm_customers.customer_id', $id);
        return $this->db->get();
    }
    
    function del($id) {
        $this->db->where('developer_id', $id);
        $this->db->delete('nm_developers');
    }

}