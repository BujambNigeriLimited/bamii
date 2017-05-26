<?php

	Class Users extends CI_Model {
		public function __construct() {
			parent:: __construct();

		}

		public function authenticate () {
			$user = [
				'email' => $this->input->post ('email'),
				'password' => md5 ($this->input->post ('password'))
			];

			$this->db->limit(1);
			return $this->db->get_where ('users', $user)->row ();
		}

		public function addUser() {

			$user = array(
				
				'password' =>md5($this->input->post('password')),
				'email' =>$this->input->post('email'),
			);

			return $this->db->insert('users', $user);
		}

		public function getRows($id = ''){
	        $this->db->select('file_id,pictures,created');
	        $this->db->from('files');
	        if($id){
	            $this->db->where('file_id',$id);
	            $query = $this->db->get();
	            $result = $query->row_array();
	        }else{
	            $this->db->order_by('created','desc');
	            $query = $this->db->get();
	            $result = $query->result_array();
	        }
	        return !empty($result)?$result:false;
	    }

		public function upload_image($inputdata,$filename) {
      
			$this->db->insert('company_info', $inputdata); 
			$insert_id = $this->db->insert_id();
			if($filename!='' ){
				$filename1 = explode(',',$filename);
				foreach($filename1 as $file){
					$file_data = array(
						'pictures' => $file,
						'created' => date("Y-m-d H:i:s"),
						'modified' => date("Y-m-d H:i:s"),
						'info_id' => $insert_id
					);
					$this->db->insert('files', $file_data);
				}
			}
    	}   

    	public function getCompany_info() {
			$sql = "SELECT * FROM company_info as c JOIN files as f WHERE c.info_id = f.info_id GROUP BY c.info_id";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;

    	}
	}
