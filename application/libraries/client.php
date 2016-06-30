<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Client extends Client_Controller{
	function __construct (){
		parent::__construct();
	}

	function index (){
		if($this->aaa->loggedin()) redirect('client/dashboard');
		else redirect('client/client/login');
	}

	function profile(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[5]');
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|min_length[5]|matches[repassword]');
		$this->form_validation->set_rules('repassword', 'Re-typed Password', 'trim|min_length[5]');
		
		$id = $this->session->userdata('id');
		$user = $this->aaa->getClient($id);
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
			$this->db->update('clients',$data);
			$this->session->set_flashdata('message','Profile Updated..');
			redirect('client/client/profile');
		}
		$this->data['subview'] = 'client/client/profile';
		$this->load->view('client/_layout_main', $this->data);
	}

	
	function addclient(){
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[5]');
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|matches[repassword]');
		$this->form_validation->set_rules('repassword', 'Re-typed Password', 'trim|required|min_length[5]');
		
		
		$this->data['username'] = '';
		$this->data['name'] = '';
		$this->data['email'] = '';
		$this->data['password'] = '';
		$this->data['repassword'] = '';	
		if ($this->form_validation->run() == TRUE) {			
			$username = $this->input->post('username');
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			//if($password)
				$data = array('username'=>$username, 'name'=>$name, 'email'=>$email, 'password'=>$this->aaa->hash($password));
			//else
			//	$data = array('username'=>$username, 'name'=>$name, 'email'=>$email);
			//$this->db->where('id',$id);
			$this->db->insert('clients',$data);
			$this->session->set_flashdata('message','Profile Created...');
			redirect('client/clientdata');
		}
		$this->data['subview'] = 'client/client/addclient';
		$this->load->view('client/_layout_main', $this->data);
	}

	public function login (){
		$dashboard = 'client/dashboard';
		if($this->aaa->loggedin()) redirect($dashboard);
		$this->data['message']='';
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[5]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
		
		if ($this->form_validation->run()) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if ($this->aaa->loginclient($username,$password)) {
				redirect($dashboard);
			}else {
				$this->data['message']='That email/password combination does not exist';
			}
		}
		$this->load->view('client/client/login', $this->data);
	}
	
	
	public function deleteClient ($id){
		$this->aaa->deleteClients($id);
		redirect('client/clientdata');
	}

	public function logout (){
		$this->aaa->logout();
		redirect('client/client/login');
	}
}