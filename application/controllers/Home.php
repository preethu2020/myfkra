<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		//$this->data = null;
		$this->data['banners'] = $this->aaa->getAllBanner();
		$this->data['testimonials'] = $this->aaa->getAllTestimonials();
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('email');


			$this->form_validation->set_rules('name', ' Name', 'trim');
			$this->form_validation->set_rules('email', ' Name', 'trim');
			$this->form_validation->set_rules('message', ' Message', 'trim');


if ($this->form_validation->run() == TRUE) {
	$name = $data1['name'] = $this->input->post('name');	
	$email	= $data1['email'] = $this->input->post('email');	
	$message = $data1['phone'] = $this->input->post('message');	
	

		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'utf-8';
		$config['mailtype'] = 'html';

		$config['wordwrap'] = TRUE;

		$this->email->initialize($config);

				$this->email->from('admin@aloremedia.com', 'MyFkra');
		$this->email->to('hegde.preetham2020@gmail.com');
		$this->email->subject('  Contact Us Form.');
		$this->email->message('

<br/>Request Details<br/>

	<br/>Name. &nbsp;'.$data1['name'].'
	<br/>Email &nbsp;'.$data1['email'].'
	<br/>Message. &nbsp;'.$data1['message']);

		$this->email->send();

		//print_r($data1);  
	}

		$this->load->view('myf/index',$this->data);
	}

	


public function calFeed()
	{

		$json=file_get_contents("php://input"); 
		$obj = json_decode($json);

		$calender = $this->aaa->getCalFeed();

		print_r(json_encode($calender));

	}

}