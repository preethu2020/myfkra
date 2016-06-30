<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Admin_Controller{

    public function __construct(){
        parent::__construct();
    }
 public function index (){
		$this->data['banners'] = $this->aaa->getAllBanner();
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['subview'] = 'admin/banner/index';
		$this->load->view('admin/_layout_main', $this->data);
	}
	
} ?>