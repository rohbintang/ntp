<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Invitation_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function view() {
        $this->db->select('*');
        $this->db->from('nm_theme');
        $this->db->join('nm_requests', 'nm_requests.theme_id=nm_theme.theme_id');
        $this->db->join('nm_developers', 'nm_requests.developer_id=nm_developers.developer_id');
        return $this->db->get();
    }
    
    function get($id) {
        $this->db->where('theme_id', $id);
        return $this->db->get('nm_theme');
    }
    
    function edit($id, $data) {
        $this->db->where('theme_id', $id);
        return $this->db->update('nm_theme', $data);
    }
    
    function del($id) {
        $this->db->where('theme_id', $id);
        $this->db->delete('nm_theme');
    }

}