<?php

	class Equipments extends CI_Controller{
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/qr/demo'.$page.'.php')){
				show_404();
			}
		
			if (!$this->session->userdata('logged_in')) {
				# code...
				redirect('users/login');
			}
			$data['title'] = ucfirst($page);
    
			$this->load->view('templates/header');
			$this->load->view('qr/demo'.$page, $data);
			$this->load->view('templates/footer');

		}

		public function func($page='home',$equipment){
			if(!file_exists(APPPATH.'views/qr/demo/'.$page.'.php')){
				show_404();
			}
			if (!$this->session->userdata('logged_in')) {
				# code...
				redirect('users/login');
			}
			$data['title'] = ucfirst($page);
			$data['page']=ucfirst($equipment);
			$data['loggedin']=$this->session->userdata('logged_in');
			$data['username']=$this->session->userdata('username');
			
			

			$this->load->view('qr/demo/'.$page, $data);

		}
		
	}
