<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animation_Studio extends CI_Controller {

	public function index()
	{

		//SEO METADATA
		$data['title'] = "Animation Studio | Animation Studio in Mumbai ";

		$data['description'] = "The Jigsaw provides Animation Studio services in Mumbai, Vashi, Navi Mumbai and all over Maharashtra. We have a experienced team of animators and have the ability to make 2D animation, 3D animation, animated product demos, architectural visualisation, e learning based animation. Do call us for details.";

		$data['keywords'] = "  Animation Studio, Animation Studio services in Mumbai, Animation Studio services in Navi Mumbai, Animation Studio services in Vashi, Animation Studio services mumbai, Animation Studio services companies in mumbai";

		$data['canonical'] = "http://thejigsaw.in/amp/animation-studio.html";

		$data['type'] = "amphtml";		$data['ogtype'] = "business.business";		$data['ogurl'] = "https://www.thejigsaw.in/Animation-Studio.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/commercial-film.jpg";

		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('services/animation-studio');		
		$this->load->view('template/footer');
	}

}

/* End of file Ecommerce_Products_Photography_in_Mumbai.php */
/* Location: ./application/controllers/Ecommerce_Products_Photography_in_Mumbai.php */