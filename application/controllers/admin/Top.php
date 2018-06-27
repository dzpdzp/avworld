<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * **********************************************************************
 */
class Top extends MY_Controller {

    //put your code here
    public function __construct() {
        parent::__construct(TRUE, 1);
    }

    /**
     * 登录网站运营管理后台后显示初始页面
     */
    public function index() {
        $this->load->library('user_agent');
        // 标题
        $this->head_data['title'] = '后台首页';
        $data = array();
        // 加载视图
        $this->tpl_view('top/index', $data);
    }


}
