<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Visionary extends Admin_Controller{

	public function __construct (){
		parent::__construct();
	}

	public function index (){
		$this->data['visionaries'] = $this->aaa->getVisionary();
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['subview'] = 'admin/visionary/index';
		$this->load->view('admin/_layout_main', $this->data);
	}


	function newVisionary(){
		
		$this->form_validation->set_rules('title', 'Title', 'trim');
		$this->form_validation->set_rules('desc', 'Description', 'trim');
		$this->form_validation->set_rules('postedby', 'Posted by', 'trim');
		

		
		if ($this->form_validation->run() == TRUE) {			
			$data['title'] = $this->input->post('title');
			$data['desc'] = $this->input->post('desc');	
			$data['postedby'] = $this->input->post('postedby');		

			$config['upload_path'] = './uploads/visionary/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['max_size']	= '5120';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);

						if ($this->upload->do_upload('mainimage'))
					{ 
					$data1 = $this->upload->data();	
				}
				if($data1)
					{ 
						$data['mainimage'] = $data1['file_name'];
					}
						if ($this->upload->do_upload('smallimage'))
					{ 
						$data2 = $this->upload->data();	
					}
				if($data2)
					{ 
						$data['smallimage'] = $data2['file_name'];
					}

						



				
				$data['created']=date('Y-m-d h:i:s');
				$data['modified']=date('Y-m-d h:i:s');
				$this->db->insert('visionary',$data);
				$this->session->set_flashdata('message','Visionary Created Successfully');
				redirect(site_url('admin/Visionary'));
		}		
		
		$this->data['subview'] = 'admin/visionary/new';
		$this->load->view('admin/_layout_main', $this->data);
	}
	
	
	function edit($id){
		
		$this->data['visionary'] = $this->aaa->getSingleVisionary($id);
	
	$this->form_validation->set_rules('title', 'Title', 'trim');
	$this->form_validation->set_rules('desc', 'Description', 'trim');
		$this->form_validation->set_rules('postedby', 'Posted by', 'trim');

		
		
			
	
		if ($this->form_validation->run() == TRUE) {			
			$data['title'] = $this->input->post('title');
			$data['desc'] = $this->input->post('desc');	
			$data['postedby'] = $this->input->post('postedby');		

			$config['upload_path'] = './uploads/visionary/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['max_size']	= '5120';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);

						if ($this->upload->do_upload('mainimage'))
					{ 
					$data1 = $this->upload->data();	
				}
				if($data1)
					{ 
						$data['mainimage'] = $data1['file_name'];
					}
						if ($this->upload->do_upload('smallimage'))
					{ 
						$data2 = $this->upload->data();	
					}
				if($data2)
					{ 
						$data['smallimage'] = $data2['file_name'];
					}

						

				//$data['created']=date('Y-m-d h:i:s');
				$data['modified']=date('Y-m-d h:i:s');
				$this->db->where('id',$id);
				$this->db->update('visionary',$data);
				$this->session->set_flashdata('message','Blog Updated Successfully');
				redirect(site_url('admin/Visionary'));
		}		
		
		$this->data['subview'] = 'admin/visionary/edit';
		$this->load->view('admin/_layout_main', $this->data);
	}


	

	public function delete ($id){
		$this->aaa->deleteVisionary($id);
		redirect('admin/Visionary');
	}

}