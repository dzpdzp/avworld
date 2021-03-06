<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of img
 *
 * @author dingding
 */
class Img_model extends CI_Model {
    //put your code here
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    //关于我们
    public function get_aboutus_info ($condition=array(),$where=array())
    {
        $query = $this->db->select($condition)->where($where)->get('aboutus');
        return $query->row_array();
    }
    // admin 管理 关于我们
    public function updata_aboutus($updata = array()){
        $rs = $this->db->set($updata)->update('aboutus');
        return $rs;
    }
    
    // 证书设置 查询 总数
    public function count_all_Certificate(){
        // 返回查询结果总数
        return $this->db->count_all_results('certificate');
    }
    // 证书设置 查询
    public function search_certificate() {
        return $this->db->order_by('id ASC')               // 按形状编号升序排序
                        ->get('certificate')   // 执行查询
                        ->result_array();                       // 结果集转化为结果数组
    }
    // 新闻动态设置 查询
    public function search_news($where = array(),$limit='') {
        if(!empty($where)){
            $this->db->where($where);
        }
        if(!empty($limit)){
            $this->db->limit($limit);
        }
        return $this->db->order_by('id desc')               
                        ->get('news')   // 执行查询
                        ->result_array();                       // 结果集转化为结果数组
    }
    // 服务领域种类 查询
    public function search_service_type($where = array(),$limit='') {
        if(!empty($where)){
            $this->db->where($where);
        }
        if(!empty($limit)){
            $this->db->limit($limit);
        }
        return $this->db->get('service_type')               // 执行查询
                        ->result_array();                   // 结果集转化为结果数组
    }
    // 服务领域种类 查询
    public function search_service_detail($where = array()) {
        if(!empty($where)){
            $this->db->where($where);
        }
        return $this->db->get('service_type')               // 执行查询
                        ->result_array();                   // 结果集转化为结果数组
    }
    // fuwu  查询
    public function search_service($where = array(),$limit='') {
        if(!empty($where)){
            $this->db->where($where);
        }
        if(!empty($limit)){
            $this->db->limit($limit);
        }
        $rs =  $this->db->order_by('service_id desc')               
                        ->get('service')   // 执行查询
                        ->result_array();                       // 结果集转化为结果数组
                return $rs ;
    }
     // 获取 新闻动态 信息
    public function get_news_info_by_news_id($news_id){
        $sql  = "SELECT ";
        $sql .= "	* ";
        $sql .= "FROM ";
        $sql .= "	`news`";
        $sql .= "WHERE ";
        $sql .= "	id =  ".$news_id;
        $rs =$this->db->query($sql)->row_array();
        return $rs;
    }
    
    // 获取 新闻动态 图片
    public function get_news_img_by_news_id($news_id){
        $sql  = "SELECT ";
        $sql .= "	* ";
        $sql .= "FROM ";
        $sql .= "	`news_image`";
        $sql .= "WHERE ";
        $sql .= "	news_id =  ".$news_id;
        $rs =$this->db->query($sql)->result_array();
        return $rs;
    }
    
    /**
     * 获取画像数量
     * @param  [type] $productcd 商品编号
     * @param  [type] $type      画像类型
     * @return [type]            画像数量
     */
    public function get_image_nums($news_id) {
        return $this->db->where("imagename LIKE '$news_id%' ")
                        ->count_all_results('news_image');
    }
    
    /**
     * 获取最大画像编号
     * @return [type] 画像编号
     */
    public function get_max_imagecd() {
        $result = $this->db->query("SELECT CASE WHEN MAX(imagecd) IS NULL THEN 0 ELSE MAX(imagecd) END AS maxcd FROM news_image")
                           ->row_array();
        return intval($result['maxcd']);
    }
    
    /**
     * 批量插入商品画像
     * @param type $image_info
     */
    public function insert_news_image_file($image_info) {
        // 执行插入
        $this->db->insert_batch('news_image', $image_info, FALSE);
    }
    
    /**
     * 删除商品画像
     * @param  [type] $where 删除条件
     */
    public function delete_images($where) {
        $this->db->where("news_id = '{$where['news_id']}' AND imagecd IN ({$where['imagecds']})")
                 ->delete('news_image');
    }
    
    // 我们的团队
    public function search_ourteam() {
        return $this->db->order_by('id desc')    
                        ->get('ours_team')   // 执行查询
                        ->row_array();                       // 结果集转化为结果数组
    }
}
