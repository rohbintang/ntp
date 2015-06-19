<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('generator')) {

   // function developer_id() {
     //   $table = 'nm_developers';
       // $field = 'developer_id';
        //$format = 'C';
        //$CI = & get_instance();
        //$CI->load->database();
        //$CI->db->select_max($field, 'max');
        //$query = $CI->db->get($table);
        //foreach ($query->result() as $value) {
          //  $id = $value->max;
        //}
        //$id = (int) substr($id, 1, 3);
        //$id++;
        //$id = $format . sprintf('%03s', $id);
        //return $id;
    //}
    
    function theme_id() {
        $table = 'nm_theme';
        $field = 'theme_id';
        $format = 'T';
        $CI = & get_instance();
        $CI->load->database();
        $CI->db->select_max($field, 'max');
        $query = $CI->db->get($table);
        foreach ($query->result() as $value) {
            $id = $value->max;
        }
        $id = (int) substr($id, 1, 3);
        $id++;
        $id = $format . sprintf('%03s', $id);
        return $id;
    }

    function request_id() {
        $table = 'nm_requests';
        $field = 'request_id';
        $format = 'R';
        $CI = & get_instance();
        $CI->load->database();
        $CI->db->select_max($field, 'max');
        $query = $CI->db->get($table);
        foreach ($query->result() as $value) {
            $id = $value->max;
        }
        $id = (int) substr($id, 8, 3);
        $id++;
        $id = $format . date('His') . sprintf('%03s', $id);
        return $id;
    }
    
    function approval_id() {
        $table = 'nm_approvals';
        $field = 'approval_id';
        $format = 'P';
        $CI = & get_instance();
        $CI->load->database();
        $CI->db->select_max($field, 'max');
        $query = $CI->db->get($table);
        foreach ($query->result() as $value) {
            $id = $value->max;
        }
        $id = (int) substr($id, 7, 3);
        $id++;
        $id = $format . date('His') . sprintf('%03s', $id);
        return $id;
    }

}
