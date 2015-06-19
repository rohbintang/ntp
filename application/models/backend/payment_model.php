<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Payment_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function count($keyword, $field) {
        $this->db->select('*');
        $this->db->from('nm_payments');
        $this->db->join('nm_orders', 'nm_orders.payment_id=nm_payments.payment_id');
        // $this->db->group_by('nm_payments.payment_id'); 
        if ($keyword) {
            $this->db->like($field, $keyword);
        }
        return $this->db->count_all_results();
    }

    function view($keyword = NULL, $field = NULL, $value, $offset) {
        $this->db->select('*');
        $this->db->from('nm_payments');
        $this->db->join('nm_orders', 'nm_orders.payment_id=nm_payments.payment_id');
        // $this->db->group_by('nm_payments.payment_id'); 
        $this->db->where('nm_payments.payment_status !=', 0);
        $this->db->limit($value, $offset);
        if ($keyword != NULL) {
            $this->db->like($field, $keyword);
        }
        return $this->db->get();
    }

    function detail($id) {
        $this->db->select('*');
        $this->db->from('nm_payments');
        $this->db->join('nm_orders', 'nm_orders.payment_id=nm_payments.payment_id');
        $this->db->join('nm_customers', 'nm_customers.customer_id=nm_orders.customer_id');
        // $this->db->join('nm_theme', 'nm_requests.theme_id=nm_theme.theme_id');
        $this->db->where('nm_payments.payment_id', $id);
        return $this->db->get();
    }

    function edit($id, $data) {
        $this->db->where('payment_id', $id);
        return $this->db->update('nm_payments', $data);
    }

    function del($id) {
        $this->db->where('approval_id', $id);
        $this->db->delete('nm_approvals');
    }

}