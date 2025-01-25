<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Script_Length extends CI_Controller {
	
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
		$data['title'] = "Script Length";
		$data['description'] = "Script Length";
		$data['keywords'] = "Script Length";
		$data['canonical'] = "http://thejigsaw.in/script-length";
		$data['type'] = "amphtml";				$data['ogtype'] = "business.business";		$data['ogurl'] = "https://www.thejigsaw.in/Script-Length.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/aboutus.jpg";
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('public/script-length');
		$this->load->view('template/footer');
    }
    

}

/* End of file Training-films-in-mumbai.php */
/* Location: ./application/controllers/Training-films-in-mumbai.php */