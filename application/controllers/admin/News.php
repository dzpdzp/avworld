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
        $this->load->model('Img_model','img');
    }

    public function index($offset = '0') {
        $this->load->library('user_agent');
        // 加载分页类
        $this->load->library('pagination');
        // 标题
        $this->head_data['title'] = '新闻动态';
        $data = array();
        $imgpath = '';
        $videopath = '';
        if ($this->postval('submit_flag') ) {
            foreach ($_FILES as $key => $value) {
                $config['upload_path']      = PROJPATH.'/resource/news/';
                $config['allowed_types']    = '*';
                $config['file_name']    = 'news_'.time();
                $config['max_size']     = 0;
                $this->load->library('upload', $config);
                if($key == 'userfile'){
                    if ( ! $this->upload->do_upload('userfile'))
                    {
                        $data['error']  = $this->upload->display_errors();
                        break;
                    }
                    else
                    {
                        $data['upload_data']  =  $this->upload->data();
                         // 图片 设定大小
                        $config = array();
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = 'resource/news/'.$data['upload_data']['file_name'];
        //                $config['create_thumb'] = TRUE;
                            $config['new_image'] =  'resource/news/480_'.$data['upload_data']['file_name'];
                        $config['maintain_ratio'] = TRUE;
                        $config['width']     = 480;
                        $config['height']   = 300;
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
                        $imgpath = $data['upload_data']['file_name'];
                    }
                } else if($key == 'video'){
                    if ( ! $this->upload->do_upload('video'))
                    {
                        $data['error']  = $this->upload->display_errors();
                        break;
                    }
                    else
                    {
                        $data['upload_data']  =  $this->upload->data();
                        $videopath = $data['upload_data']['file_name'];
                    }
                }
            }
            $insert = array(
                'title'         => $this->postval('title'),
                'description'   => $this->postval('description'),
                'imgpath'       => $imgpath,
                'videopath'     => $videopath,
                'creattime'     => date('Y-m-d')
            );
            $this->db->insert('news', $insert);
            header("Location: {$_SERVER['REQUEST_URI']}");
        }
        // 根据条件分页查询形状信息
        $new_list = $this->img->search_news();
        // 需要传递给视图的参数
        $data['new_list'] = $new_list;
        // 加载视图
        $this->tpl_view('news/list', $data);
    }
    
    /**
     * 【新闻动态】页面
     */
    public function goods_portrait() {
        // 页面所需特别css
        $this->head_data['css'] = array('checkboxstyle' => TRUE, 'fileupload' => TRUE);
        // 获取商品编号
        $news_id = $this->postval('news_id');
        // 非法请求
        if (is_null($news_id)) {
            // 非ajax请求时
            if (!$this->input->is_ajax_request()) {
                // 重定向至【商品画像登録】一览页面
                redirect(base_url('admin/news/index'));
            }
            // ajax请求时
            else {
                // 返回错误信息
                echo json_encode(array('error' => 'bad request'));
            }
        }
        // 提交表单进入方法
        if ($this->postval('submit_flag')) {
            // 插入商品画像
            $this->insert_img_files($news_id);
        }
        // 获取商品信息
        $data['news_info'] = $this->img->get_news_info_by_news_id($news_id);
        // 获取画像データ
        $data['image_list'] = $this->img->get_news_img_by_news_id($news_id);
        // 商品画像数
        $data['image_num'] = $this->img->get_image_nums($news_id, '0');

//        echo "<pre>";
//        var_dump($data);exit;
        // 加载视图
        $this->tpl_view('news/goods_portrait', $data, 'admin');
    }
    /**
     * 插入商品画像
     * @param String $productcd 商品コード
     */
    private function insert_img_files($productcd){
        $this->load->library('image_lib');
        // 文件临时路径
        $tmp_path = $this->postval('file_path');
        // 文件数据存在且不为空时
        if (isset($tmp_path) && !empty($tmp_path) && is_file($tmp_path[0])) {
            // 上传目标目录路径
            $target_path = PROJPATH . 'resource/news/';
            // 上传目标目录不存在时
            if (!file_exists($target_path)) {
                // 递归创目录
                mkdir($target_path, NULL, TRUE);
            }
            // 事务开始
            $this->db->trans_start();
            // 画像编号开始
            $imagecd = $this->img->get_max_imagecd() + 1;
            // 画像信息数组
            $image_info = array();
            // 循环画像数据
            foreach ($tmp_path as $key => $value) {
                // 获取文件类型（扩展名）
                $file_type = $this->postval('file_type');
                $file_type = $file_type[$key];
                // 生成画像名称
                $imagename = "{$productcd}_0_0_{$imagecd}.{$file_type}";
                $big_imagename = "{$productcd}_0_0_{$imagecd}_big.{$file_type}";
                // 整理画像信息
                $image_info[] = array(
                    'news_id'      => "'$productcd'",
                    'imagecd'        => $imagecd,
                    'imagename'      => "'$imagename'",
                    'path'           => "'resource/news/'",
                    'type'           => 0,
                );
                // 移动文件
                rename($value, $target_path.$big_imagename);
                // 生成缩略图
                $resize_config['image_library']  = 'gd2';
                $resize_config['source_image']   = $target_path.$big_imagename;
                $resize_config['new_image']      = $target_path.$imagename;
                $resize_config['maintain_ratio'] = TRUE;
                $resize_config['width']          = PRODUCT_IMG_THUMB_WIDTH;
                $resize_config['height']         = PRODUCT_IMG_THUMB_HEIGHT;
                $this->image_lib->initialize($resize_config);
                if ( ! $this->image_lib->resize()) {
                    echo $this->image_lib->display_errors();
                } else {
                    $this->image_lib->clear();
                }
                // 画像编号累加
                $imagecd++;
            }
            // 插入画像
            $this->img->insert_news_image_file($image_info);
            // 事务结束
            $this->db->trans_complete();
        }
    }
     /**
     * 普通画像删除
     */
    public function del_portrait(){
        // 页面标题
        $this->head_data['title'] = '新闻动态';
        // 页面所需特别css
        $this->head_data['css'] = array('checkboxstyle' => TRUE, 'fileupload' => TRUE);
        // 获取商品编号
        $news_id = $this->postval('news_id');
        // 画像删除条件
        $where = array(
            'news_id' => $news_id,                              // 商品编号
            'imagecds'  => rtrim($this->postval('del_imgcd'), ',')  // 画像编号列表
        );
        // 删除画像
        $this->img->delete_images($where);
        // 获取商品信息
        $data['news_info'] = $this->img->get_news_info_by_news_id($news_id);
        // 获取画像データ
        $data['image_list'] = $this->img->get_news_img_by_news_id($news_id);
        // 商品画像数
        $data['image_num'] = $this->img->get_image_nums($news_id, '0');
        // 加载视图
        $this->tpl_view('news/goods_portrait', $data, 'admin');
        
    }
}
