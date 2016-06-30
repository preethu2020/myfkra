<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Category extends Admin_Controller{

	public function __construct (){
		parent::__construct();
	}

	public function index (){
		$this->data['categories'] = $this->aaa->getCategories();
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['subview'] = 'admin/category/index';
		$this->load->view('admin/_layout_main', $this->data);
	}
	



	function newCategory(){
		
		$this->form_validation->set_rules('name', 'Category Name', 'trim|required');
		
		if ($this->form_validation->run() == TRUE) {			
			$data['name'] = $this->input->post('name');	
		

			$config['upload_path'] = './uploads/category/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['max_size']	= '5120';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
	
						if ($this->upload->do_upload('bgimg'))
					{ 
					$data1 = $this->upload->data();	
				}
				if($data1)
					{ 
						$data['bgimage'] = $data1['file_name'];
					}
						if ($this->upload->do_upload('logo'))
					{ 
						$data2 = $this->upload->data();	
					}
				if($data2)
					{ 
						$data['logo'] = $data2['file_name'];
					}

					



				
				$data['created']=date('Y-m-d h:i:s');
				$data['modified']=date('Y-m-d h:i:s');
				$this->db->insert('categories',$data);
				//echo $this->db->last_query();
				$this->session->set_flashdata('message','Category Created Successfully');
				redirect(site_url('admin/Category'));
		}		
		
		$this->data['subview'] = 'admin/category/new';
		$this->load->view('admin/_layout_main', $this->data);
	}
	
	
	function edit($id){
		
		$this->data['category'] = $this->aaa->getSingleCategory($id);
	
		//if(!$this->data['id']) $this->data['message'] = 'Client could not be found';
		
		$this->form_validation->set_rules('name', 'Category Name', 'trim|required');
		
			
				
		if ($this->form_validation->run() == TRUE) {			
			$data['name'] = $this->input->post('name');	
		

			$config['upload_path'] = './uploads/category/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['max_size']	= '5120';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
	
						if ($this->upload->do_upload('bgimg'))
					{ 
					$data1 = $this->upload->data();	
				}
				if($data1)
					{ 
						$data['bgimage'] = $data1['file_name'];
					}
						if ($this->upload->do_upload('logo'))
					{ 
						$data2 = $this->upload->data();	
					}
				if($data2)
					{ 
						$data['logo'] = $data2['file_name'];
					}

					



				
			
				//$data['created']=date('Y-m-d h:i:s');
				$data['modified']=date('Y-m-d h:i:s');
				$this->db->where('id',$id);
				$this->db->update('categories',$data);
				$this->session->set_flashdata('message','Categories Updated Successfully');
				redirect(site_url('admin/Category'));
		}		
		
		$this->data['subview'] = 'admin/category/edit';
		$this->load->view('admin/_layout_main', $this->data);
	}


	

	public function delete ($id){
		$this->aaa->deleteCategory($id);
		redirect('admin/Category');
	}

}