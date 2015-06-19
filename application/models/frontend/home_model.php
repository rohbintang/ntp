<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home__model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


function pencarian (){


$this->db->select('*');
        $this->db->from('nm_theme');
        return $this->db->get();
    }

}

?>