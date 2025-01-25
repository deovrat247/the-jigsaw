<?php
class News extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->library('pagination');
		$this->load->model('News_Model');
    }
 
    public function index()
    {
		
        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'News archive';
        $this->load->view('template/header1', $data);
        $this->load->view('news/index', $data);
        $this->load->view('template/footer');
    }
    
    public function view($slug = NULL){
		$data['newss'] = $this->News_Model->get_posts($slug);
					
		$this->load->view('template/headerblog1',$data);
		$this->load->view('template/navigation');
		$this->load->view('news/view',$data);
		$this->load->view('template/footer');
	}
}
