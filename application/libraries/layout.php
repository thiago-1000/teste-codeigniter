<?php 
  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Welcome extends CI_Controller {
          
         public function __construct(){
                parent::__construct();
				$this->load->model('Model_Login');
         }  	

         public function index(){
		      
			 $result = $this->Model_Login->fetchAll2();
			 
             $array = array('teste1'=>'teste1-',
                            'teste2'=>'teste2--',
                            'teste3'=>'teste3---');
             $this->load->view('welcome_message', $array);
	
         }

}

