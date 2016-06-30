<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creative extends CI_Controller {

	public function index()
	{
	
		$this->data['creativity_product'] = $this->aaa->getAllCreativityShelf();
		$this->data['creativity'] = $this->aaa->getAllCreativity();
		$this->data['recent_creativity'] = $this->aaa->getRecentCreativity();
		$this->data['categories'] = $this->aaa->getCategories();
	//$this->data['recent_creativity_product'] = $this->aaa->getRecentCreativityProduct();

		$this->data['categories'] = $this->aaa->getCategories();


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
		
		$this->load->view('myf/creative',$this->data);
	}

function CreativeInner($id)
{
	$this->data['creativity_product'] = $this->aaa->getAllCreativityShelf();
	$this->data['creativity'] = $this->aaa->getAllCreativity();
	$this->data['product'] = $this->aaa->getSingleCreativityShelf($id);
	$this->data['categories'] = $this->aaa->getCategories();
	



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
		
	$this->load->view('myf/creative_inner',$this->data);

}

function CategoryProduct($id)
{

		$this->data['cat_product'] = $this->aaa->getCatProduct($id);
		$this->data['creativity_product'] = $this->aaa->getAllCreativityShelf();
		$this->data['creativity'] = $this->aaa->getAllCreativity();
		$this->data['recent_creativity'] = $this->aaa->getRecentCreativity();
		$this->data['categories'] = $this->aaa->getCategories();
		//print_r($this->data);



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
		
	$this->load->view('myf/cat_product',$this->data);



}
	

}