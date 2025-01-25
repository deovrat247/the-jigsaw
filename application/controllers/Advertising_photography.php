<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advertising_photography extends CI_Controller {

	public function index()
	{	
		//SEO METADATA
		$data['title'] = "";

		$data['description'] = "";

		$data['keywords'] = "";

		$data['canonical'] = "";

		$data['type'] = "amphtml";				$data['ogtype'] = "";		$data['ogurl'] = "http://www.thejigsaw.in/advertising-photography.html";		$data['ogimage'] = "";

		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('services/advertising-photography');
		
		$this->load->view('template/footer');
	}

}

/* End of file Ad_Films_Makers_in_Mumbai.php */
/* Location: ./application/controllers/Advertising_photography.php */