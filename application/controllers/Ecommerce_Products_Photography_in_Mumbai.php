<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ecommerce_Products_Photography_in_Mumbai extends CI_Controller {

	public function index()
	{

		//SEO METADATA
		$data['title'] = "Ecommerce Product Photography | Ecommerce Product Photography in Mumbai ";

		$data['description'] = "The Jigsaw provides ecommerce photography services in Mumbai, Vashi, Navi Mumbai and all over Maharashtra. We have partenered with ecommerce companies like Amazon, Snap deal and even with Google.";

		$data['keywords'] = "  Ecommerce Product Photography, Ecommerce Product Photography in Mumbai, Ecommerce Product Photography in Navi Mumbai, Ecommerce Product Photography in Vashi, product photography mumbai, product photography services companies in mumbai";

		$data['canonical'] = "http://thejigsaw.in/amp/Ecommerce-Products-Photography-in-Mumbai.html";

		$data['type'] = "amphtml";		$data['ogtype'] = "business.business";		$data['ogurl'] = "http://www.thejigsaw.in/Ecommerce-Products-Photography-in-Mumbai.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/product-catalogue.jpg";

		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('services/product_photography');		
		$this->load->view('template/footer');
	}

}

/* End of file Ecommerce_Products_Photography_in_Mumbai.php */
/* Location: ./application/controllers/Ecommerce_Products_Photography_in_Mumbai.php */