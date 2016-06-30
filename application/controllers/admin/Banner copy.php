<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Banner extends Admin_Controller{

	public function __construct (){
		parent::__construct();
	}

	public function index (){
		$this->data['banners'] = $this->aaa->getAllBanner();
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['subview'] = 'admin/banner/index';
		$this->load->view('admin/_layout_main', $this->data);
	}
	



	function newBanner(){
		
		$this->form_validation->set_rules('heading', 'Banner Name', 'trim');
			$this->form_validation->set_rules('desc', 'Banner description', 'trim');
			$this->form_validation->set_rules('link', 'Banner Link', 'trim');
		
		if ($this->form_validation->run() == TRUE) {			
			$data['heading'] = $this->input->post('heading');	
			$data['desc'] = $this->input->post('desc');	
		
			$data['link'] = $this->input->post('link');	
		

			$config['upload_path'] = './uploads/banner/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['max_size']	= '5120';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
	
						if ($this->upload->do_upload('bannerimg'))
					{ 
					$data1 = $this->upload->data();	
				}
				if($data1)
					{ 
						$data['bannerimg'] = $data1['file_name'];
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
				$this->db->insert('banner',$data);
				//echo $this->db->last_query();
				$this->session->set_flashdata('message','Banner Created Successfully');
				redirect(site_url('admin/Banner'));
		}		
		
		$this->data['subview'] = 'admin/banner/new';
		$this->load->view('admin/_layout_main', $this->data);
	}
	
	
	function edit($id){
		
		$this->data['banner'] = $this->aaa->getSingleBanner($id);
	
		//if(!$this->data['id']) $this->data['message'] = 'Client could not be found';
		
			$this->form_validation->set_rules('heading', 'Banner Name', 'trim');
			$this->form_validation->set_rules('desc', 'Banner description', 'trim');
			$this->form_validation->set_rules('link', 'Banner Link', 'trim');
		
			
				
		if ($this->form_validation->run() == TRUE) {			
					$data['heading'] = $this->input->post('heading');	
					$data['desc'] = $this->input->post('desc');	
		
					$data['link'] = $this->input->post('link');	
		

				$config['upload_path'] = './uploads/banner/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['max_size']	= '115120';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
	
						if ($this->upload->do_upload('bannerimg'))
					{ 
					$data1 = $this->upload->data();	
				}
				if($data1)
					{ 
						$data['bannerimg'] = $data1['file_name'];
					}


				
			
				//$data['created']=date('Y-m-d h:i:s');
				$data['modified']=date('Y-m-d h:i:s');

				$this->db->where('id',$id);
				$this->db->update('banner',$data);
				//$this->db->last_query();
				$this->session->set_flashdata('message','Banner Updated Successfully');
				redirect(site_url('admin/Banner'));
		}		
		
		$this->data['subview'] = 'admin/banner/edit';
		$this->load->view('admin/_layout_main', $this->data);
	}


	

	public function delete ($id){
	$data_img = $this->aaa->getSingleBanner($id);
	$filepathname = base_url().'uploads/banner/'.$data_img->bannerimg;

	$this->aaa->deleteBanner($id,$filepathname);
	echo $filepathname ;
	redirect('admin/Banner');
	}

}