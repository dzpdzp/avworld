<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct(FALSE);
    }
	public function index()
	{   
            $this->load->model('img_model');
            
            
            $this->load->library('user_agent');
            $this->lang->load('web', 'zh');
            $this->load->view('common/user_head');
            $this->load->view('page/index');
            $this->load->view('common/user_foot');
	}
}
