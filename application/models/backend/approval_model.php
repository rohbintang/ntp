<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Approval_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    // function count_all($status = NULL) {
    //     $this->db->from('nm_approvals');
    //     $this->db->join('nm_approvals', 'nm_approvals.approval_id=nm_approvals.approval_id');
    //     if ($status != NULL) {
    //         $this->db->where('nm_approvals.approval_status', $status);
    //     }
    //     return $this->db->count_all_results();
    // }

    function edit($id, $data) {
        $this->db->where('approval_id', $id);
        return $this->db->update('nm_approvals', $data);
    }

    function count($keyword, $field) {
        $this->db->select('*');
        $this->db->from('nm_approvals');
        $this->db->join('nm_requests', 'nm_requests.approval_id=nm_approvals.approval_id');
        $this->db->join('nm_theme', 'nm_requests.theme_id=nm_theme.theme_id');
        if ($keyword) {
            $this->db->like($field, $keyword);
        }
        return $this->db->count_all_results();
    }

    function view($keyword, $field, $value, $offset) {
        $this->db->select('*');
        $this->db->from('nm_approvals');
        // $this->db->join('nm_developers', 'nm_approvals.developer_id=nm_developers.developer_id');
        $this->db->join('nm_requests', 'nm_requests.approval_id=nm_approvals.approval_id');
        $this->db->join('nm_theme', 'nm_requests.theme_id=nm_theme.theme_id');
        $this->db->limit($value, $offset);
        if ($keyword != NULL) {
            $this->db->like($field, $keyword);
        }
        return $this->db->get();
    }

    function detail($id) {
        $this->db->select('*');
        $this->db->from('nm_approvals');
        $this->db->join('nm_requests', 'nm_requests.approval_id=nm_approvals.approval_id');
        $this->db->join('nm_theme', 'nm_requests.theme_id=nm_theme.theme_id');
        $this->db->join('nm_developers', 'nm_theme.developer_id=nm_developers.developer_id');
        $this->db->where('nm_approvals.approval_id', $id);
        return $this->db->get();
    }

    function add($data) {
        return $this->db->insert('nm_approvals', $data);
    }

    // function report($start, $end) {
    //     //return $query = $this->db->query("SELECT * FROM `nm_approvals` WHERE `approval_date` BETWEEN '$start' AND '$end'");
    //     $this->db->select('*');
    //     $this->db->from('nm_approvals');
    //     $this->db->join('nm_developers', 'nm_developers.developer_id=nm_approvals.developer_id');
    //     $this->db->join('nm_approvals', 'nm_approvals.approval_id=nm_approvals.approval_id');
    //     $this->db->join('nm_packages', 'nm_packages.package_id=nm_approvals.package_id');
    //     $this->db->where('nm_approvals.approval_date >=', $start);
    //     $this->db->where('nm_approvals.approval_date <=', $end);
    //     return $this->db->get();
    // }

    // function total($start, $end) {
    //     $this->db->select_sum('total');
    //     $this->db->from('nm_approvals');
    //     $this->db->join('nm_developers', 'nm_developers.developer_id=nm_approvals.developer_id');
    //     $this->db->join('nm_approvals', 'nm_approvals.approval_id=nm_approvals.approval_id');
    //     $this->db->join('nm_packages', 'nm_packages.package_id=nm_approvals.package_id');
    //     $this->db->where('nm_approvals.approval_date >=', $start);
    //     $this->db->where('nm_approvals.approval_date <=', $end);
    //     return $this->db->get();
    // }

}