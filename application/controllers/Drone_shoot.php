<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Drone_shoot extends CI_Controller {

	public function index()
	{	
		//SEO METADATA
		$data['title'] = "";

		$data['description'] = "";

		$data['keywords'] = "";

		$data['canonical'] = "l";

		$data['type'] = "amphtml";				$data['ogtype'] = "";		$data['ogurl'] = "http://www.thejigsaw.in/drone-shoot.html";		$data['ogimage'] = "";

		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('services/Drone_shoot');
		
		$this->load->view('template/footer');
	}

}

/* End of file Ad_Films_Makers_in_Mumbai.php */
/* Location: ./application/controllers/Drone_shoot.php */