<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dynamo extends Admin_Controller{

	public function __construct (){
		parent::__construct();
	}

	public function index (){
		$this->data['dynamos'] = $this->aaa->getAllDynamos();
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['subview'] = 'admin/dynamo/index';
		$this->load->view('admin/_layout_main', $this->data);
	}
	



	function newDynamo(){
		
		$this->form_validation->set_rules('name', 'Dynamo Name', 'trim');
		$this->form_validation->set_rules('desc', 'Dynamo description', 'trim');
		$this->form_validation->set_rules('ardesc', 'Dynamo description', 'trim');
			
		
		if ($this->form_validation->run() == TRUE) {			
			$data['name'] = $this->input->post('name');	
			$data['desc'] = $this->input->post('desc');	
			$data['ardesc'] = $this->input->post('ardesc');	
		
		
		

			$config['upload_path'] = './uploads/dynamo/';
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
				// 		if ($this->upload->do_upload('logo'))
				// 	{ 
				// 		$data2 = $this->upload->data();	
				// 	}
				// if($data2)
				// 	{ 
				// 		$data['logo'] = $data2['file_name'];
				// 	}

				$data['created']=date('Y-m-d h:i:s');
				$data['modified']=date('Y-m-d h:i:s');
				$this->db->insert('dynamo',$data);
				//echo $this->db->last_query();
				$this->session->set_flashdata('message','Testimonials Created Successfully');
				redirect(site_url('admin/Dynamo'));
		}		
		
		$this->data['subview'] = 'admin/dynamo/new';
		$this->load->view('admin/_layout_main', $this->data);
	}
	
	
	function edit($id){
		
		$this->data['dynamo'] = $this->aaa->getSingleDynamo($id);

	
				$this->form_validation->set_rules('name', 'Dynamo Name', 'trim');
		$this->form_validation->set_rules('desc', 'Dynamo description', 'trim');
		$this->form_validation->set_rules('ardesc', 'Dynamo description', 'trim');
		
			
		if ($this->form_validation->run() == TRUE) {			
			$data['name'] = $this->input->post('name');	
			$data['desc'] = $this->input->post('desc');
			$data['ardesc'] = $this->input->post('ardesc');		
		
		
		

			$config['upload_path'] = './uploads/dynamo/';
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
				
			
				//$data['created']=date('Y-m-d h:i:s');
				$data['modified']=date('Y-m-d h:i:s');

				$this->db->where('id',$id);
				$this->db->update('dynamo',$data);
				//$this->db->last_query();
				$this->session->set_flashdata('message','Dynamo Updated Successfully');
				redirect(site_url('admin/Dynamo'));
		}		
		
		$this->data['subview'] = 'admin/dynamo/edit';
		$this->load->view('admin/_layout_main', $this->data);
	}


	

	public function delete ($id){
	// $data_img = $this->aaa->getSingleBanner($id);
	// $filepathname = base_url().'uploads/banner/'.$data_img->bannerimg;

	$this->aaa->deleteDynamo($id);
	//echo $filepathname ;
	redirect('admin/Dynamo');
	}

}