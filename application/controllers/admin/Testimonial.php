<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Testimonial extends Admin_Controller{

	public function __construct (){
		parent::__construct();
	}

	public function index (){
		$this->data['testimonials'] = $this->aaa->getAllTestimonials();
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['subview'] = 'admin/testimonial/index';
		$this->load->view('admin/_layout_main', $this->data);
	}
	



	function newTestimonial(){
		
		$this->form_validation->set_rules('name', 'Testimonial Name', 'trim');
			$this->form_validation->set_rules('testimonial', 'Testimonial description', 'trim');
			
		
		if ($this->form_validation->run() == TRUE) {			
			$data['name'] = $this->input->post('name');	
			$data['testimonial'] = $this->input->post('testimonial');	
		
		
		

			$config['upload_path'] = './uploads/testimonial/';
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
				$this->db->insert('testimonial',$data);
				//echo $this->db->last_query();
				$this->session->set_flashdata('message','Testimonials Created Successfully');
				redirect(site_url('admin/Testimonial'));
		}		
		
		$this->data['subview'] = 'admin/testimonial/new';
		$this->load->view('admin/_layout_main', $this->data);
	}
	
	
	function edit($id){
		
		$this->data['testimonial'] = $this->aaa->getSingleTestimonial($id);
	
		//if(!$this->data['id']) $this->data['message'] = 'Client could not be found';
		$this->form_validation->set_rules('name', 'Testimonial Name', 'trim');
			$this->form_validation->set_rules('testimonial', 'Testimonial description', 'trim');
		
			
				
		if ($this->form_validation->run() == TRUE) {			
			$data['name'] = $this->input->post('name');	
			$data['testimonial'] = $this->input->post('testimonial');	
		
		
		

			$config['upload_path'] = './uploads/testimonial/';
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
				$this->db->update('testimonial',$data);
				//$this->db->last_query();
				$this->session->set_flashdata('message','Testimonials Updated Successfully');
				redirect(site_url('admin/Testimonial'));
		}		
		
		$this->data['subview'] = 'admin/testimonial/edit';
		$this->load->view('admin/_layout_main', $this->data);
	}


	

	public function delete ($id){
	// $data_img = $this->aaa->getSingleBanner($id);
	// $filepathname = base_url().'uploads/banner/'.$data_img->bannerimg;

	$this->aaa->deleteTestimonial($id);
	//echo $filepathname ;
	redirect('admin/Testimonial');
	}

}