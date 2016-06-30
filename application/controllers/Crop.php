<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Crop extends CI_Controller {
    
    var $return_val;
    private $return_jquery = array();
     public function __construct()
    {
        parent::__construct();
        $this->load->model('upload_model');
    } 
    
    function index()
    {
        $this->load->view('upload');
    }
        
    public function file_up()
    {
        if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
        {
            echo $this->upload_model->upload_file();
            //echo $this->_show_message();
        }
        else
        {
            
            echo 'file upload error';
        }
    }
    
    
    function crop_file()
    {
        $ret_arr = array();
        $crop_x = $this->input->post('x');
        $crop_y = $this->input->post('y');
        $crop_w = $this->input->post('w');
        $crop_h = $this->input->post('h');
        
        $img = $this->input->post('file');
        list($width, $height, $type, $attr) = getimagesize('./images/upload/'.$img);
        //$CI->load->library('image_lib');

        $config['image_library'] = 'gd2';
        $config['source_image'] = './images/upload/'.$img;
        $config['x_axis'] = $crop_x;
        $config['y_axis'] = $crop_y;
        $config['maintain_ratio'] = FALSE;
        $config['width'] = $crop_w;
        $config['height'] = $crop_h;
        $this->load->library('image_lib', $config);
        $this->image_lib->initialize($config); 
        if (!$this->image_lib->crop()){
            $ret_arr['status'] = 'error';
            $ret_arr['message'] = $this->image_lib->display_errors();
        }
        else
        {
            $objDateTime = new DateTime('NOW');
            $ret_arr['status'] = 'success';
            $ret_arr['message'] = '<img class="cropImage" alt="Jcrop Example" src="'.base_url().'images/upload/'.$img.'?timestamp='.$objDateTime->format('c').'" >';
        }
        echo json_encode($ret_arr);
    }

}
?>