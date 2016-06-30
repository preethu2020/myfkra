<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends Admin_Controller{

	public function __construct (){
		parent::__construct();
	}

	public function index (){
		$this->data['blogs'] = $this->aaa->getBlogs();
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['subview'] = 'admin/blog/index';
		$this->load->view('admin/_layout_main', $this->data);
	}


	function newBlog(){
		
		$this->form_validation->set_rules('title', 'Title', 'trim');
		$this->form_validation->set_rules('desc', 'Description', 'trim');
		$this->form_validation->set_rules('ardesc', 'Description', 'trim');
		$this->form_validation->set_rules('publishedby', 'Description', 'trim');

		

		
		if ($this->form_validation->run() == TRUE) {			
			$data['title'] = $this->input->post('title');
			$data['desc'] = $this->input->post('desc');	
			$data['ardesc'] = $this->input->post('ardesc');	
			$data['publishedby'] = $this->input->post('publishedby');		

			$config['upload_path'] = './uploads/blog/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['max_size']	= '5120';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);

						if ($this->upload->do_upload('mainimage'))
					{ 
					$data1 = $this->upload->data();	
				}
				if($data1)
					{ 
						$data['mainimage'] = $data1['file_name'];
					}
						if ($this->upload->do_upload('smallimage'))
					{ 
						$data2 = $this->upload->data();	
					}
				if($data2)
					{ 
						$data['smallimage'] = $data2['file_name'];
					}

						



				
				$data['created']=date('Y-m-d h:i:s');
				$data['modified']=date('Y-m-d h:i:s');
				$this->db->insert('blog',$data);
				//echo $this->db->insert_id();
				//echo $this->db->last_query();
				$this->session->set_flashdata('message','Blog Created Successfully');
				redirect(site_url('admin/Blog'));
		}		
		
		$this->data['subview'] = 'admin/blog/new';
		$this->load->view('admin/_layout_main', $this->data);
	}
	
	
	function edit($id){
		
		$this->data['blog'] = $this->aaa->getSingleBlog($id);
	
	$this->form_validation->set_rules('title', 'Title', 'trim');
	$this->form_validation->set_rules('desc', 'Description', 'trim');
	$this->form_validation->set_rules('ardesc', 'Description', 'trim');
	$this->form_validation->set_rules('publishedby', 'Description', 'trim');
		
		
			
	
		if ($this->form_validation->run() == TRUE) {			
			$data['title'] = $this->input->post('title');
			$data['desc'] = $this->input->post('desc');	
			$data['ardesc'] = $this->input->post('ardesc');	
			$data['publishedby'] = $this->input->post('publishedby');	

			$config['upload_path'] = './uploads/blog/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['max_size']	= '5120';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);

						if ($this->upload->do_upload('mainimage'))
					{ 
					$data1 = $this->upload->data();	
				}
				if($data1)
					{ 
						$data['mainimage'] = $data1['file_name'];
					}
						if ($this->upload->do_upload('smallimage'))
					{ 
						$data2 = $this->upload->data();	
					}
				if($data2)
					{ 
						$data['smallimage'] = $data2['file_name'];
					}

						

				//$data['created']=date('Y-m-d h:i:s');
				$data['modified']=date('Y-m-d h:i:s');
				$this->db->where('id',$id);
				$this->db->update('blog',$data);
				$this->session->set_flashdata('message','Blog Updated Successfully');
				redirect(site_url('admin/Blog'));
		}		
		
		$this->data['subview'] = 'admin/blog/edit';
		$this->load->view('admin/_layout_main', $this->data);
	}


	

	public function delete ($id){
		$this->aaa->deleteBlog($id);
		redirect('admin/Blog');
	}

}