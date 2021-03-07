<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deff extends CI_Controller {

	public function index()
	{
		$this->load->model('blog_model');
		$data['card'] = $this->blog_model->get_blog();
		$this->load->view('blog_first',$data);
	}
	public function blogdetay($id)
	{		  
		    $this->load->model('blog_model');
			$data['blog_text']=$this->blog_model->get_id($id); 
			$this->load->view('blog_second',$data);
	}
		public function blogsecim($categ)
	{		  
		$this->load->model('blog_model');
		$data['cate']=$this->blog_model->get_category($categ);
		foreach($data['cate'] as $key){
		   $key->view=$key->view+1;
		  // echo $key->view;
		}	
		$this->load->view('blogsecme2',$data);
	}
}
?>
