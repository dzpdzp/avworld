<?php

/**
 * 我们的团队
 *
 * @author dingding
 */
class Ours_Team extends MY_Controller {

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
        $this->head_data['title'] = '我们的团队';
        $data = array();
        if ($this->postval('submit_flag') ) {
            $config['upload_path']      = PROJPATH.'resource/oursteam/';
            $config['allowed_types']    = '*';
            $config['file_name']    = 'oursteam_'.time();
            $config['max_size']     = 0;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('userfile'))
            {
                $data['error']  = $this->upload->display_errors();
            }
            else
            {
                $data['upload_data']  =  $this->upload->data();
                $insert = array(
                    'path'=> 'resource/oursteam/',
                    'videoname' => $data['upload_data']['file_name']
                );
                 $this->db->insert('ours_team', $insert);
            }
        }
        // 
        $ourteam_list = $this->img->search_ourteam();
        // 需要传递给视图的参数
        $data['ourteam_list'] = $ourteam_list;
        // 加载视图
        $this->tpl_view('oursteam/list', $data);
    }
}
