<?php
		defined('BASEPATH') OR exit('No direct script access allowed');
		
		class Ecommerce_Photography_Cost extends CI_Controller {
		
			public function index()
			{
				//SEO METADATA
				$data['title'] = "Ecommerce Product Photoshoot | Ecommerce Product Photoshoot in Mumbai";
				$data['description'] = "The Jigsaw is offering services to ecommerce product photoshoot in Vashi, Navi Mumbai. If you sell products online and are into products like garments, Jewels, personal consumption products.";
				$data['keywords'] = " Ecommerce Product Photoshoot, Ecommerce Product Photoshoot in Mumbai, Ecommerce Product Photoshoot in navi Mumbai, Ecommerce Product Photoshoot in Vashi, top industrial photography in mumbai, best industrial photography in mumbai, top corporate photography in mumbai, best corporate photography in mumbai";
				$data['canonical'] = "http://thejigsaw.in/amp/Ecommerce-Product-Photoshoot-in-Mumbai.html";

				$data['type'] = "amphtml";				
				$data['ogtype'] = "business.business";				
				$data['ogurl'] = "http://www.thejigsaw.in/Ecommerce-Product-Photoshoot-in-Mumbai.html";				
				$data['ogimage'] = "http://www.thejigsaw.in/assets/images/product-catalogue.jpg";

				$this->load->view('template/header',$data);
				$this->load->view('template/navigation');
				$this->load->view('services/product_photography_cost');		
				$this->load->view('template/footer');
			}
		
		}
		
		/* End of file Ecommerce_Product_Photoshoot_in_Mumbai.php */
		/* Location: ./application/controllers/Ecommerce_Product_Photoshoot_in_Mumbai.php */		