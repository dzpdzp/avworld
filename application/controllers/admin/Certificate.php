<?php

/**
 * 证书管理
 *
 * @author dingding
 */
class Certificate extends MY_Controller {

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
        $this->head_data['title'] = '证书管理一览';
        $data = array();
        if ($this->postval('submit_flag') ) {
            $config['upload_path']      = PROJPATH.'/resource/zhengshu/';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['max_size']     = 2048;
            $config['max_width']        = 1024;
            $config['max_height']       = 768;
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
                    'imgpath' => 'resource/zhengshu/'.$data['upload_data']['file_name']
                );
                 $this->db->insert('certificate', $insert);
            }
        }
        // 根据条件分页查询形状信息
        $certificate_list = $this->img->search_certificate();
        // 需要传递给视图的参数
        $data['certificate_list'] = $certificate_list;
        // 加载视图
        $this->tpl_view('certificate/list', $data);
    }

    public function change() {
        $Img_model = $this->load->model('Img_model');
        $this->load->library('user_agent');
        $this->head_data['title'] = '关于我们';
        if ($this->postval('submit_flag') ) {
            $updata = array(
                'text1' => $this->postval('text1'),
                'text2' => $this->postval('text2'),
            );
            $rs = $this->Img_model->updata_aboutus($updata);
            if($rs){
                 $rs = $this->Img_model->get_aboutus_info();
                $data = array(
                    'data' => $rs,
                    'updata_suc' =>TRUE
                );
                // 加载视图
                $this->tpl_view('aboutus_i', $data);
            }
        } 
    }

    //put your code here
}
