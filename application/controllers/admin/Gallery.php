<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends Admin_Controller{

	public function __construct (){
		parent::__construct();
	}

	public function index (){
		$this->data['galleries'] = $this->aaa->getAllGalleries();
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['subview'] = 'admin/gallery/index';
		$this->load->view('admin/_layout_main', $this->data);
	}
	



	function newGallery(){
		
		$this->form_validation->set_rules('eventname', 'Event Name', 'trim');
		$this->form_validation->set_rules('date', 'Event Name', 'trim');
		// $this->form_validation->set_rules('desc', 'Achievers description', 'trim');
			
		
		if ($this->form_validation->run() == TRUE) {			
			$data['eventname'] = $this->input->post('eventname');	
			$data['created'] = $this->input->post('date');
			// $data['desc'] = $this->input->post('desc');	
		
		
		

				$config['upload_path'] = './uploads/gallery/';
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
				$this->db->insert('gallery',$data);
				$this->session->set_flashdata('message','Gallery Created Successfully');
				redirect(site_url('admin/Gallery'));
		}		
		
		$this->data['subview'] = 'admin/gallery/new';
		$this->load->view('admin/_layout_main', $this->data);
	}
	
	
	function edit($id){
		
		$this->data['gallery'] = $this->aaa->getSingleGallery($id);
		// print_r($this->data);

	
				$this->form_validation->set_rules('eventname', 'Product  Name', 'trim');
				$this->form_validation->set_rules('date', 'Event Name', 'trim');
	
		
			
		if ($this->form_validation->run() == TRUE) {			
			$data['eventname'] = $this->input->post('eventname');	
			$data['created'] = $this->input->post('date');
			//$data['desc'] = $this->input->post('desc');	
		
		
		

			$config['upload_path'] = './uploads/gallery/';
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
				$this->db->update('gallery',$data);
				$this->session->set_flashdata('message','Image Updated Successfully');
				redirect(site_url('admin/Gallery'));
		}		
		
		$this->data['subview'] = 'admin/gallery/edit';
		$this->load->view('admin/_layout_main', $this->data);
	}


	

	public function delete ($id){
	// $data_img = $this->aaa->getSingleBanner($id);
	// $filepathname = base_url().'uploads/banner/'.$data_img->bannerimg;

	$this->aaa->deleteGallery($id);
	//echo $filepathname ;
	redirect('admin/Gallery');
	}

}