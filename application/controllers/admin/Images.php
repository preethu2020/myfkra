<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Images extends Admin_Controller{

	public function __construct (){
		parent::__construct();
	}

	public function index (){
		$this->data['Images'] = $this->aaa->getAllImages();
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['subview'] = 'admin/image/index';
		$this->load->view('admin/_layout_main', $this->data);
	}

	function edit($imgid){
		
		$this->data['image'] = $this->aaa->getSingleImage($imgid);
		//$this->data['branchid'] = $this->aaa->getBranchidByImgId($imgid);
		$this->form_validation->set_rules('branch', 'Branch Name', 'trim|required');
		if ($this->form_validation->run() == TRUE) {	
				$data['branch'] = $this->input->post('branch');		
				//$data['actid'] =$actid;		
		
				$config['upload_path'] = './uploads/image/';
				$config['allowed_types'] = 'gif|jpg|png';	
				$config['max_size']	= '5200';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
				$data1=NULL;
				if ($this->upload->do_upload('actimage')){ 
					$data1 = $this->upload->data();				
					$configThumb = array();
					$configThumb['source_image'] = $data1['full_path'];
					$configThumb['new_image'] = './uploads/image/thumbs/';
					$configThumb['maintain_ratio'] = FALSE;
					$configThumb['width'] = 290;
					$configThumb['height'] = 220;
					$this->load->library('image_lib',$configThumb);			
					$this->image_lib->resize();
					$data['filepath1'] = $data1['file_name'];
				}						
				
				if ($this->upload->do_upload('actimage'))
				{
					$data1 = $this->upload->data();	
				}
				
				
				if($data1){
					$data['filepath2'] = $data['file_name'];
					$data['filepath1'] = $data1['file_name'];
				
				
				}
				
			
			$data['updated']=date('Y-m-d h:i:s');
				
				
				$this->db->where('imgid',$imgid);
				$this->db->update('act2img',$data);
				$this->session->set_flashdata('message','Image Updated Successfully');
				redirect(site_url('admin/Activities'));
		}		
		
		$this->data['subview'] = 'admin/image/edit';
		$this->load->view('admin/_layout_main', $this->data);
	}


	

	public function delete ($actid){
		$this->aaa->deleteImage($actid);
		redirect(site_url('admin/images'));
	}

}