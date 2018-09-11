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
        $service_list = $this->img->search_service();
        $data['service_list'] = $service_list;
        $data['service_type_list'] = $service_type;
        if ($this->postval('submit_flag') ) {
            
            $config['image_library'] = 'gd2';
            $config['source_image'] = '/path/to/image/mypic.jpg';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width']     = 75;
            $config['height']   = 50;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            
            $config['upload_path']      = PROJPATH.'/resource/service/';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['max_size']     = 2048;
            $config['max_width']        = 1024;
            $config['max_height']       = 768;
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('userfile')){
                $data['error']  = $this->upload->display_errors();
            } else {
                $data['upload_data']  =  $this->upload->data();
                $insert = array(
                    'service_type'=> $this->postval('service_type'),
                    'service_title'=> $this->postval('service_title'),
                    'service_des'=> $this->postval('description'),
                    'service_img' => 'resource/service/'.$data['upload_data']['file_name'],
                );
                $this->db->insert('service', $insert);
                header("Location: {$_SERVER['REQUEST_URI']}");
            }
        }
        
        // 加载视图
        $this->tpl_view('service/list', $data);
    }
}
