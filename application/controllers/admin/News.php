<?php

/**
 * 新闻管理
 *
 * @author dingding
 */
class News extends MY_Controller {

    //put your code here
    public function __construct() {
        parent::__construct(TRUE, 1);
    }

    public function index($offset = '0') {
        $this->load->library('user_agent');
        // 加载分页类
        $this->load->library('pagination');
        $this->load->model('Img_model','img');
        // 标题
        $this->head_data['title'] = '新闻动态';
        $data = array();
        if ($this->postval('submit_flag') ) {
            $config['upload_path']      = PROJPATH.'/resource/news/';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['max_size']     = 2048;
//            $config['max_width']        = 1024;
//            $config['max_height']       = 768;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('userfile'))
            {
                $data['error']  = $this->upload->display_errors();
            }
            else
            {
                $data['upload_data']  =  $this->upload->data();
                $insert = array(
                    'title'=> $this->postval('title'),
                    'description'=> $this->postval('description'),
                    'imgpath' => 'resource/news/'.$data['upload_data']['file_name']
                );
                 $this->db->insert('news', $insert);
                 header("Location: {$_SERVER['REQUEST_URI']}");
            }
        }
        // 根据条件分页查询形状信息
        $new_list = $this->img->search_news();
        // 需要传递给视图的参数
        $data['new_list'] = $new_list;
        // 加载视图
        $this->tpl_view('news/list', $data);
    }
}
