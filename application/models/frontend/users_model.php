<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

function lihat (){
	$this->db->limit(4);
$query = $this->db->get('nm_customers');
    return $query;

}
public function show($table){
  $this->db->select('*');
  $data = $this->db->get($table);
  if($data->num_rows() > 0){
  return $data->result_array();
 }else{
 return false;
 }
 }
 
 public function insert($data,$table){
 $this->db->insert($table, $data);
 }

 function add($data) {
        return $this->db->insert('nm_customers', $data);
    }

     function adddev($data) {
        return $this->db->insert('nm_developers', $data);
    }
 
}
