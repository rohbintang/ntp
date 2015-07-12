<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Order_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function count_all($status = NULL) {
        $this->db->from('nm_orders');
        $this->db->join('nm_payments', 'nm_orders.payment_id=nm_payments.payment_id');
        // $this->db->join('nm_approvals', 'nm_approvals.approval_id=nm_requests.approval_id');
        if ($status != NULL) {
            $this->db->where('nm_payments.payment_status', $status);
        }
        return $this->db->count_all_results();
    }

    function count($keyword, $field) {
        $this->db->select('*');
        $this->db->from('nm_orders');
        // $this->db->join('nm_developers', 'nm_requests.developer_id=nm_developers.developer_id');
        // $this->db->join('nm_packages', 'nm_requests.package_id=nm_packages.package_id');
        if ($keyword) {
            $this->db->like($field, $keyword);
        }
        return $this->db->count_all_results();
    }

    function view($keyword, $field, $value, $offset) {
        $this->db->select('*');
        $this->db->from('nm_orders');
        $this->db->join('nm_customers', 'nm_orders.customer_id=nm_customers.customer_id');
        $this->db->join('nm_order_detail', 'nm_orders.order_id=nm_order_detail.order_id');
        $this->db->join('nm_payments', 'nm_orders.payment_id=nm_payments.payment_id');
        // $this->db->join('nm_packages', 'nm_requests.package_id=nm_packages.package_id');
        $this->db->join('nm_theme', 'nm_order_detail.theme_id=nm_theme.theme_id');
        $this->db->limit($value, $offset);
        if ($keyword != NULL) {
            $this->db->like($field, $keyword);
        }
        return $this->db->get();
    }

    function detail($id) {
        $this->db->select('*');
        $this->db->from('nm_orders');
        $this->db->join('nm_customers', 'nm_orders.customer_id=nm_customers.customer_id');
        $this->db->join('nm_order_detail', 'nm_orders.order_id=nm_order_detail.order_id');
        $this->db->join('nm_payments', 'nm_orders.payment_id=nm_payments.payment_id');
        $this->db->where('nm_orders.order_id', $id);
        return $this->db->get();
    }

    function getThemes($id) {
        $this->db->select('*');
        $this->db->from('nm_order_detail');
        $this->db->join('nm_theme', 'nm_order_detail.theme_id=nm_theme.theme_id');
        // $this->db->join('nm_theme', 'nm_orders.theme_id=nm_theme.theme_id');
        // $this->db->join('nm_payments', 'nm_orders.payment_id=nm_payments.payment_id');
        $this->db->where('nm_order_detail.order_id', $id);
        return $this->db->get();
    }

    function getPaymentID($id) {
        $this->db->select('nm_payments.payment_id');
        $this->db->from('nm_payments');
        $this->db->join('nm_orders', 'nm_orders.payment_id=nm_payments.payment_id');
        $this->db->where('order_id', $id);
        return $this->db->get();
    }

    function report($start, $end) {
        //return $query = $this->db->query("SELECT * FROM `nm_requests` WHERE `approval_date` BETWEEN '$start' AND '$end'");
        $this->db->select('*');
        $this->db->from('nm_orders');
        //$this->db->join('nm_developers', 'nm_developers.developer_id=nm_orders.developer_id');
       // $this->db->join('nm_approvals', 'nm_approvals.approval_id=nm_reque.approval_id');
        //$this->db->join('nm_packages', 'nm_packages.package_id=nm_requests.package_id');
        $this->db->where('nm_orders.order_date >=', $start);
        $this->db->where('nm_orders.order_date <=', $end);
        return $this->db->get();
    }

    function total($start, $end) {
        $this->db->select_sum('total');
        $this->db->from('nm_requests');
        $this->db->join('nm_developers', 'nm_developers.developer_id=nm_requests.developer_id');
        $this->db->join('nm_approvals', 'nm_approvals.approval_id=nm_requests.approval_id');
        $this->db->join('nm_packages', 'nm_packages.package_id=nm_requests.package_id');
        $this->db->where('nm_requests.approval_date >=', $start);
        $this->db->where('nm_requests.approval_date <=', $end);
        return $this->db->get();
    }

}