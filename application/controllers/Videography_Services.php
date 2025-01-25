<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videography_Services extends CI_Controller {

	public function index()
	{
		//SEO METADATA
		$data['title'] = "Creative Videography Services in Mumbai | The Jigsaw";
		$data['description'] = "The Jigsaw is the leading video production services company based in Mumbai and has been active in the field of video production services for over fifteen years.";
		$data['keywords'] = "Videography services in mumbai, Videography services in navi mumbai, Videography services , Video production";
		$data['canonical'] = "https://thejigsaw.in/videography-services";
		$data['type'] = "amphtml";		$data['ogtype'] = "business.business";		$data['ogurl'] = "http://www.thejigsaw.in/Videography-Services.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/commercial-film.jpg";
		$this->load->view('template/header', $data);
		$this->load->view('template/navigation');
		$this->load->view('services/videography_services');		
		$this->load->view('template/footer');
	}

}

/* End of file Commercial_Film_Shoot_in_Mumbai.php */
/* Location: ./application/controllers/Videography-Services.html.php */