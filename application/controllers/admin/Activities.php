<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Activities extends Admin_Controller{

	public function __construct (){
		parent::__construct();
	}

	public function index (){
		$this->data['activity'] = $this->aaa->getActivities();
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['subview'] = 'admin/activity/index';
		$this->load->view('admin/_layout_main', $this->data);
	}
	function newactivity(){
		$this->form_validation->set_rules('actname', 'Activity Name', 'trim|required');
		$this->form_validation->set_rules('aractname', 'Arabic Activity Name', 'trim|required');
		$this->form_validation->set_rules('actimage', 'Banner Image',	 '');
		$this->form_validation->set_rules('actbrief', 'Activity Brief', 'trim|required');
		$this->form_validation->set_rules('aractbrief', 'Activity Brief', 'trim|required');

		$this->form_validation->set_rules('branch', 'Branch Name', 'trim|required');
		if ($this->form_validation->run() == TRUE) {			
			$data['title'] = $this->input->post('actname');				
			$data['artitle'] = $this->input->post('aractname');				
			$data['brief'] = $this->input->post('actbrief');				
			$data['arbrief'] = $this->input->post('aractbrief');				
							
			$data['branch'] = $this->input->post('branch');	
if($data['branch'] == "Badaa")	{
	$data['arbranch'] = "البدع";
	}		
	if($data['branch'] == "Jumeirah")	{
	$data['arbranch'] = "جميرا";
	}	
							
		
				$config['upload_path'] = './uploads/activity/';
				$config['allowed_types'] = 'gif|jpg|png';	
				$config['max_size']	= '5200';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
				$data1=NULL;	
				
				if ($this->upload->do_upload('actimage')){ $data1 = $this->upload->data();	}
				if($data1){ $data['bimage'] = $data1['file_name'];}
				
				$data['created']=date('Y-m-d h:i:s');
				$data['modified']=date('Y-m-d h:i:s');
				
				$this->db->insert('activity',$data);
				
				$this->session->set_flashdata('message','Activity created Successfully');
				redirect(site_url('admin/activities'));
		}		
		
		$this->data['subview'] = 'admin/activity/new';
		$this->load->view('admin/_layout_main', $this->data);
	}
	 
	 function AddImage($actid) {
		 
		$this->data['singleactivity'] = $this->aaa->getSingleActivity($actid);
		$this->form_validation->set_rules('branch', 'Branch Name', 'trim|required');
		$this->form_validation->set_rules('actimage', 'Activity Image',	 '');
	//	$this->form_validation->set_rules('actbrief', 'Activity Brief', 'trim|required');
	//	$this->form_validation->set_rules('actdesc', 'Activity Description', 'trim|required');
		if ($this->form_validation->run() == TRUE) {	
				$data['branch'] = $this->input->post('branch');		
				$data['actid'] =$actid;		
		
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
					$data['filepath2'] = $data1['file_name'];
				}						
				
				if ($this->upload->do_upload('actimage'))
				{
					$data3 = $this->upload->data();	
				}

				if($data1){
					$data['filepath2'] = $data3['file_name'];
					$data['filepath1'] = $data1['file_name'];
				
				
				}
				
				//$data['created']=date('Y-m-d h:i:s');
				//$data['updated']=date('Y-m-d h:i:s');
				
				$this->db->insert('act2img',$data);
				
				$this->session->set_flashdata('message','Image Uploaded Successfully');
				redirect(site_url('admin/activities'));
		}
		$this->data['subview'] = 'admin/image/new';
		$this->load->view('admin/_layout_main', $this->data);
	}

	function ViewImage($actid)
	{
		$this->data['Images'] = $this->aaa->getAllActImages($actid);
		$this->data['actid1'] = $actid;
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['subview'] = 'admin/image/index';
		$this->load->view('admin/_layout_main', $this->data);
		
	}
	
	

	
	function edit($actid){
		
		$this->data['activity'] = $this->aaa->getSingleActivity($actid);
		
		$this->form_validation->set_rules('actname', 'Activity Name', 'trim|required');
		$this->form_validation->set_rules('aractname', 'Arabic Activity Name', 'trim|required');
		$this->form_validation->set_rules('actimage', 'Banner Image',	 '');
		$this->form_validation->set_rules('actbrief', 'Activity Brief', 'trim|required');
		$this->form_validation->set_rules('aractbrief', 'Activity Brief', 'trim|required');
	
		$this->form_validation->set_rules('branch', 'Branch Name', 'trim|required');
		
		
		if ($this->form_validation->run() == TRUE) {			
			$data['title'] = $this->input->post('actname');				
			$data['artitle'] = $this->input->post('aractname');				
			$data['brief'] = $this->input->post('actbrief');				
			$data['arbrief'] = $this->input->post('aractbrief');				
					
			$data['branch'] = $this->input->post('branch');				
		if($data['branch'] == "Badaa")	{
	$data['arbranch'] = "البدع";
	}		
	if($data['branch'] == "Jumeirah")	{
	$data['arbranch'] = "جميرا";
	}				
		
				$config['upload_path'] = './uploads/activity/';
				$config['allowed_types'] = 'gif|jpg|png';	
				$config['max_size']	= '5200';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
				$data1=NULL;	
				
				if ($this->upload->do_upload('actimage')){ $data1 = $this->upload->data();	}
				if($data1){ $data['bimage'] = $data1['file_name'];}
			
				
				
				$data['modified']=date('Y-m-d h:i:s');
				
				$this->db->where('actid',$actid);
				$this->db->update('activity',$data);
				$this->session->set_flashdata('message','Activity  Updated Successfully');
				redirect(site_url('admin/activities'));
		}		
		
		$this->data['subview'] = 'admin/activity/edit';
		$this->load->view('admin/_layout_main', $this->data);
	}


	

	public function delete ($actid){
		$this->aaa->deleteActivity($actid);
		redirect(site_url('admin/activities'));
	}

}