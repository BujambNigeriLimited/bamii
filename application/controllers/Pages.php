<?php

	class Pages extends CI_Controller {
		public function __construct() {
			parent:: __construct();

		}

		public function index() {

 		$this->data['title'] = 'GetLocal';

 		$this->load->view('pages/index', $this->data);
 		}

 		public function sign_in() {
 			$this->data['title'] = 'GetLocal Login';

	 		$this->form_validation->set_rules('email', 'Email', 'valid_email');
	 		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');

	 		if ($this->form_validation->run() === FALSE) {
	 			# code...
	 			$this->load->view('template/header', $this->data);
	 			$this->load->view('pages/sign_in', $this->data);
	 			$this->load->view('template/footer');
	 		} else {

	 			$user = $this->users->authenticate();
				if (isset($user)) {
					$this->session->set_userdata(['user' => $user]);

					redirect ('pages/profile');

				} else {
					$data['error'] = 'username / password invalid';

		 			$this->load->view('template/header', $this->data);
		 			$this->load->view('pages/sign_in', $this->data);
		 			$this->load->view('template/footer');

				}
 			}
 		}

	 	public function register() {

	 		$this->data['title'] = 'Register';
			
	 		$this->form_validation->set_rules('email', 'Email', 'valid_email');
	 		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');
	 		$this->form_validation->set_rules('passwordconf', 'Confirm Password', 'required|trim|min_length[6]|matches[password]');

	 		if ($this->form_validation->run()) {
	 			# code...
				$saved = $this->users->addUser();
				if ($saved) {
					redirect ('/pages/company');
				}	
	 		} else {

	 			$this->load->view('template/header', $this->data);
	 			$this->load->view('pages/register', $this->data);
	 			$this->load->view('template/footer');	
	 		}
	 	}

	 	public function company() {

			$this->data['title'] = 'Create Profile';

	        if(!empty($_FILES['userFile']['name'])){

	            $this->form_validation->set_rules('name', 'Company Name');
	            $this->form_validation->set_rules('email', 'Email', 'valid_email');
	            $this->form_validation->set_rules('country', 'Country');
	            $this->form_validation->set_rules('state', 'State');
	            $this->form_validation->set_rules('city', 'City');
	            $this->form_validation->set_rules('address', 'address');
	            $this->form_validation->set_rules('phone', 'Work Number', 'numeric|min_length[11]');
	            $this->form_validation->set_rules('url', 'Website');
	            $this->form_validation->set_rules('tags', 'Tags');

	            if($this->form_validation->run() == FALSE)
	            {
	                $this->data['error'] = 'Please add images';
	            }else {
                	$files = $_FILES;
                  	$count = count($_FILES['userFile']['name']);
                  	for($i=0; $i<$count; $i++)
	                    {
	                    $_FILES['userFile']['name']= time().$files['userFile']['name'][$i];
	                    $_FILES['userFile']['type']= $files['userFile']['type'][$i];
	                    $_FILES['userFile']['tmp_name']= $files['userFile']['tmp_name'][$i];
	                    $_FILES['userFile']['error']= $files['userFile']['error'][$i];
	                    $_FILES['userFile']['size']= $files['userFile']['size'][$i];

	                    $config['upload_path'] = './uploads/';
	                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
	                    $config['max_size'] = '2000000';
	                    $config['remove_spaces'] = true;
	                    $config['overwrite'] = false;
	                    $config['max_width'] = '';
	                    $config['max_height'] = '';
	                    
	                    $this->upload->initialize($config);
	                    $this->upload->do_upload('userFile');
	                    $fileName = $_FILES['userFile']['name'];
	                    $images[] = $fileName;
                    }

                    $fileName = implode(',',$images);
                    $this->users->upload_image($this->input->post(), $fileName);
                    echo "success";
	            }
	            
	        }
	        $this->load->view('template/header', $this->data);
 			$this->load->view('pages/company', $this->data);
 			$this->load->view('template/footer');
	    }

	    public function profile() {
	    	$this->data['title'] = 'Business Listings';

			$this->data['info'] = $this->users->getCompany_info();
			
			$this->load->view('pages/profile', $this->data);			
					
	    }
	}
