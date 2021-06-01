<?php
	class Users extends CI_Controller{

		public function __construct(){
        		parent::__construct();
        		$this->load->model('User_model');
    		}



		public function register(){
			$data['title'] = 'Sign Up';


			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			if ($this->form_validation->run() === FALSE) {
				# code...
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			}else{
				$enc_password = md5($this->input->post('password'));

				$this->user_model->register($enc_password);
				$this->session->set_flashdata('user_registered', 'Sikeresen regisztráltál! Jelentkezz be!');
				redirect('users/login');
			}
		}


		public function login(){
			

			$data['title'] = 'Sign In';

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			} else {
				
				// Get username
				$username = $this->input->post('username');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));

				// Login user
				$user_id = $this->user_model->login($username, $password);

				$query = "SELECT admin FROM users WHERE username='$username'";
               $link = mysqli_connect('','','','');
               if (mysqli_connect_errno()) {
    				printf("Connect failed: %s\n", mysqli_connect_error());
    			exit();
				}
				$result= mysqli_query($link,$query) or die(mysqli_error($link)); 

    			while($row = mysqli_fetch_assoc($result)){
        		foreach($row as $cname => $cvalue){
           		$admin=$cvalue;
        		
    			}
   			 }


				if($user_id){
					// Create session
					$user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => true,
						'admin' => $admin
						
					);

					$this->session->set_userdata($user_data);

					// Set message
					if($admin==0){$this->session->set_flashdata('user_loggedin', 'Sikeresen bejelentkeztél!');}
					else{$this->session->set_flashdata('user_loggedin','Sikeresen bejelentkeztél adminként!');}
				


					redirect('home');
				} else {
					// Set message
					$this->session->set_flashdata('login_failed', 'Hibás adatok!');

					redirect('users/login');
				}		
			}
		}

		public function logout(){
			require_once($_SERVER['DOCUMENT_ROOT'].'/application/views/equipments/functions/wheretheuseris.php');
          	wheretheuseris($this,"Exit"); 
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');

			$this->session->set_flashdata('user_loggedout', 'Sikeresen kijelentkeztél!');

			redirect('users/login');
		}
		

		public function check_username_exists($username){
			$this->form_validation->set_message('check_username_exists', 'Ez a felhasználói név már szerepel!');
			if ($this->user_model->check_username_exists($username)) {
				# code...
				return true;
			}else{
				return false;
			}
		}



		public function check_admin(){
			if ($this->user_model->check_admin()) {
				# code...
				return true;
			}else{
				return false;
			}
		}


		public function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists', 'Ez az email cím már szerepel!');
			if ($this->user_model->check_email_exists($email)) {
				# code...
				return true;
			}else{
				return false;
			}
		}



    		
    		public function list(){    



    		if (!$this->session->userdata('logged_in')||$this->session->userdata('admin') != 1) {
				# code...
				redirect('home');
			}
       		$records = $this->User_model->get_list(); 
       		$view_params = 
       		[
           		'users'  =>  $records
       		];
       		$this->load->helper('url'); 
       		$this->load->view('users/list', $view_params);
    		}


		

	}



















