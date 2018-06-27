<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 项目名　　　　：NL-15-069_E-Metails.net
 * 功能大分类　　：共通
 * 功能名　　　　：登录
 * 功能ＩＤ　　　：
 * 功能概要　　　：登录功能
 */
class Login extends MY_Controller{
    //put your code here
    public function __construct() {
        parent::__construct(FALSE);
    }
    
    /**
     * admin端登录入口
     */
    public function index() {
        $this->load->library('user_agent');
        // 页面标题
        $this->head_data['title'] = 'Avworld 后台登录';
        // 加载表单验证类
        $this->load->library('form_validation');
        $account = 'admin';
        $pass = '000000';
        $data = array(
            'login_id' => $this->postval('login_id'),
            'password' => $this->postval('password'),
            'form_vail' => TRUE
        );
        // 提交表单进入方法 且 表单验证成功
        if ($this->postval('submit_flag')) {
            if( $this->postval('login_id') == $account && $this->postval('password')  == $pass){
                // 查询登录用户信息并存储到session中
               $_SESSION['login_user_info']['usertype'] = 1;
                // 跳转至admin端top页
                redirect(base_url('admin/top'));
            } else {
                $data['form_vail'] = false;
            }
        } 
        // 加载视图
        $this->tpl_view('index', $data, 'admin', FALSE);
    }
    
}
