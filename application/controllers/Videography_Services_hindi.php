<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videography_Services_hindi extends CI_Controller {

	public function index()
	{
		//SEO METADATA
		$data['title'] = "Videography services in Mumbai | Videography services";
		$data['description'] = "The Jigsaw is the leading video production services company based in Mumbai and has been active in the field of video production services for over fifteen years.";
		$data['keywords'] = "Videography services in mumbai, Videography services in navi mumbai, Videography services , Video production";
		$data['canonical'] = "https://thejigsaw.in/videography-services";
		$data['type'] = "amphtml";		$data['ogtype'] = "business.business";		$data['ogurl'] = "http://www.thejigsaw.in/Videography-Services-hindi.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/commercial-film.jpg";
		$this->load->view('template/header', $data);
		$this->load->view('template/navigation');
		$this->load->view('services/videography_services_hindi');		
		$this->load->view('template/footer');
	}

}

/* End of file Commercial_Film_Shoot_in_Mumbai.php */
/* Location: ./application/controllers/Videography-Services-hindi.html.php */