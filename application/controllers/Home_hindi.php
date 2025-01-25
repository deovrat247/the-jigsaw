<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_hindi extends CI_Controller {

	public function index()
	{
		$data['title'] = "Corporate Movie | Corporate Movie in Mumbai | Corporate Movie in Vashi, Navi Mumbai";
		$data['description'] = "The Jigsaw is a video production company headquartered in Mumbai and operating across the globe. Headed by media professionals, associated  with leading broadcasters in the country. The Jigsaw is into video production, animation, business presentations, special effects and all associated services. ";
		$data['keywords'] = "Corporate Movie, Corporate Movie in Mumbai, Corporate Movie in Vashi, Corporate Movie in Navi Mumbai, list of film production companies in mumbai, best production house in mumbai";
		$data['canonical'] = "http://www.thejigsaw.in/amp/";
		$data['type'] = "amphtml";
		
		$data['ogtype'] = "business.business";
		$data['ogurl'] = "http://www.thejigsaw.in/home-hindi";
		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/banner.jpg";

		$this->load->model('Article_Model');

		$data['articles'] = $this->Article_Model->latest_blog(3);
		

		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('public/home-hindi',$data);
		$this->load->view('template/footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home_hindi.php */