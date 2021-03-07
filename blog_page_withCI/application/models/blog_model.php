<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blog_model extends CI_Controller {
    function get_blog(){
        /*$data['yazı']=$this->db->get('blog')->result();*///bunu modelsiz kullan
        return $this->db->select("id,text,author,title,image_url,category,date")->from('blog')->get()->result();
    
    }
    function get_id($id){
        return $this->db->select("id,title,text,author,date,image_url,category,date")
        ->where("id",$id)
        ->from("blog")
        ->get()->row();
    }
    function get_category($category){
        return $this->db->select("id,title,text,author,date,image_url,category,view")
        ->where("category",$category)
        ->from("blog")
        ->get()->result();
    }
}
