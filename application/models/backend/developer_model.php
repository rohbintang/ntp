<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Developer_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function count($keyword, $field) {
        if ($keyword) {
            $this->db->like($field, $keyword);
        }
        return $this->db->count_all_results('nm_developers');
    }

    function view($keyword = NULL, $field = NULL, $value, $offset) {
        $this->db->limit($value, $offset);
        if ($keyword != NULL) {
            $this->db->like($field, $keyword);
        }
        return $this->db->get('nm_developers');
    }

    function add($data) {
        return $this->db->insert('nm_developers', $data);
    }

    function get($id) {
        $this->db->where('developer_id', $id);
        return $this->db->get('nm_developers');
    }

    function del($id) {
        $this->db->where('developer_id', $id);
        $this->db->delete('nm_developers');
    }

    function edit($id, $data) {
        $this->db->where('developer_id', $id);
        return $this->db->update('nm_developers', $data);
    }

     function viewdev($keyword = NULL, $field = NULL, $value, $offset) {
        $this->db->limit($value, $offset);
        if ($keyword != NULL) {
            $this->db->like($field, $keyword);
        }
        return $this->db->get('nm_developers');
    }


}