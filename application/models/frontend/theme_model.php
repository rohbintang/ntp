<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Theme_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function all() {
		$query= $this->db->get('nm_theme');
		return $query;
	}

	function newtheme () {
		$this->db->where('theme_status',1)->limit(4);
		$this->db->order_by("theme_id", "desc"); 
		$query = $this->db->get('nm_theme');
		return $query;
	}


	function caritheme(){

		$query->db->get('nm_theme');
		return $query;
	}


	function lihatdetail (){

		$query= $this->db->get('nm_theme');
		return $query;
	}

	function getOne($id=''){
		$data = array();
		$sql = "SELECT *
		FROM nm_theme WHERE theme_id ='".$id."'";
		$hasil = $this->db->query($sql);
		if($hasil->num_rows() > 0){
			$data = $hasil->result();
		}
		$hasil->result();
		return $data;
	}

	function buy($id) {
		$this->db->where('theme_id', $id);
		$query = $this->db->get('nm_theme');
		return $query->row();

	}

}




?>