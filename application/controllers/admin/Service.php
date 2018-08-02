<?php

/**
 * 新闻管理
 *
 * @author dingding
 */
class Service extends MY_Controller {

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
        $this->head_data['title'] = '服务领域';
        $data = array();
        $service_type = $this->img->search_service_type(array());
        $data['service_type_list'] = $service_type;
        
        if ($this->postval('submit_flag') ) {
            $config['upload_path']      = PROJPATH.'/resource/service/';
            $config['allowed_types']    = 'gif|jpg|png';
//            $config['max_size']     = 2048;
//            $config['max_width']        = 1024;
//            $config['max_height']       = 768;
            $this->load->library('upload', $config);
            foreach ($_FILES as $key => $value) {
                if(!empty($value['name'])){
                    if ( ! $this->upload->do_upload($key)){
                        $data['error']  .= empty($data['error'])? $this->upload->display_errors():','.$this->upload->display_errors();
                    } else {
                        $data['upload_data'][]  =  $this->upload->data();
                    }
                }
            }
            //定义 img路径
            $img_src='';
            foreach ($data['upload_data'] as $key => $value) {
               $img_src .= 'resource/news/'.$value['file_name'].',';
            }
            $insert = array(
                'title'=> $this->postval('title'),
                'description'=> $this->postval('description'),
                'imgpath' => substr($img_src,0,-1),
                'creattime'=> date('Y-m-d')
            );
             $this->db->insert('news', $insert);
             header("Location: {$_SERVER['REQUEST_URI']}");
        }
        // 加载视图
        $this->tpl_view('service/list', $data);
    }
}
