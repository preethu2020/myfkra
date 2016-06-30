<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function index()
	{
		//$this->data = null;
		$this->data['clients'] = $this->aaa->getClients();
		$this->data['casestudies'] = $this->aaa->getCasestudies();
		$this->data['blogs'] = $this->aaa->getBlogs();

		$this->load->view('services',$this->data);
	}

	public function service1()
	{
		//$this->data = null;
		$this->data['clients'] = $this->aaa->getClients();
		$this->data['casestudies'] = $this->aaa->getCasestudies();
		$this->data['blogs'] = $this->aaa->getBlogs();

		$this->load->view('service1',$this->data);
	}

	public function service2()
	{
		//$this->data = null;
		$this->data['clients'] = $this->aaa->getClients();
		$this->data['casestudies'] = $this->aaa->getCasestudies();
		$this->data['blogs'] = $this->aaa->getBlogs();

		$this->load->view('service2',$this->data);
	}

	public function service3()
	{
		//$this->data = null;
		$this->data['clients'] = $this->aaa->getClients();
		$this->data['casestudies'] = $this->aaa->getCasestudies();
		$this->data['blogs'] = $this->aaa->getBlogs();

		$this->load->view('service3',$this->data);
	}

}
