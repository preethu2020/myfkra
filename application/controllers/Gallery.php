<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index()
	{
		//$this->data = null;
		
		$this->data['testimonials'] = $this->aaa->getAllTestimonials();
		$this->data['years'] = $this->aaa->GalleryYears();
	 $year11 = $this->data['years11'] = $this->aaa->GalleryFirstYears();
		//$this->data['gallery'] = $this->aaa->getGalleryByYear(date("Y"));
	 $this->data['gallery'] = $this->aaa->getGalleryByYear(2015);
		//print_r($data);
		//$this->data['blogs'] = $this->aaa->getBlogs();

		//$this->load->view('site/demos/json',$this->data);

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
		$this->email->to('she@myfkra.com');
		$this->email->subject('  Contact Us Form.');
		$this->email->message('

<br/>Request Details<br/>

	<br/>Name. &nbsp;'.$data1['name'].'
	<br/>Email &nbsp;'.$data1['email'].'
	<br/>Phone. &nbsp;'.$data1['message']);

		$this->email->send();

		//print_r($data1);  
	}
		$this->load->view('myf/gallery',$this->data);
	}

	public function GalleryYear($id)
	{
		//$this->data = null;
		
		$this->data['testimonials'] = $this->aaa->getAllTestimonials();
		$this->data['years'] = $this->aaa->GalleryYears();
	 	$year11 = $this->data['years11'] = $this->aaa->GalleryFirstYears();
		$this->data['gallery'] = $this->aaa->getGalleryByYear($id);
		//print_r($data);
		//$this->data['blogs'] = $this->aaa->getBlogs();

		//$this->load->view('site/demos/json',$this->data);

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
		$this->email->to('she@myfkra.com');
		$this->email->subject('  Contact Us Form.');
		$this->email->message('

<br/>Request Details<br/>

	<br/>Name. &nbsp;'.$data1['name'].'
	<br/>Email &nbsp;'.$data1['email'].'
	<br/>Phone. &nbsp;'.$data1['message']);

		$this->email->send();

		//print_r($data1);  
	}
		$this->load->view('myf/gallery',$this->data);
	}


	

}