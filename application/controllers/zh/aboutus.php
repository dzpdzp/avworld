<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct(FALSE);
    }

    public function index() {
        $this->load->library('user_agent');
        $this->lang->load('web', 'zh');
        
        $img_model =  $this->load->model('Img_model');
        $rs = $this->Img_model->get_aboutus_info();
        $data = array(
            'data' => $rs
        );
        
        
        $this->load->view('common/user_head');
        $this->load->view('page/aboutus',$data);
        $this->load->view('common/user_foot');
    }

}
