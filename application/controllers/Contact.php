<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		//$this->data = null;
		// $this->data['gallery'] = $this->aaa->getAllGalleries();
		$this->data['testimonials'] = $this->aaa->getAllTestimonials();
		//print_r($data);
		//$this->data['blogs'] = $this->aaa->getBlogs();

		//$this->load->view('site/demos/json',$this->data);
		$this->load->view('myf/contact',$this->data);
	}

	

}