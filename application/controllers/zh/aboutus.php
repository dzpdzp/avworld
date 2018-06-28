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
        $this->load->model('Img_model','img');
        // 根据条件分页查询形状信息
        $certificate_list = $this->img->search_certificate();
        $rs_certificate_list = array();
        // 改造数据
        foreach ($certificate_list as $key => $value) {
            $rs_certificate_list[intval($key/4)][] = $value;
        }
        // 需要传递给视图的参数
        $data['certificate_list'] = $rs_certificate_list;
        
        $this->load->view('common/user_head');
        $this->load->view('page/aboutus',$data);
        $this->load->view('common/user_foot');
    }

}
