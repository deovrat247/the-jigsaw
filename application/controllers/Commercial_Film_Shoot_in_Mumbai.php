<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Commercial_Film_Shoot_in_Mumbai extends CI_Controller {

	public function index()
	{
		//SEO METADATA
		$data['title'] = "Commercial Film Shoot | Commercial Film Shoots in Mumbai, Vashi, Navi Mumbai ";

		$data['description'] = "With a rich and varied experience in doing all genres of commercial films shoots in Mumbai, Vashi and in Navi Mumbai. THE JIGSAW, has got the right mix of creative and technical talent that can execute any project with ease and dedication.";

		$data['keywords'] = "  Commercial Film Shoot, Commercial Film Shoots in Mumbai, Commercial Film Shoot in Navi Mumbai, Commercial Film Shoot in Vashi, list of film production houses in mumbai, list of industrial photographer in mumbai";

		$data['canonical'] = "http://www.thejigsaw.in/amp/Commercial-Film-Shoot-in-Mumbai.html";

		$data['type'] = "amphtml";		$data['ogtype'] = "business.business";		$data['ogurl'] = "http://www.thejigsaw.in/Commercial-Film-Shoot-in-Mumbai.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/commercial-film.jpg";

		$this->load->view('template/header', $data);
		$this->load->view('template/navigation');
		$this->load->view('services/commercial_film');		
		$this->load->view('template/footer');
	}

}

/* End of file Commercial_Film_Shoot_in_Mumbai.php */
/* Location: ./application/controllers/Commercial_Film_Shoot_in_Mumbai.php */