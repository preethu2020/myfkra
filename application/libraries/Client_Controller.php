<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Client_Controller extends MY_Controller{
	function __construct (){
		parent::__construct();
		$this->data['meta_title'] = 'Arabian Anti-Piracy Alliance';
		$this->data['message'] = NULL;
		$this->load->helper('form');
		$this->load->library('form_validation');
		$exception_uris = array(
			'client/client/login', 
			'client/client/logout'
		);
		if (in_array(uri_string(), $exception_uris) == FALSE) {
			if ($this->aaa->loggedin() == FALSE) {
				redirect('client/client/login');
			}
		}	
	}
}