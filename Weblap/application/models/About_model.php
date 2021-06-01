<?php
	class About_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_about(){
			$this->db->order_by('name');
			$query = $this->db->get('contact');
			return $query->result_array();
		}

		public function create_about(){
			$data = array(
				'name' => $this->input->post('name'),
				'name' = $this->input->post('name'),
				'email' = $this->input->post('name'),
				'subject' = $this->input->post('name'),
				'content' = $this->input->post('name')
			);

			return $this->db->insert('contact', $data);
		}

	}