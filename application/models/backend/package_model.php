<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Package_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    function count($keyword, $field) {
        if ($keyword) {
            $this->db->like($field, $keyword);
        }
        return $this->db->count_all_results('nm_packages');
    }

    function view($keyword = NULL, $field = NULL, $value, $offset) {
        $this->db->limit($value, $offset);
        if ($keyword != NULL) {
            $this->db->like($field, $keyword);
        }
        return $this->db->get('nm_packages');
    }

    function add($data) {
        return $this->db->insert('nm_packages', $data);
    }

    function get($id) {
        $this->db->where('package_id', $id);
        return $this->db->get('nm_packages');
    }

    function del($id) {
        $this->db->where('package_id', $id);
        $this->db->delete('nm_packages');
    }

    function edit($id, $data) {
        $this->db->where('package_id', $id);
        return $this->db->update('nm_packages', $data);
    }

}