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
    // 证书设置 查询
    public function search_news($where = array(),$limit='') {
        if(!empty($where)){
            $this->db->where($where);
        }
        if(!empty($limit)){
            $this->db->limit($limit);
        }
        return $this->db->order_by('id desc')               // 按形状编号
                        ->get('news')   // 执行查询
                        ->result_array();                       // 结果集转化为结果数组
    }

}
