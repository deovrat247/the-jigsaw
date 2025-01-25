<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animation_in_3d_And_2d_hindi extends CI_Controller {

	public function index()
	{

		//SEO METADATA
		$data['title'] = "2डी और 3डी एनिमेशन | 2डी और 3डी एनिमेशन इन मुंबई  ";

		$data['description'] = "The Jigsaw provides 2d and 3d Animation in Mumbai, Vashi, Navi Mumbai and all over Maharashtra. We have partnered with ecommerce companies like Amazon, Snap deal and even with Google.";

		$data['keywords'] = "  2d and 3d Animation, 2d and 3d Animation in Mumbai, 2d and 3d Animation in Navi Mumbai, 2d and 3d Animation in Vashi, 2d and 3d Animation mumbai, 2d and 3d Animation services companies in mumbai";

		$data['canonical'] = "http://thejigsaw.in/amp/Animation-in-3d-And-2d.html";

		$data['type'] = "amphtml";		$data['ogtype'] = "business.business";		$data['ogurl'] = "http://thejigsaw.in/Animation-in-3d-And-2d-hindi.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/commercial-film.jpg";

		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('services/Animation-in-3d-And-2d-hindi');		
		$this->load->view('template/footer');
	}

}

/* End of file Ecommerce_Products_Photography_in_Mumbai.php */
/* Location: ./application/controllers/Ecommerce_Products_Photography_in_Mumbai-hindi.php */