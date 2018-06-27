<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 联系我们
 * **********************************************************************
 */
class Contact extends MY_Controller {

    //put your code here
    public function __construct() {
        parent::__construct(false);
    }

    /**
     * 
     */
    public function index() {
        // 标题
        $this->head_data['title'] = '联系我们';
        $data = array();
        $this->lang->load('web', 'zh');
        // 加载视图
        $this->load->view('common/user_head');
        $this->load->view('page/contact',$data);
        $this->load->view('common/user_foot');
    }


}
