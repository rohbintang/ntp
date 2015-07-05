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

    function add($data) {
        return $this->db->insert('nm_customers', $data);
    }

    function get($id) {
        $this->db->where('customer_id', $id);
        return $this->db->get('nm_customers');
    }

    function del($id) {
        $this->db->where('customer_id', $id);
        $this->db->delete('nm_customers');
    }

    function edit($id, $data) {
        $this->db->where('customer_id', $id);
        return $this->db->update('nm_customers', $data);
    }

     function viewdev($keyword = NULL, $field = NULL, $value, $offset) {
        $this->db->limit($value, $offset);
        if ($keyword != NULL) {
            $this->db->like($field, $keyword);
        }
        return $this->db->get('nm_customers');
    }


}