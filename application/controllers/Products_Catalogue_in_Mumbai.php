<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_Catalogue_in_Mumbai extends CI_Controller {

	public function index()
	{
		//SEO METADATA
		$data['title'] = "Products Catalogue | Products Catalogue in Mumbai | Products Catalogue in Pune";

		$data['description'] = "The Jigsaw also excel in value added services like products Cataloguing in Vashi, Navi Mumbai and Pune, acting as an inter phase with ecommerce companies and if required helping the customers with the registration and online sales process.";

		$data['keywords'] = "Products Catalogue, Products Catalogue in Mumbai, Products Catalogue in Navi Mumbai, Products Catalogue in Vashi, Products Catalogue in Pune, products catalogue services in mumbai";

		$data['canonical'] = "http://thejigsaw.in/amp/Products-Catalogue-in-Mumbai.html";

		$data['type'] = "amphtml";		$data['ogtype'] = "business.business";		$data['ogurl'] = "http://www.thejigsaw.in/Products-Catalogue-in-Mumbai.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/product-catalogue.jpg";

		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('services/product_catalogue');		
		$this->load->view('template/footer');
	}

}

/* End of file Products_Catalogue_in_Mumbai.php */
/* Location: ./application/controllers/Products_Catalogue_in_Mumbai.php */