?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tickets_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    
    function view() {
        return $this->db->get('nm_tickets');
    }
}