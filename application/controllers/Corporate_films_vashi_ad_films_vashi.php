<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corporate_films_vashi_ad_films_vashi extends CI_Controller {

	public function index()
	{
		//SEO METADATA
		$data['title'] = "Corporate and Ad films, Vashi and Mumbai - THE JIGSAW";

		$data['description'] = "We are one of the leading ad film and corporate film makers in Mumbai and Vashi";

		$data['keywords'] = "Ad film makers Vashi, corporate film makers navi Mumbai";

		$data['canonical'] = "http://www.thejigsaw.in/amp/corporate-films-vashi-ad-films-vashi.html";

		$data['type'] = "amphtml";
		$data['ogtype'] = "business.business";		$data['ogurl'] = "http://www.thejigsaw.in/corporate-films-vashi-ad-films-vashi.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/ad-film-makers.jpg";
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('public/clients');		
		$this->load->view('template/footer');
	}

}

/* End of file corporate_films_vashi_ad_films_vashi.php */
/* Location: ./application/controllers/corporate_films_vashi_ad_films_vashi.php */