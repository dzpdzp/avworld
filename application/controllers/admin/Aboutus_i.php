<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of aboutus_i
 *
 * @author dingding
 */
class Aboutus_i extends MY_Controller {

    //put your code here
    public function __construct() {
        parent::__construct(TRUE, 1);
    }

    public function index() {
        $this->load->library('user_agent');
        // 标题
        $this->head_data['title'] = '关于我们';
        $img_model = $this->load->model('Img_model');
        $rs = $this->Img_model->get_aboutus_info();
        $data = array(
            'data' => $rs
        );
        // 加载视图
        $this->tpl_view('aboutus_i', $data);
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
