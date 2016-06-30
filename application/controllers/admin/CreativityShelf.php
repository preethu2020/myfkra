<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class CreativityShelf extends Admin_Controller{

	public function __construct (){
		parent::__construct();
	}

	public function index (){
		$this->data['cshelves'] = $this->aaa->getAllCreativityShelf();

		$this->data['category'] = $this->aaa->getCategories();
		$this->data['women'] = $this->aaa->getAllCreativity();

		$this->data['message'] = $this->session->flashdata('message');
		$this->data['subview'] = 'admin/product/index';
		$this->load->view('admin/_layout_main', $this->data);
	}


	function newCreativityShelf(){

		$this->data['category'] = $this->aaa->getCategories();
		$this->data['women'] = $this->aaa->getAllCreativity();

		$this->form_validation->set_rules('productname', 'Product Name', 'trim');
		$this->form_validation->set_rules('womenid', 'women', 'trim');
		$this->form_validation->set_rules('catid', 'Category', 'trim');
		$this->form_validation->set_rules('desc', 'Product Info', 'trim');
		

		
		if ($this->form_validation->run() == TRUE) {	

	
			$data['productname'] = $this->input->post('productname');
			 $data['womenid'] = $this->input->post('womenid');		
			 $data['catid'] = $this->input->post('catid');
			 		 $data['desc'] = $this->input->post('desc');
		
			
			$config['upload_path'] = './uploads/product/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['max_size']	= '15120';
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
				
				$this->db->insert('creativity_product',$data);

				// echo "test @ phase 1";
				// echo $this->db->insert_id();
				// echo $this->db->last_query();
				$this->session->set_flashdata('message','Crestivity Shelf Created Successfully');
				redirect(site_url('admin/CreativityShelf'));
		}		
		
		$this->data['subview'] = 'admin/product/new';
		$this->load->view('admin/_layout_main', $this->data);
	}
	
	
	function edit($id){

		$this->data['category'] = $this->aaa->getCategories();
		$this->data['women'] = $this->aaa->getAllCreativity();
		$this->data['creative'] = $this->aaa->getSingleCreativityShelf($id);

		$this->form_validation->set_rules('productname', 'Product Name', 'trim|required');
		$this->form_validation->set_rules('womenid', 'women', 'trim');
		$this->form_validation->set_rules('catid', 'Category', 'trim');
		$this->form_validation->set_rules('desc', 'Product Info', 'trim');
		
		
			
				
		if ($this->form_validation->run() == TRUE) {			
			$data['productname'] = $this->input->post('productname');
			 $data['womenid'] = $this->input->post('womenid');		
			 $data['catid'] = $this->input->post('catid');
			  $data['desc'] = $this->input->post('desc');
			 //print_r($data);
			
			$config['upload_path'] = './uploads/product/';
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
				$this->db->update('creativity_product',$data);
				$this->session->set_flashdata('message','Product Updated Successfully');
				redirect(site_url('admin/CreativityShelf'));
		}		
		
		$this->data['subview'] = 'admin/product/edit';
		$this->load->view('admin/_layout_main', $this->data);
	}
	
	function ViewImage($id)
	{
		$this->data['Images'] = $this->aaa->getAllCasestudyImages($id);
		//print_r($this->data['Images']);
		$this->data['casestudyid'] = $id;
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['subview'] = 'admin/casestudy/imageindex';
		$this->load->view('admin/_layout_main', $this->data);
		
	}

	 function AddImage($id) {
		 
		$this->data['singlecasestudy'] = $this->aaa->getSingleCasestudy($id);
		//$this->form_validation->set_rules('branch', 'Branch Name', 'trim|required');
		$this->form_validation->set_rules('testimonial', 'Case Study Image',	 '');

		if ($this->form_validation->run() == TRUE) {	
				//echo "yallaaa";
				//$data['id'] =$id;		
				$config['upload_path'] = './uploads/image/';
				$config['allowed_types'] = 'gif|jpg|png';	
				$config['max_size']	= '5200';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
				$data1=NULL;
		
				


						if ($this->upload->do_upload('image'))
					{ 
					$data1 = $this->upload->data();	
				}
				if($data1)
					{ 
						$data['image'] = $data1['file_name'];
					}
					$data['csid'] = $id;
					$data['created']=date('Y-m-d h:i:s');
				$data['modified']=date('Y-m-d h:i:s');
				
				$this->db->insert('gallery',$data);
				
				$this->session->set_flashdata('message','Image Uploaded Successfully');
				redirect(site_url('admin/Casestudy/ViewImage/'.$id));
		}
		$this->data['subview'] = 'admin/casestudy/newimage';
		$this->load->view('admin/_layout_main', $this->data);
	}


public function deleteImage ($id){
		$this->aaa->deleteGalleryImage($id);
		redirect('admin/Casestudy');
	}
	

	public function delete ($id){
		$this->aaa->deleteCreativityShelf($id);
		redirect('admin/CreativityShelf');
	}

}