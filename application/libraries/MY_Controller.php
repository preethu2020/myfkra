<?php
class MY_Controller extends CI_Controller {
	
	public $data = array();
	function __construct() {
		$this->data['meta_title'] = 'On The Wood';
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