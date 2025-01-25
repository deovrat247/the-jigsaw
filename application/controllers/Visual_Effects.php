<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visual_Effects extends CI_Controller {

	public function index()
	{

		//SEO METADATA
		$data['title'] = "Visual Effects | Visual Effects in Mumbai ";
		$data['description'] = "The Jigsaw provides Visual Effects services in Mumbai, Vashi, Navi Mumbai and all over Maharashtra. We have partnered  with ecommerce companies like Amazon, Snap deal and even with Google.";
		$data['keywords'] = "Visual Effects, Visual Effects services in Mumbai, Visual Effects services in Navi Mumbai, Visual Effects services in Vashi, Visual Effects mumbai, Visual Effects services companies in mumbai";
		$data['canonical'] = "http://thejigsaw.in/amp/visual-effects.html";
		$data['type'] = "amphtml";		$data['ogtype'] = "business.business";		$data['ogurl'] = "https://www.thejigsaw.in/Visual-Effects.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/commercial-film.jpg";

		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('services/Visual_Effects');		
		$this->load->view('template/footer');
	}

}

/* End of file Ecommerce_Products_Photography_in_Mumbai.php */
/* Location: ./application/controllers/Ecommerce_Products_Photography_in_Mumbai.php */