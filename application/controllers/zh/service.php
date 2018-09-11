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
        $this->load->model('Img_model','img');
        $ex = explode('/', $_SERVER['REQUEST_URI']);
        $type = is_numeric($ex[count($ex)-1])?$ex[count($ex)-1]:1;
        $service_type = $this->img->search_service_type(array());
        $where = array(
            'service_type' => $type
        );
        $service_list = $this->img->search_service($where);
        $data = array(
            'type' => $type,
            'service_type' => $service_type,
            'service_list' => $service_list
        );
        $this->lang->load('web', 'zh');
        $this->load->view('common/user_head');
        $this->load->view('page/service',$data);
        $this->load->view('common/user_foot');
    }
    public function detail() {
        $serviceid = $_GET['serviceid'];
        $this->load->model('Img_model','img');
        $service_detail = $this->img->search_service(array('service_id'=>$serviceid))[0];
        $data = array(
            'service_detail' =>$service_detail
        );
        $this->load->library('user_agent');
        $this->lang->load('web', 'zh');
        $this->load->view('common/user_head');
        $this->load->view('page/service_detail',$data);
        $this->load->view('common/user_foot');
        
    }
}