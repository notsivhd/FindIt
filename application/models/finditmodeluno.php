<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');
	class Finditmodeluno extends CI_Model {
		 public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        function registrarusuario($data){
        	$this->db->insert('users', array('email' => $data['email'], 'name' => $data['user'], 'password' => $data['password']));
        }
	}
?>