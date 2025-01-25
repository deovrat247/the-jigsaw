<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Training_films_in_mumbai extends CI_Controller {
	
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
		$data['articles'] = $this->Article_Model->get_posts();
		
		$data['newss'] = $this->News_Model->get_posts();
		
		$data['title'] = "Training Films in Mumbai | Training Film Makers in Mumbai";

		$data['description'] = "THE JIGSAW specialises in making training film and is one of the fastest growing training film makers in Mumbai, Vashi and Navi Mumbai.";

		$data['keywords'] = "Training Films in Mumbai, Training Film Makers in Mumbai, Training Filmmakers in Vashi, Training Filmmakers in Navi Mumbai, film making course in mumbai, list film making courses agencies in mumbai.";

		$data['canonical'] = "http://thejigsaw.in/amp/training-films-in-mumbai.html";

		$data['type'] = "amphtml";				$data['ogtype'] = "business.business";		$data['ogurl'] = "http://www.thejigsaw.in/training-films-in-mumbai.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/aboutus.jpg";

		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('public/about');
		$this->load->view('template/footer');
    }
    

}

/* End of file Training-films-in-mumbai.php */
/* Location: ./application/controllers/Training-films-in-mumbai.php */