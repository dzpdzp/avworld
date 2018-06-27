<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 功能大分类　　：底层
 * 功能名　　　　：控制器基类
 * 功能ＩＤ　　　：
 * 功能概要　　　：控制器相关的共同方法
 */
class MY_Controller extends CI_Controller {
     

     
    // 共通头部所需数据
    protected $head_data = array(
        'css' => array(), // 特殊的css
        'title' => ''           // 页面标题
    );
    
    // 用户类型
    protected $user_types = array(
        'admin' => 1,
        'user'  => 3,
    );
    // user画面共通数据
    protected $user_common_data = array();
    
    
    public $base_url = BASE_URL;

    /**
     * 基类构造方法
     * @param type $need_login 是否需要登录
     * @param type $user_type 限定用户类型 0:不限定　1:サイト運用者向け　2:商品提供会社向け 3:顧客
     * @param type $auth 限定权限 1:スーパーユーザ　2:一般ユーザ
     */
    public function __construct($need_login = TRUE, $user_type = 0, $auth = '') {
        parent::__construct();
        $this->load->helper('url');
        // 需要登录 且 登录用户信息为空
        if ($need_login && is_null($this->session->login_user_info)) {
            // 重定向至模块登录页
            redirect(base_url('login'));
        }
        // 需要登录 且 登录用户信息不为空
        elseif ($need_login && !is_null($this->session->login_user_info)) {
            // 登录用户类型
            $login_user_type = $this->session->login_user_info['usertype'];
            // 需要限定用户类型 且 用户类型不符
            if ($user_type != 0 && $login_user_type != $user_type) {
                $redirect_url = base_url('login');
                // 非ajax请求
                if (!$this->input->is_ajax_request()) {
                    // 重定向至相应用户的登录页面
                    redirect($redirect_url);
                }
                // ajax请求
                else {
                    // 输出给页面
                    echo json_encode(array('usertype_error' => TRUE, 'redirect_url' => $redirect_url));
                    exit;
                }
            }
        }

        $this->load->library('user_agent');
        // 加载共通类库
//        $this->load->library('Common_lib');
          
    }

    /**
     * 按模板加载视图
     * @param type $view 视图名称
     * @param type $data 需要传递给视图的数据
     * @param type $module 模块名称（admin, supplier, user）
     * @param type $need_body 共通body的必要性
     */
    public function tpl_view($view, $data = array(), $module = 'admin', $need_body = TRUE) {
        // 按浏览器的【后退】按钮后，不会重新访问
        header('Cache-control: private, must-revalidate');
        // 加载共通头部
        $this->load->view('common/public_head');
        $this->load->library('user_agent');
        // 判断是否是手机登录
        if ($this->agent->is_mobile()) {
            // 共通body必要时
            if ($need_body) {
                // 加载共通body
                $this->load->view('mobile/common/public_body', $data);
            }
        } else {
            // 共通body必要时
            if ($need_body) {
                // 加载共通body
                $this->load->view('common/public_body', $data);
            }
        }
        // 加载主视图
        $this->load->view($module . '/' . $view, $data);
    }
    
    /**
     * 显示站点关闭提示信息
     */
    private function show_site_close_view() {
        // 设置标题
        $this->head_data['title'] = $this->lang->line('TITLE_USER_COMMON');
        // 导入头部所需变量
        extract($this->head_data);
        // 加载头部
        include(APPPATH."views/common/public_head.php");
        // 加载视图
        include(APPPATH."views/common/site_close.php");
    }

    /**
     * 按模板加载视图
     * @param type $view 视图名称
     * @param type $data 需要传递给视图的数据
     * @param type $module 模块名称（admin, supplier, user）
     * @param type $need_body 共通body的必要性
     */
    public function tpl_view_user($view, $data = array(), $module = 'user') {
        // 按浏览器的【后退】按钮后，不会重新访问
        header('Cache-control: private, must-revalidate');
        $this->load->library('user_agent');
        // 判断是否是手机登录
        if ($this->agent->is_mobile()) {
            log_message('info', 'is mobile');
            
            // 加载共通头部CSS
            $this->load->view('common/user_head', $this->head_data);
            // 加载共通头部
            $this->load->view('common/user_title',$data);
            // 加载共通Menu
            $this->load->view('common/user_menu', $data);
            // csrf安全信息
            $data['csrf'] = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
            );
            // 加载主视图
            $this->load->view($module . '/' . $view, $data);
            // 判断属性是否存在，并且点击menu为true
            if (isset($data['is_menu_click']) && $data['is_menu_click'] == 'true') {
                // 加载共通广告部分
                //$this->load->view('common/user_advert', $this->user_common_data);
            }
            // 加载共通foot
            $this->load->view('common/user_foot', $data);
        } else {
            
            $this->get_all_advert($data);
            
            log_message('info', 'is pc');
            // 加载共通头部CSS
            $this->load->view('common/user_head', $this->head_data);
            // 加载共通头部
            $this->load->view('common/user_title',$data);
            // 加载共通Menu
            $this->load->view('common/user_menu', $data);
            // csrf安全信息
            $data['csrf'] = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
            );
            // 加载主视图
            $this->load->view($module . '/' . $view, $data);
            // 判断属性是否存在，并且点击menu为true
            if (isset($data['is_menu_click']) && $data['is_menu_click'] == 'true') {
                // 加载共通广告部分
                $this->load->view('common/user_advert', $this->user_common_data);
            }
            // 加载共通foot
            $this->load->view('common/user_foot', $data);
        }
           
    }
     /**
     * 按模板加载视图
     * @param type $view 视图名称
     * @param type $data 需要传递给视图的数据
     * @param type $module 模块名称（admin, supplier, user）
     * @param type $need_body 共通body的必要性
     */
    public function tpl_view_help($view, $data = array(), $module = 'user') {
        $this->load->library('user_agent');
        // 判断是否是手机登录
        if ($this->agent->is_mobile()) {
            log_message('info', 'is mobile');
            // 加载共通头部CSS
            $this->load->view('common/user_head', $this->head_data);
            // 加载共通头部
            $this->load->view('common/user_title');
            // csrf安全信息
            $data['csrf'] = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
            );
            // 加载主视图
            $this->load->view($module . '/' . $view, $data);
            // 加载共通foot
            //$this->load->view('common/user_foot', $data);
        } else {
            log_message('info', 'is pc');
            // 加载共通头部CSS
            $this->load->view('common/user_head', $this->head_data);
            // 加载共通头部
            $this->load->view('common/user_title');
            // csrf安全信息
            $data['csrf'] = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
            );
            // 加载主视图
            $this->load->view($module . '/' . $view, $data);
            // 加载共通foot
            $this->load->view('common/user_foot', $data);
        }
    }
    
    /**
     * 初始化user画面共通数据(New Item　入荷情報)
     */
    public function init_user_common_data() {
        // 加载模型
        $this->load->model('user/product_information/User_ProductInformation','product');
        
        // 查询入荷情報信息
        $this->productcache_lib->init('common/', 'product_info.json');
        if (!$this->productcache_lib->exist()) {
            $product_info = $this->product->search_product_info();
            $this->productcache_lib->set($product_info);
        } else {
            $product_info = $this->productcache_lib->get();
        }
        
        // 期間限定商品信息
        $this->productcache_lib->init('common/', 'limiteproduct_info.json');
        if (!$this->productcache_lib->exist()) {
            $limiteproduct_info = $this->product->search_limite_product_info();
            $this->productcache_lib->set($limiteproduct_info);
        } else {
            $limiteproduct_info = $this->productcache_lib->get();
        }
        
        // 获取　お知らせ消息
        $message_info = $this->product->search_message_info();
        // 传递参数给视图
        $this->user_common_data = array(
            'product_info'          =>$product_info,                                // 入荷商品信息
            'product_status'        =>$this->common_lib->get_choices_list('005'),   // 加载商品状态
            'message_info'          =>$message_info,                                // お知らせ消息
            'limiteproduct_info'    =>$limiteproduct_info,                          // 期間限定商品
        );
    }

    /**
     * 获取post数据
     * @param type $key post数组中的键
     * @param type $trim 是否去掉两边空格
     * @param type $xss 是否进行xss过滤
     * @return type
     */
    public function postval($key = NULL, $trim = TRUE, $xss = TRUE) {
        $post = $this->input->post($key, $xss);
        return $trim ? $this->_trim($post) : $post;
    }

    /**
     * 获取get数据
     * @param type $key get数组中的键
     * @param type $trim 是否去掉两边空格
     * @param type $xss 是否进行xss过滤
     * @return type
     */
    public function getval($key = NULL, $trim = TRUE, $xss = TRUE) {
        $get = $this->input->get($key, $xss);
        return $trim ? $this->_trim($get) : $get;
    }

    /**
     * 去除字符串两边空格
     * @param type $data 数据
     * @return type 去除空格后的数据
     */
    private function _trim($data) {
        // 数据类型为数组
        if (is_array($data)) {
            // 循环数组
            foreach ($data as $key => $value) {
                // 递归调用此方法
                $data[$key] = $this->_trim($value);
            }
            // 返回数据
            return $data;
        }
        // 数据类型为字符串
        if (is_string($data)) {
            // 返回去除空格后的数据
            return trim($data);
        }
        // 其他类型的数据直接返回
        return $data;
    }

    /**
     * 郵便番号チェック
     * @param type $zip_code
     * @return boolean
     */
    function zip_code_check($zip_code) {
        if (trim($zip_code) === '') {
            return TRUE;
        }
        
        $countryname = $this->postval('countryname');
        if(!empty($countryname)){
            if($countryname != lang('COMMON_JP')){
                $preg_str = '/^[0-9]*$/';
            }else{
                $preg_str = '/^\d{3}-\d{4}$|^\d{7}$/';
            }
        }else{
            $preg_str = '/^\d{3}-\d{4}$|^\d{7}$/';
        }
        if (preg_match($preg_str, $zip_code) === 1) {
            return TRUE;
        } else {
            $this->form_validation->set_message('zip_code_check', str_replace('{0}', '{field}', show_message('MSG_FORMAT_WRONG')));
            return FALSE;
        }
    }

    /**
     * 電話番号チェック
     * @param type $phone_num
     * @return boolean
     */
    function phone_num_check($phone_num) {
        if (trim($phone_num) === '') {
            return TRUE;
        }
        $preg_str = '/^\d*$/';
        if (preg_match($preg_str, str_replace(array('-', '(', ')'), '', $phone_num)) === 1) {
            return TRUE;
        } else {
            $this->form_validation->set_message('phone_num_check', str_replace('{0}', '{field}', show_message('MSG_FORMAT_WRONG')));
            return FALSE;
        }
    }
    
    /**
     *  密码验证 至少8位以上，数字字母特殊字符
     */
    public function password_check($str){
        // 验证密码用的正则
        $preg_str = "/^(?=^.{".PW_MIN_LENGTH.",".PW_MAX_LENGTH."}$)(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?!.*\n).*$/";
        // 密码匹配
        if(preg_match($preg_str, $str) === 1) {
            return TRUE;
        } else {
            $this->form_validation->set_message('password_check', show_message('MSG_PASSWORD_CHECK'));
            return FALSE;
        }
    }
    
    /**
    *添加广告
    */
    function get_all_advert(&$data){
        $TOP_DIR = 'top';
        $data['advert_al_info'] = $this->get_advert(ADVERT_AL_DIR.$TOP_DIR);
        $data['advert_ar_info'] = $this->get_advert(ADVERT_AR_DIR.$TOP_DIR);
        $data['advert_bt_info'] = $this->get_advert(ADVERT_BT_DIR.$TOP_DIR);
        $data['advert_bb_info'] = $this->get_advert(ADVERT_BB_DIR.$TOP_DIR);
        if (isset($data['advert_materialcd'])) {
           
            $res = $this->get_advert(ADVERT_AL_DIR, $data);
            if($res != null){
                $data['advert_al_info'] = $res;
            }
            $res = $this->get_advert(ADVERT_AR_DIR, $data);
            if($res != null){
                $data['advert_ar_info'] = $res;
            }
            $res = $this->get_advert(ADVERT_BT_DIR, $data);
            if($res != null){
                $data['advert_bt_info'] = $res;
            }
            $res = $this->get_advert(ADVERT_BB_DIR, $data);
            if($res != null){
                $data['advert_bb_info'] = $res;
            }
        }

    }
    /**
    *扫描广告目录
    */
    function get_advert($advert_dir, $data = array()){
        if (isset($data['advert_materialcd'])) {
            $materialcd_dir = $data['advert_materialcd'];
        } else {
            $materialcd_dir = '';
        }
        $c_advert_dir = $advert_dir.iconv('UTF-8', 'SHIFT_JIS//IGNORE', $materialcd_dir)."/";
        if (!file_exists($c_advert_dir)) {
            mkdir($c_advert_dir, NULL, TRUE);
        }
        $files1 = scandir($c_advert_dir,1);
        //print_r($files1);
        $result = array();
        foreach ($files1 as $key => $value) {
           if ($value <> "." && $value <> ".." && $key < 7 && in_array(substr($value, strrpos($value, '.')), explode('|', LOAD_ADVERT_TYPE))){
               $result[] = $c_advert_dir.$value;
           }
        }
        return $result;
    }
    
    /**
     * 初始化页面头部信息
     */
    private function init_head_info() {
        // 页面head 头部加入提高搜索引擎指数link_canonical
        $this->head_data['link_canonical'] = rtrim(base_url(), '/') . $this->input->server("REQUEST_URI");
        // 固定Keywords
        $keywords =  $this->lang->line('TITLE_USER_KEYWORDS_FIXED');
        // uri字符串
        $uri_string = $this->input->server('REQUEST_URI');
        // 根据uri字符串内容更新页面标题、描述、关键字
        if ($uri_string === '/') {
            // TOPページ
            $this->head_data['title'] = $this->lang->line('TITLE_USER_COMMON');
            $this->head_data['description'] = $this->lang->line('TITLE_TOP_DESCRIPTION');
            $this->head_data['keywords'] = $keywords.$this->lang->line('TITLE_TOP_KEYWORDS');
        } elseif ($uri_string === '/user/cart/cart' ) {
            // CART
            $this->head_data['title'] = $this->lang->line('TITLE_CART_COMMON');
            $this->head_data['description'] = $this->lang->line('TITLE_CART_DESCRIPTION');
            $this->head_data['keywords'] = $keywords.$this->lang->line('TITLE_CART_KEYWORDS');

        }elseif ( $uri_string === '/user/cart/mitumori') {
            // MITUMORI
            $this->head_data['title'] = $this->lang->line('TITLE_MITUMORI_COMMON');
            $this->head_data['description'] = $this->lang->line('TITLE_MITUMORI_DESCRIPTION');
            $this->head_data['keywords'] = $keywords.$this->lang->line('TITLE_MITUMORI_KEYWORDS');
            
        }elseif ($uri_string === '/user/cart/pay' ) {
            // PAY
            $this->head_data['title'] = $this->lang->line('TITLE_CART_PAY_COMMON');
            $this->head_data['description'] = $this->lang->line('TITLE_CART_PAY_DESCRIPTION');
            $this->head_data['keywords'] = $keywords.$this->lang->line('TITLE_CART_PAY_KEYWORDS');

        }elseif ($uri_string === '/user/cart/confirm' ) {
            // PAY CONFIRM
            $this->head_data['title'] = $this->lang->line('TITLE_CART_CONFIRM_COMMON');
            $this->head_data['description'] = $this->lang->line('TITLE_CART_CONFIRM_DESCRIPTION');
            $this->head_data['keywords'] = $keywords.$this->lang->line('TITLE_CART_CONFIRM_KEYWORDS');

        }elseif ($uri_string === '/user/index') {
            // 標準寸法
            $this->head_data['title'] = $this->lang->line('TITLE_SPECS_COMMON');
            $this->head_data['description'] = $this->lang->line('TITLE_SPECS_DESCRIPTION');
            $this->head_data['keywords'] = $keywords.$this->lang->line('TITLE_SPECS_KEYWORDS');
        } elseif ($uri_string === '/user/cut/cut') {
            // 寸切り販売
            $this->head_data['title'] = $this->lang->line('TITLE_CUT_COMMON');
            $this->head_data['description'] = $this->lang->line('TITLE_CUT_DESCRIPTION');
            $this->head_data['keywords'] = $keywords.$this->lang->line('TITLE_CUT_KEYWORDS');
        } elseif ($uri_string === '/user/custom/custom') {
            // カスタム
            $this->head_data['title'] = $this->lang->line('TITLE_CUSTOM_COMMON');
            $this->head_data['description'] = $this->lang->line('TITLE_CUSTOM_DESCRIPTION');
            $this->head_data['keywords'] = $keywords.$this->lang->line('TITLE_CUSTOM_KEYWORDS');
        } elseif ($uri_string === '/user/weight/weight') {
            // 重量計算
            $this->head_data['title'] = $this->lang->line('TITLE_WEIGHT_COMMON');
            $this->head_data['description'] = $this->lang->line('TITLE_WEIGHT_DESCRIPTION');
            $this->head_data['keywords'] = $keywords.$this->lang->line('TITLE_WEIGHT_KEYWORDS');
        } elseif ($uri_string === '/user/more/Limiteproduct') {
            // 期間限定商品
            $this->head_data['title'] = $this->lang->line('TITLE_LIMITEPRODUCT_COMMON');
            $this->head_data['description'] = $this->lang->line('TITLE_LIMITEPRODUCT_DESCRIPTION');
            $this->head_data['keywords'] = $keywords.$this->lang->line('TITLE_LIMITEPRODUCT_KEYWORDS');
        } elseif ($uri_string === '/user/more/ProductInformationMore') {
            // 入荷情報
            $this->head_data['title'] = $this->lang->line('TITLE_NEWS_COMMON');
            $this->head_data['description'] = $this->lang->line('TITLE_NEWS_DESCRIPTION');
            $this->head_data['keywords'] = $keywords.$this->lang->line('TITLE_NEWS_KEYWORDS');
        /*dzp 160512 strat*/
        } elseif(strpos($uri_string,'/user/specs') !== FALSE){
            // 標準寸法 商品一覧
            if($uri_string === '/user/specs/goodslist'){
                $this->head_data['title'] = $this->lang->line('TITLE_SPECS_GOODLIST_COMMON');
                $this->head_data['description'] = $this->lang->line('TITLE_SPECS_GOODLIST_DESCRITION_AFTER');
                $this->head_data['keywords'] = $this->lang->line('TITLE_SPECS_GOODLIST_KEYWORDS');
            } else {
                $this->head_data['title'] = $this->lang->line('TITLE_SPECS_GOODSDETAIL_COMMON');
                $this->head_data['description'] = $this->lang->line('TITLE_SPECS_GOODSDETAIL_DESCRIPTION_AFTER');
                $this->head_data['keywords'] = $this->lang->line('TITLE_SPECS_GOODSDETAIL_KEYWORDS');
            }
        } elseif($uri_string==='/buyer/entry/form'){
            // 搜索引擎 追加页面title.description.关键字 
            $this->head_data['title'] = $this->lang->line('TITLE_BUYER_ENTRY');
            $this->head_data['description'] = $this->lang->line('DESCRIPTION_BUYER').$this->lang->line('TITLE_TOP_DESCRIPTION');
            $this->head_data['keywords'] = $this->lang->line('TITLE_USER_KEYWORDS_FIXED').$this->lang->line('KEYWORD_BUYER');
        } elseif($uri_string==='/supplier/entry/form'){
            // 搜索引擎 追加页面title.description.关键字 
            $this->head_data['title'] = $this->lang->line('TITLE_SUPPLIER_ENTRY');
            $this->head_data['description'] = $this->lang->line('DESCRIPTION_SUPPLIER').$this->lang->line('TITLE_TOP_DESCRIPTION');
            $this->head_data['keywords'] = $this->lang->line('TITLE_USER_KEYWORDS_FIXED').$this->lang->line('KEYWORD_SUPPLIER');
        } elseif ($uri_string === '/user/more/SearchMore') {
            // 搜索栏搜索页面
            $this->head_data['title'] = $this->lang->line('TITLE_SREACH_COMMON');
            $this->head_data['description'] = $this->lang->line('DESCRIPTION_SREACH');
            $this->head_data['keywords'] = $keywords.$this->lang->line('KEYWORD_SREACH');
        } elseif ($uri_string === '/user/relatedgoods/relatedgoods') {

            //Kanren商品一覧
            if($uri_string === '/user/relatedgoods/relatedgoodslist'){
	            $this->head_data['title'] = $this->lang->line('TITLE_KANREN_COMMON');
	            $this->head_data['description'] = $this->lang->line('TITLE_KANREN_DESCRIPTION');
	            $this->head_data['keywords'] = $keywords.$this->lang->line('TITLE_KANREN_KEYWORDS');
            } else {
	            $this->head_data['title'] = $this->lang->line('TITLE_KANRENDETAIL_COMMON');
	            $this->head_data['description'] = $this->lang->line('TITLE_KANRENDETAIL_DESCRIPTION');
	            $this->head_data['keywords'] = $keywords.$this->lang->line('TITLE_KANRENDETAIL_KEYWORDS');
            }
            
        } elseif ($uri_string === '/user/more/news') {
            // news页面
            $this->head_data['title'] = $this->lang->line('TITLE_MORENEWS_COMMON');
            $this->head_data['description'] = $this->lang->line('TITLE_MORENEWS_DESCRIPTION');
            $this->head_data['keywords'] = $keywords.$this->lang->line('TITLE_MORENEWS_KEYWORDS');
        /*dzp 160512 end*/
        } else {
            // 其他页面
            $this->head_data['title'] = $this->lang->line('TITLE_USER_COMMON');
            $this->head_data['description'] = '';
            $this->head_data['keywords'] = '';
        }
    }
    
    /**
     * 同message_helper中的show_message
     *   script用
     * @param type $msg_code
     * @param type $param_str
     * @param type $is_lang
     * @return type
     */
    public function show_message($msg_code, $param_str = FALSE, $is_lang = TRUE) {
        return show_message($msg_code, $param_str, $is_lang);
    }
    
    /**
     * 获取常量
     * @param type $name
     * @return type
     */
    public function constant($name) {
        return constant($name);
    }
    
    /**
     * 生成js文件
     */
    private function create_scripts() {
        // 加载脚本类
        $this->load->library('Script_lib');
        // js列表
        $script_list = array(
            'user_common',
            'company_info',
            'specs',
            'goods_list',
            'goods_other_detail',
            'goods_detail',
            'productqa_bigimg',
            'fare_setting',
            'cutnum',
            'cut',
            'cut_relate_nav',
            'relatedgoods',
            'relatedgoods_list',
            'relatedgoods_other_detail',
            'cart',
            'refresh_cart_num',
            'mitumori',
            'pay',
            'cut_min',
            'advert_category_list',
            'welcome',
            'custom',
            'goods_item',
            'relatedgoods_item',
            'cut_item',
            'lang_msg_js'
	    );

        // 检查脚本是否存在
        $this->script_lib->check_scripts($script_list);
    }
    
    /**
     * 刷新期間限定商品缓存
     */
    protected function refresh_limit_product_cache() {
        // 加载模型
        $this->load->model('user/product_information/User_ProductInformation','product');
        // 初始化缓存参数
        $this->productcache_lib->init('common/', 'limiteproduct_info.json');
        // 清空期間限定商品缓存
        $this->productcache_lib->delete();
        // 查询期間限定商品信息
        $limiteproduct_info = $this->product->search_limite_product_info();
        // 生成缓存
        $this->productcache_lib->set($limiteproduct_info);
    }
}
