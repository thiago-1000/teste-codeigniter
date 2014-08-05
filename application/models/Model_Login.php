<?php 
  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Login extends CI_Model {

    function __construct() { 
        parent::__construct();
    }
    
    function fetchAll2(){
        $query = $this->db->get('login');
        return $query->result();
    }


}

