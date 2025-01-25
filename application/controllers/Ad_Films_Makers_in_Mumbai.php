<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ad_Films_Makers_in_Mumbai extends CI_Controller {

	public function index()
	{	
		//SEO METADATA
		$data['title'] = "Ad Films | Ad Films Maker | Ad Film Makers in Mumbai, Vashi, Navi Mumbai";

		$data['description'] = "THE JIGSAW is one of the leading Ad Film Makers in Mumbai, Vashi and Navi Mumbai. The company has rich experience is making ad films for television and the internet.";

		$data['keywords'] = "Ad Films, Ad Films Maker, Ad Film Makers in Mumbai, Ad Film Makers Vashi, Ad Film Makers Navi Mumbai, ad agencies in mumbai, ad agencies in mumbai, film production company in india";

		$data['canonical'] = "http://www.thejigsaw.in/amp/Ad-Films-Makers-in-Mumbai.html";

		$data['type'] = "amphtml";				$data['ogtype'] = "business.business";		$data['ogurl'] = "http://www.thejigsaw.in/Ad-Films-Makers-in-Mumbai.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/ad-film-makers.jpg";

		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('services/Ad_Films_Makers_in_Mumbai');
		
		$this->load->view('template/footer');
	}

}

/* End of file Ad_Films_Makers_in_Mumbai.php */
/* Location: ./application/controllers/Ad_Films_Makers_in_Mumbai.php */