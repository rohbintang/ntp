<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Payment_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function add($data) {
        return $this->db->insert('nm_payments', $data);
    }

    function detail($id) {
        $this->db->select('*');
        $this->db->from('nm_payments');
        $this->db->where('nm_payments.payment_id', $id);
        return $this->db->get();
    }

    function getOrderID($id) {
        $this->db->select('order_id');
        $this->db->from('nm_orders');
        $this->db->join('nm_payments', 'nm_orders.payment_id=nm_payments.payment_id');
        $this->db->where('customer_id', $id);
        $this->db->where('payment_status', 0);
        $this->db->group_by('order_id'); 
        return $this->db->get();
    }

    function update($id, $data) {
        $this->db->where('payment_id', $id);
        return $this->db->update('nm_payments', $data);
    }



}