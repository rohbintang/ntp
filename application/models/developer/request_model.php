<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Request_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    // function count_all($status = NULL) {
    //     $this->db->from('nm_requests');
    //     $this->db->join('nm_approvals', 'nm_approvals.approval_id=nm_requests.approval_id');
    //     if ($status != NULL) {
    //         $this->db->where('nm_approvals.approval_status', $status);
    //     }
    //     return $this->db->count_all_results();
    // }

    function add($data) {
        return $this->db->insert('nm_requests', $data);
    }

    function approval($data) {
        return $this->db->insert('nm_approvals', $data);
    }

    function count($keyword, $field) {
        $this->db->select('*');
        $this->db->from('nm_requests');
        // $this->db->join('nm_developers', 'nm_requests.developer_id=nm_developers.developer_id');
        // $this->db->join('nm_packages', 'nm_requests.package_id=nm_packages.package_id');
        if ($keyword) {
            $this->db->like($field, $keyword);
        }
        return $this->db->count_all_results();
    }

    function view($keyword, $field, $value, $offset) {
        $this->db->select('*');
        $this->db->from('nm_requests');
        // $this->db->join('nm_developers', 'nm_requests.developer_id=nm_developers.developer_id');
        // $this->db->join('nm_packages', 'nm_requests.package_id=nm_packages.package_id');
        $this->db->join('nm_theme', 'nm_requests.theme_id=nm_theme.theme_id');
        $this->db->join('nm_developers', 'nm_theme.developer_id=nm_developers.developer_id');
        $this->db->limit($value, $offset);
        if ($keyword != NULL) {
            $this->db->like($field, $keyword);
        }
        return $this->db->get();
    }

    function detail($id) {
        $this->db->select('*');
        $this->db->from('nm_requests');
        // $this->db->join('nm_developers', 'nm_developers.developer_id=nm_requests.developer_id');
        $this->db->join('nm_approvals', 'nm_approvals.approval_id=nm_requests.approval_id');
        $this->db->join('nm_theme', 'nm_requests.theme_id=nm_theme.theme_id');
        $this->db->join('nm_developers', 'nm_theme.developer_id=nm_developers.developer_id');
        $this->db->where('nm_requests.request_id', $id);
        return $this->db->get();
    }

    // function report($start, $end) {
    //     //return $query = $this->db->query("SELECT * FROM `nm_requests` WHERE `approval_date` BETWEEN '$start' AND '$end'");
    //     $this->db->select('*');
    //     $this->db->from('nm_requests');
    //     $this->db->join('nm_developers', 'nm_developers.developer_id=nm_requests.developer_id');
    //     $this->db->join('nm_approvals', 'nm_approvals.approval_id=nm_requests.approval_id');
    //     $this->db->join('nm_packages', 'nm_packages.package_id=nm_requests.package_id');
    //     $this->db->where('nm_requests.approval_date >=', $start);
    //     $this->db->where('nm_requests.approval_date <=', $end);
    //     return $this->db->get();
    // }

    // function total($start, $end) {
    //     $this->db->select_sum('total');
    //     $this->db->from('nm_requests');
    //     $this->db->join('nm_developers', 'nm_developers.developer_id=nm_requests.developer_id');
    //     $this->db->join('nm_approvals', 'nm_approvals.approval_id=nm_requests.approval_id');
    //     $this->db->join('nm_packages', 'nm_packages.package_id=nm_requests.package_id');
    //     $this->db->where('nm_requests.approval_date >=', $start);
    //     $this->db->where('nm_requests.approval_date <=', $end);
    //     return $this->db->get();
    // }

}