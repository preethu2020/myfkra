<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SecretsOfSuccess extends CI_Controller {

	public function index()
	{
		$this->data['testimonials'] = $this->aaa->getAllTestimonials();



		$this->data['believers'] = $this->aaa->get3Believers();
		$this->data['achievers'] = $this->aaa->get3Achievers($id);

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

		$this->email->from('hegde.preetham2020@gmail.com', 'Decor n more');
		$this->email->to('hegde.preetham2020@gmail.com');
		$this->email->subject('  Contact Us Form.');
		$this->email->message('

<br/>Request Details<br/>

	<br/>Name. &nbsp;'.$data['name'].'
	<br/>Email &nbsp;'.$data['email'].'
	<br/>Phone. &nbsp;'.$data['message']);

		$this->email->send();

		//print_r($data1);  
	}
		$this->load->view('myf/secret',$this->data);
	}


	public function Achievers()
	{
		$this->data['achievers'] = $this->aaa->getAllAchievers();
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

		$this->email->from('hegde.preetham2020@gmail.com', 'Decor n more');
		$this->email->to('hegde.preetham2020@gmail.com');
		$this->email->subject('  Contact Us Form.');
		$this->email->message('

<br/>Request Details<br/>

	<br/>Name. &nbsp;'.$data['name'].'
	<br/>Email &nbsp;'.$data['email'].'
	<br/>Phone. &nbsp;'.$data['message']);

		$this->email->send();

		//print_r($data1);  
	}
		$this->load->view('myf/achiever',$this->data);
	}

	public function Believers()
	{
		$this->data['believers'] = $this->aaa->getAllBelievers();
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

		$this->email->from('hegde.preetham2020@gmail.com', 'Decor n more');
		$this->email->to('hegde.preetham2020@gmail.com');
		$this->email->subject('  Contact Us Form.');
		$this->email->message('

<br/>Request Details<br/>

	<br/>Name. &nbsp;'.$data['name'].'
	<br/>Email &nbsp;'.$data['email'].'
	<br/>Phone. &nbsp;'.$data['message']);

		$this->email->send();

		//print_r($data1);  
	}
		$this->load->view('myf/believer',$this->data);
	}

	public function AchieversDetail($id)
	{

		$this->data['achievers'] = $this->aaa->getAllAchievers();
		$this->data['achiever'] = $this->aaa->getSingleAchiever($id);
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

		$this->email->from('hegde.preetham2020@gmail.com', 'Decor n more');
		$this->email->to('hegde.preetham2020@gmail.com');
		$this->email->subject('  Contact Us Form.');
		$this->email->message('

<br/>Request Details<br/>

	<br/>Name. &nbsp;'.$data['name'].'
	<br/>Email &nbsp;'.$data['email'].'
	<br/>Phone. &nbsp;'.$data['message']);

		$this->email->send();

		//print_r($data1);  
	}
		$this->load->view('myf/achiever_inner',$this->data);
	}

		public function BelieversDetail($id)
	{
	
		$this->data['believers'] = $this->aaa->getAllBelievers();
		$this->data['believer_single'] = $this->aaa->getSingleBeliever($id);
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
		$this->load->view('myf/believer_inner',$this->data);
	}




}