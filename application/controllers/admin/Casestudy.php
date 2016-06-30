<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Casestudy extends Admin_Controller{

	public function __construct (){
		parent::__construct();
	}

	public function index (){
		$this->data['casestudies'] = $this->aaa->getCasestudies();

		$this->data['clients'] = $this->aaa->getClients();
		$this->data['categories'] = $this->aaa->getCategories();

		$this->data['message'] = $this->session->flashdata('message');
		$this->data['subview'] = 'admin/casestudy/index';
		$this->load->view('admin/_layout_main', $this->data);
	}


	function newCasestudy(){

		$this->data['clients'] = $this->aaa->getClients();
		$this->data['categories'] = $this->aaa->getCategories();

			$this->form_validation->set_rules('clientid', 'clientid', 'trim|required');
		$this->form_validation->set_rules('categoryid', 'categoryid', 'trim|required');
		$this->form_validation->set_rules('testimonial', 'Testimonial', 'trim');
		$this->form_validation->set_rules('workstation', 'Workstation', 'trim');
		$this->form_validation->set_rules('sqft', 'Square Ft.', 'trim');
		$this->form_validation->set_rules('weeks', 'Weeks', 'trim');
	$this->form_validation->set_rules('brief', 'Brief', 'trim');
		$this->form_validation->set_rules('furnishing', 'Furnishing', 'trim');
			$this->form_validation->set_rules('featured', 'Is Featured ?', 'trim');
		

		
		if ($this->form_validation->run() == TRUE) {			
			$data['clientid'] = $this->input->post('clientid');
			$data['categoryid'] = $this->input->post('categoryid');		
			$data['testimonial'] = $this->input->post('testimonial');
			$data['workstation'] = $this->input->post('workstation');	
			$data['sqft'] = $this->input->post('sqft');
			$data['weeks'] = $this->input->post('weeks');	
				$data['brief'] = $this->input->post('brief');
			$data['furnishing'] = $this->input->post('furnishing');
			$data['featured'] = $this->input->post('featured');	
			$config['upload_path'] = './uploads/casestudy/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['max_size']	= '5120';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);

						if ($this->upload->do_upload('smallbg'))
					{ 
					$data1 = $this->upload->data();	
				}
				if($data1)
					{ 
						$data['smallbg'] = $data1['file_name'];
					}
					

						if ($this->upload->do_upload('bgimg1'))
					{ 
						$data3 = $this->upload->data();	
					}
				if($data3)
					{ 
						$data['bgimg1'] = $data3['file_name'];
					} 
					if ($this->upload->do_upload('bgimg2'))
					{ 
						$data4 = $this->upload->data();	
					}
				if($data3)
					{ 
						$data['bgimg2'] = $data3['file_name'];
					} 
					if ($this->upload->do_upload('bgimg3'))
					{ 
						$data4 = $this->upload->data();	
					}
				if($data3)
					{ 
						$data['bgimg3'] = $data3['file_name'];
					} 

				




				
				$data['created']=date('Y-m-d h:i:s');
				$data['modified']=date('Y-m-d h:i:s');
				$this->db->insert('case_study',$data);
				//echo $this->db->insert_id();
				//echo $this->db->last_query();
				$this->session->set_flashdata('message','Case Study Created Successfully');
				redirect(site_url('admin/Casestudy'));
		}		
		
		$this->data['subview'] = 'admin/casestudy/new';
		$this->load->view('admin/_layout_main', $this->data);
	}
	
	
	function edit($id){

		$this->data['clients'] = $this->aaa->getClients();
		$this->data['categories'] = $this->aaa->getCategories();
		
		$this->data['casestudy'] = $this->aaa->getSingleCasestudy($id);
			$data['clientid'] = $this->input->post('clientid');
			$data['categoryid'] = $this->input->post('categoryid');	
	
			$clid = $data['clientid'] = $this->input->post('clientid');
			$ctid = $data['categoryid'] = $this->input->post('categoryid');	
			$client1 = 	 $this->aaa->getSingleClient($clid);
			$category = $this->aaa->getSingleCategory($ctid);
		

			$this->form_validation->set_rules('clientid', 'clientid', 'trim|required');
		$this->form_validation->set_rules('categoryid', 'categoryid', 'trim|required');
		$this->form_validation->set_rules('testimonial', 'Testimonial', 'trim');
		$this->form_validation->set_rules('workstation', 'Workstation', 'trim');
		$this->form_validation->set_rules('sqft', 'Square Ft.', 'trim');
		$this->form_validation->set_rules('weeks', 'Weeks', 'trim');
	$this->form_validation->set_rules('brief', 'Brief', 'trim');
		$this->form_validation->set_rules('furnishing', 'Furnishing', 'trim');
		$this->form_validation->set_rules('featured', 'Is Featured ?', 'trim');
		

		
			
				
		if ($this->form_validation->run() == TRUE) {			
			
			$data['clientid'] = $this->input->post('clientid');
			$data['categoryid'] = $this->input->post('categoryid');		
			$data['testimonial'] = $this->input->post('testimonial');
			$data['workstation'] = $this->input->post('workstation');	
			$data['sqft'] = $this->input->post('sqft');
			$data['weeks'] = $this->input->post('weeks');	
				$data['brief'] = $this->input->post('brief');
			$data['furnishing'] = $this->input->post('furnishing');
			$data['featured'] = $this->input->post('featured');	
		
				$config['upload_path'] = './uploads/casestudy/';
				$config['allowed_types'] = 'gif|jpg|png';	
				$config['max_size']	= '5200';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
				$data1=NULL;	
				
			$this->load->library('upload', $config);

						if ($this->upload->do_upload('smallbg'))
					{ 
					$data1 = $this->upload->data();	
				}
				if($data1)
					{ 
						$data['smallbg'] = $data1['file_name'];
					}
					

						if ($this->upload->do_upload('bgimg1'))
					{ 
						$data3 = $this->upload->data();	
					}
				if($data3)
					{ 
						$data['bgimg1'] = $data3['file_name'];
					} 
					if ($this->upload->do_upload('bgimg2'))
					{ 
						$data4 = $this->upload->data();	
					}
				if($data3)
					{ 
						$data['bgimg2'] = $data3['file_name'];
					} 
					if ($this->upload->do_upload('bgimg3'))
					{ 
						$data4 = $this->upload->data();	
					}
				if($data3)
					{ 
						$data['bgimg3'] = $data3['file_name'];
					} 

				//$data['created']=date('Y-m-d h:i:s');
				$data['modified']=date('Y-m-d h:i:s');
				$this->db->where('id',$id);
				$this->db->update('case_study',$data);
				$this->session->set_flashdata('message','Case Study Updated Successfully');
				redirect(site_url('admin/Casestudy'));
		}		
		
		$this->data['subview'] = 'admin/casestudy/edit';
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
		$this->aaa->deleteCasestudy($id);
		redirect('admin/Casestudy');
	}

}