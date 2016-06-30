<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Creativity extends Admin_Controller{

	public function __construct (){
		parent::__construct();
	}

	public function index (){
		$this->data['creativity'] = $this->aaa->getAllCreativity();
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['subview'] = 'admin/creativity/index';
		$this->load->view('admin/_layout_main', $this->data);
	}
	



	function newCreativity(){
		
		$this->form_validation->set_rules('name', 'Creativity Women  Name', 'trim');
		$this->form_validation->set_rules('desc', 'Creativity Women description', 'trim');
			
		
		if ($this->form_validation->run() == TRUE) {			
			$data['name'] = $this->input->post('name');	
			$data['desc'] = $this->input->post('desc');	
		
		
		

				$config['upload_path'] = './uploads/creativity/';
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
				$this->db->insert('creativity',$data);
				$this->session->set_flashdata('message','Creativity Women Created Successfully');
				redirect(site_url('admin/Creativity'));
		}		
		
		$this->data['subview'] = 'admin/achievers/new';
		$this->load->view('admin/_layout_main', $this->data);
	}
	
	
	function edit($id){
		
		$this->data['creativity'] = $this->aaa->getSingleCreativity($id);
		// print_r($this->data);

	
				$this->form_validation->set_rules('name', 'Creativity Women Name', 'trim');
		$this->form_validation->set_rules('desc', 'Creativity Women description', 'trim');
		
			
		if ($this->form_validation->run() == TRUE) {			
			$data['name'] = $this->input->post('name');	
			$data['desc'] = $this->input->post('desc');	
		
		
		

			$config['upload_path'] = './uploads/creativity/';
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
				$this->db->update('creativity',$data);
				$this->session->set_flashdata('message','Creativity Women Data Updated Successfully');
				redirect(site_url('admin/Creativity'));
		}		
		
		$this->data['subview'] = 'admin/creativity/edit';
		$this->load->view('admin/_layout_main', $this->data);
	}


	

	public function delete ($id){
	// $data_img = $this->aaa->getSingleBanner($id);
	// $filepathname = base_url().'uploads/banner/'.$data_img->bannerimg;

	$this->aaa->deleteCreativity($id);
	//echo $filepathname ;
	redirect('admin/Creativity');
	}

}