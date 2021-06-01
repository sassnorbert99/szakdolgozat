<?php
	class Table_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_energydatas(){
			
			$query = $this->db->get('terepasztal');
			return $query->result_array();
		}


		
	}