<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video_Production_Services extends CI_Controller {

	public function index()
	{
		//SEO METADATA
		$data['title'] = "Video Production Companies in Mumbai | Video Production Services";
		$data['description'] = "The Jigsaw is the leading video production company based in Mumbai and has been active in the field of video production services for over fifteen years.";
		$data['keywords'] = "Video Production Services in Mumbai, Video production services in Navi Mumbai, Video production services, Video Production Company";
		$data['canonical'] = "https://thejigsaw.in/video-production-services";
		$data['type'] = "amphtml";		$data['ogtype'] = "business.business";		$data['ogurl'] = "http://www.thejigsaw.in/Commercial-Film-Shoot-in-Mumbai.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/commercial-film.jpg";

		$this->load->view('template/header', $data);
		$this->load->view('template/navigation');
		$this->load->view('services/video_production_services');		
		$this->load->view('template/footer');
	}

}

/* End of file Commercial_Film_Shoot_in_Mumbai.php */
/* Location: ./application/controllers/Commercial_Film_Shoot_in_Mumbai.php */