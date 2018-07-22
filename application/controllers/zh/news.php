<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class news extends MY_Controller{
    //put your code here
    public function __construct() {
        parent::__construct(FALSE);
        $this->load->library('user_agent');
    }
    public function index()
    {   
        $this->load->model('Img_model','img');
        // 根据条件分页查询形状信息
        $new_list = $this->img->search_news();
        // 需要传递给视图的参数
        $data['new_list'] = $new_list;
        $this->lang->load('web', 'zh');
        $this->load->view('common/user_head');
        $this->load->view('page/news',$data);
        $this->load->view('common/user_foot');
    }
    public function detail() {
        $where = array(
            'id' => $_GET['id']
        );
        $this->load->model('Img_model','img');
        // 根据条件分页查询形状信息
        $new_list = $this->img->search_news($where);
        // 需要传递给视图的参数
        $data['new_list'] = $new_list;
        $this->lang->load('web', 'zh');
        $this->load->view('common/user_head');
        $this->load->view('page/news_detail',$data);
        $this->load->view('common/user_foot');
    }
}