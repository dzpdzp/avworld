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
//        echo "<pre>";
//        var_dump($data);
//        exit;
        $this->lang->load('web', 'zh');
        $this->load->view('common/user_head');
        $this->load->view('page/news',$data);
        $this->load->view('common/user_foot');
    }
    public function detail($id = '') {
        $id = empty($id)?$this->getval('id'):$id;
        $where = array(
            'id' => $id
        );
        $this->load->model('Img_model','img');
        // 根据条件分页查询形状信息
        $new_list = $this->img->search_news($where);
        $new_img_list = $this->img->get_news_img_by_news_id($id);
        // 需要传递给视图的参数
        $data['new_list'] = $new_list;
        $data['new_img_list'] = $new_img_list;
        $this->lang->load('web', 'zh');
        $this->load->view('common/user_head');
        $this->load->view('page/news_detail',$data);
        $this->load->view('common/user_foot');
    }
}