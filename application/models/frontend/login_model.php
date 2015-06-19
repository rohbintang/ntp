<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login__model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


function login($where = ''){

return $this->db->query("select * from nm_developers $where;");

}

}

?>