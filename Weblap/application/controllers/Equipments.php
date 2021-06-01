<?php

	class Equipments extends CI_Controller{
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/equipments/'.$page.'.php')){
				show_404();
			}
		
			if (!$this->session->userdata('logged_in')) {
				# code...
				redirect('users/login');
			}
			$data['title'] = ucfirst($page);


			

			$data['energydatas'] = $this->table_model->get_energydatas();

			
		


     //Itt amikor a felhasználó be van jelentkezve rögzítjük az adatbázisban hogy melyik oldalon jár jelenleg,
     //És mikor látogatta azt meg
    
			
   
    
			$this->load->view('templates/header');
			$this->load->view('equipments/'.$page, $data);
			$this->load->view('templates/footer');

		}

		public function func($page='home',$equipment){
			if(!file_exists(APPPATH.'views/equipments/functions/'.$page.'.php')){
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
			
			

			$this->load->view('equipments/functions/'.$page, $data);

		}
		
	}
