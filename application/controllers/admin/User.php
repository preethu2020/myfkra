<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
//include_once(APPPATH.'libraries\Admin_Controller.php');
class User extends Admin_Controller{
	function __construct (){
		parent::__construct();
	}

	function index (){

		if($this->aaa->loggedin()) redirect('admin/dashboard');
		else  redirect('admin/user/login');
	}


	function profile(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|min_length[5]|matches[repassword]');
		$this->form_validation->set_rules('repassword', 'Re-typed Password', 'trim|min_length[5]');
		
		$id = $this->session->userdata('id');
		$user = $this->aaa->getUser($id);
		$this->data['id'] = $user->id;
		$this->data['username'] = $user->username;
		$this->data['name'] = $user->name;
		$this->data['email'] = $user->email;
		$this->data['password'] = '';
		$this->data['repassword'] = '';
		if($this->input->post('username')) $this->data['username'] = $this->input->post('username');
		if($this->input->post('email')) $this->data['email'] = $this->input->post('email');
		if($this->input->post('name')) $this->data['name'] = $this->input->post('name');
		if($this->input->post('password')) $this->data['password'] = $this->input->post('password');
		if($this->input->post('repassword')) $this->data['repassword'] = $this->input->post('repassword');
		
		if ($this->form_validation->run() == TRUE) {			
			$username = $this->input->post('username');
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			if($password)
				$data = array('username'=>$username, 'name'=>$name, 'email'=>$email, 'password'=>$this->aaa->hash($password));
			else
				$data = array('username'=>$username, 'name'=>$name, 'email'=>$email);
			$this->db->where('id',$id);
			$this->db->update('users_cms',$data);
			$this->session->set_flashdata('message','Profile Updated..');
			redirect('admin/user/profile');
		}
		$this->data['subview'] = 'admin/user/profile';
		$this->load->view('admin/_layout_main', $this->data);
	}


	public function login (){

	$dashboard = 'admin/dashboard';
		if($this->aaa->loggedin()) redirect($dashboard);
		$this->data['message']='';
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
	
	
		
		if ($this->form_validation->run() == TRUE) {
	
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			//echo $this->aaa->login($username,$password);
			if ($this->aaa->login($username,$password)) {
				redirect($dashboard);
		
			}else {
				
				$this->data['message']='That email/password combination does not exist';
			}
		}
		$this->load->view('admin/user/login', $this->data);
	}

	public function logout (){
		$this->aaa->logout();
		redirect('admin/user/login');
	}
}