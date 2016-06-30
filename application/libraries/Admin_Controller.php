<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends MY_Controller{
	function __construct (){
		parent::__construct();
		$this->data['meta_title'] = 'Decor N More CMS';
		$this->data['message'] = NULL;
		$this->load->helper('form');
		$this->load->library('form_validation');
		$exception_uris = array(
			'admin/user/login', 
			'admin/user/logout'
		);
		if (in_array(uri_string(), $exception_uris) == FALSE) {
			if ($this->aaa->loggedin() == FALSE) {
				redirect('admin/user/login');
			}
		}	
	}
}