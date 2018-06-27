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

    
    public function get_aboutus_info ($condition=array(),$where=array())
    {
        $query = $this->db->select($condition)->where($where)->get('aboutus');
        return $query->row_array();
    }
    public function updata_aboutus($updata = array()){
        $rs = $this->db->set($updata)->update('aboutus');
        return $rs;
    }

}
