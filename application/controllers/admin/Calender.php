<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Calender extends Admin_Controller{

	public function __construct (){
		parent::__construct();
	}

	public function index (){
		$this->data['calenders'] = $this->aaa->getAllCalenders();
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['subview'] = 'admin/calender/index';
		$this->load->view('admin/_layout_main', $this->data);
	}
	



	function newCalender(){
		
		$this->form_validation->set_rules('event', 'Event Name', 'trim');
		$this->form_validation->set_rules('date', 'Event date', 'trim');
			
		
		if ($this->form_validation->run() == TRUE) {			
			$data['event'] = $this->input->post('event');	
			$data['date'] = $this->input->post('date');	

	
		
		
				

				$data['created']=date('Y-m-d h:i:s');
				$data['modified']=date('Y-m-d h:i:s');
				$this->db->insert('calender',$data);
				$this->session->set_flashdata('message',' new Event Created Successfully');
				redirect(site_url('admin/Calender'));
		}		
		
		$this->data['subview'] = 'admin/calender/new';
		$this->load->view('admin/_layout_main', $this->data);
	}
	
	
	function edit($id){
		
		$this->data['calender'] = $this->aaa->getSingleCalender($id);



	
		$this->form_validation->set_rules('event', 'Event Name', 'trim');
		$this->form_validation->set_rules('date', 'Event date', 'trim');
			
		
		if ($this->form_validation->run() == TRUE) {			
			$data['event'] = $this->input->post('event');	
			$data['date'] = $this->input->post('date');	

		
		
		

				$data['modified']=date('Y-m-d h:i:s');

				$this->db->where('id',$id);
				$this->db->update('calender',$data);
				$this->session->set_flashdata('message','Event Updated Successfully');
				redirect(site_url('admin/Calender'));
		}		
		
		$this->data['subview'] = 'admin/calender/edit';
		$this->load->view('admin/_layout_main', $this->data);
	}


	

	public function delete ($id){

	$this->aaa->deleteCalender($id);
	redirect('admin/Calender');
	
	}


	public function calFeed()
	{

		$json=file_get_contents("php://input"); 
		$obj = json_decode($json);

		$calender = $this->aaa->getCalFeed();

		print_r(json_encode($calender));

	}

}