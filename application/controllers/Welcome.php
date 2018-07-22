<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct(FALSE);
    }
	public function index()
	{   
            $this->load->model('img_model','img');
            
            
            // 根据条件分页查询形状信息
            $new_list = $this->img->search_news(array(),4);
            // 需要传递给视图的参数
            $data['new_list'] = $new_list;
            $this->load->library('user_agent');
            $this->lang->load('web', 'zh');
            $this->load->view('common/user_head');
            $this->load->view('page/index',$data);
            $this->load->view('common/user_foot');
	}
}
