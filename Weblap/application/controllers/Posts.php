<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Posts extends CI_Controller{
		public function index($offset = 0){
			$config['base_url'] = base_url() . 'posts/index/';
			$config['total_rows'] = $this->db->count_all('posts');
			$config['per_page'] = 4;
			$config['uri_segment'] = 3;
			$config['attributes'] = array('class' => 'pagination-link');

			
			$this->pagination->initialize($config);


			$data['title'] = 'Latest Posts';

			$data['posts'] = $this->post_model->get_posts(FALSE, $config['per_page'], $offset);

			

			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($slug = NULL){
			$data['post'] = $this->post_model->get_posts($slug);
			$post_id = $data['post']['id'];

			$data['comments'] = $this->comment_model->get_comments($post_id);


			if (empty($data['post'])) {
				# code...
				show_404();
			}

			$data['title'] = $data['post']['title'];
			$data['username'] =$data['post']['username'];

			$this->load->view('templates/header');
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');
		}

		public function create(){
			if (!$this->session->userdata('logged_in')) {
				# code...
				redirect('users/login');
			}

			
			

			$data['title'] = 'Készítsen egy posztot';

			
			$data['categories'] = $this->post_model->get_categories();

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('body', 'Body', 'required');

			if ($this->form_validation->run() === FALSE) {

					$this->load->view('templates/header');
					$this->load->view('posts/create', $data);
					$this->load->view('templates/footer');
			}else{
				
				$config['upload_path'] = './assets/images/posts';
				//$config['upload_path'] = APPPATH . '/img';
				$config['allowed_types'] = 'jpg|jpeg|gif|png';
				//$config['max_size'] = '5000';
				//$config['max_width'] = '2000';
				//$config['max_height'] = '2000';
				$this->load->library('upload', $config);
				

				
				if (!$this->upload->do_upload('file')) {
					# code...
					$errors = array('error' => $this->upload->display_errors());
					$post_image = 'noimage.jpg';
					
				}else{
					
					$data = array('upload_data' => $this->upload->data());

					$post_image = $_FILES['file']['name'];		
					////////////////////////////////////////////////////////////
					$upload_data = $this->upload->data();
                	$fileName = $upload_data['file_name'];

                	$source = './assets/images/posts/'.$fileName;                	         
        			
        			$this->load->library('ftp');
        			$ftp_config['hostname'] = 'varazstorony.robucation.com';
        			$ftp_config['username'] = 'varazstorony';
        			$ftp_config['password'] = 'EKElabor2021';
        			$ftp_config['debug']    = TRUE;
					
					$this->ftp->connect($ftp_config);

					$destination = './assets/images/'.$fileName;

					$this->ftp->upload($source, ".".$destination);
					$this->ftp->close();
					@unlink($source);


        			
        			
        			


				

				$this->post_model->create_post($post_image);

				$this->session->set_flashdata('post_created', 'created a post');


				redirect('posts');
			}

			$this->load->view('posts/view');	
		}

	}
		public function delete($id){
			if (!$this->session->userdata('logged_in')) {
				# code...
				redirect('users/login');
			}


			$this->post_model->delete_post($id);

			$this->session->set_flashdata('post_deleted', 'post deleted');


			redirect('posts');

		}

		public function edit($slug){

			if (!$this->session->userdata('logged_in')) {
				# code...
				redirect('users/login');
			}


			



			$data['post'] = $this->post_model->get_posts($slug);



			if ($this->session->userdata('user_id') != $this->post_model->get_posts($slug)['user_id'] and $this->session->userdata('admin') != 1) {
				# code...
				redirect('posts');

			}

			$data['categories'] = $this->post_model->get_categories();

			if (empty($data['post'])) {
				# code...
				show_404();
			}

			$data['title'] = 'Edit Post';

			$this->load->view('templates/header');
			$this->load->view('posts/edit', $data);
			$this->load->view('templates/footer');
		}

		public function update(){

			if (!$this->session->userdata('logged_in')) {
				# code...
				redirect('users/login');
			}


			$this->post_model->update_post();

			$this->session->set_flashdata('post_updated', 'post updated');

			redirect('posts');
		}
	}

















