<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class service extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct(FALSE);
    }
    public function index()
    {   
        $this->load->library('user_agent');
        
        $ex = explode('/', $_SERVER['REQUEST_URI']);
        $type = $ex[count($ex)-1];
        $data = array(
            'type' => $type
        );
        $this->lang->load('web', 'zh');
        $this->load->view('common/user_head');
        $this->load->view('page/service',$data);
        $this->load->view('common/user_foot');
    }
    public function detail() {
        $data = array(
        );
        $this->load->library('user_agent');
        $this->lang->load('web', 'zh');
        $this->load->view('common/user_head');
        $this->load->view('page/service_detail',$data);
        $this->load->view('common/user_foot');
        
    }
}