<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy_Policy extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->library('pagination');
		$this->load->model('Article_Model');
		$this->load->model('News_Model');
    }
 
    public function index()
    {
		$data['title'] = "Privacy Policy";
		$data['description'] = "Privacy Policy";
		$data['keywords'] = "Privacy Policy";
		$data['canonical'] = "http://thejigsaw.in/privacy-policy";
		$data['type'] = "amphtml";				$data['ogtype'] = "business.business";		$data['ogurl'] = "https://www.thejigsaw.in/Privacy-Policy.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/aboutus.jpg";
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('public/privacy');
		$this->load->view('template/footer');
    }
    

}

/* End of file Training-films-in-mumbai.php */
/* Location: ./application/controllers/Training-films-in-mumbai.php */