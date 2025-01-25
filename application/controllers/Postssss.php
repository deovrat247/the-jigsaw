<?php 
	class Posts extends CI_Controller{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Article_Model');
		
	}

	public function index(){
		
		$data['title']='Posts';
		$data['description']='';
		$data['keywords']='';
		$data['type']='';
		$data['canonical']='';
		
		$data['ogtype'] = "business.business";
		$data['ogurl'] = "http://www.thejigsaw.in/posts";
		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/banner.jpg";
		
		$data['articles'] = $this->Article_Model->get_posts();

		
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('posts/index',$data);
		$this->load->view('template/footer');
	}
	public function view($slug = NULL){
		$data['articles'] = $this->Article_Model->get_posts($slug);
					
		$this->load->view('template/headerblog',$data);
		$this->load->view('template/navigation');
		$this->load->view('posts/view',$data);
		$this->load->view('template/footer');
	}
	
}