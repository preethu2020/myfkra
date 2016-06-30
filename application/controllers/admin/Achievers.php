<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Achievers extends Admin_Controller{

	public function __construct (){
		parent::__construct();
	}

	public function index (){
		$this->data['achievers'] = $this->aaa->getAllAchievers();
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['subview'] = 'admin/achievers/index';
		$this->load->view('admin/_layout_main', $this->data);
	}
	



	function newAchiever(){
		
		$this->form_validation->set_rules('name', 'Achievers Name', 'trim');
		$this->form_validation->set_rules('desc', 'Achievers description', 'trim');
			$this->form_validation->set_rules('ardesc', 'Achievers description', 'trim');
			
		
		if ($this->form_validation->run() == TRUE) {			
			$data['name'] = $this->input->post('name');	
			$data['desc'] = $this->input->post('desc');
			$data['ardesc'] = $this->input->post('ardesc');		
		
		
		

				$config['upload_path'] = './uploads/achiever/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['max_size']	= '5120';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
	
						if ($this->upload->do_upload('image'))
					{ 
					$data1 = $this->upload->data();	
				}
				if($data1)
					{ 
						$data['image'] = $data1['file_name'];
					}
				

				$data['created']=date('Y-m-d h:i:s');
				$data['modified']=date('Y-m-d h:i:s');
				$this->db->insert('achievers',$data);
				$this->session->set_flashdata('message','Achievers Created Successfully');
				redirect(site_url('admin/Achievers'));
		}		
		
		$this->data['subview'] = 'admin/achievers/new';
		$this->load->view('admin/_layout_main', $this->data);
	}
	
	
	function edit($id){
		
		$this->data['achiever'] = $this->aaa->getSingleAchiever($id);
		// print_r($this->data);

	
				$this->form_validation->set_rules('name', 'Dynamo Name', 'trim');
		$this->form_validation->set_rules('desc', 'Dynamo description', 'trim');
		$this->form_validation->set_rules('ardesc', 'Dynamo description', 'trim');
		
			
		if ($this->form_validation->run() == TRUE) {			
			$data['name'] = $this->input->post('name');	
			$data['desc'] = $this->input->post('desc');	
			$data['ardesc'] = $this->input->post('ardesc');	
		
		
		

			$config['upload_path'] = './uploads/achiever/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['max_size']	= '5120';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
	
						if ($this->upload->do_upload('image'))
					{ 
					$data1 = $this->upload->data();	
				}
				if($data1)
					{ 
						$data['image'] = $data1['file_name'];
					}

				$data['modified']=date('Y-m-d h:i:s');

				$this->db->where('id',$id);
				$this->db->update('achievers',$data);
				$this->session->set_flashdata('message','Achievers Updated Successfully');
				redirect(site_url('admin/Achievers'));
		}		
		
		$this->data['subview'] = 'admin/achievers/edit';
		$this->load->view('admin/_layout_main', $this->data);
	}


	

	public function delete ($id){
	// $data_img = $this->aaa->getSingleBanner($id);
	// $filepathname = base_url().'uploads/banner/'.$data_img->bannerimg;

	$this->aaa->deleteAchiever($id);
	//echo $filepathname ;
	redirect('admin/Achievers');
	}

}