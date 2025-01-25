<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corporate_Event_Photography_in_Mumbai extends CI_Controller {

	public function index()
	{
		//SEO METADATA
		$data['title'] = "Corporate Event Photography in Mumbai | Corporate Event Photography | Photography and Video Production Company";

		$data['description'] = "TheJigsaw is a Corporate Video Makers & Video Production Company based in Mumbai and has been active in the field of making corporate films for over fifteen years. ";

		$data['keywords'] = "Corporate Event, Corporate Event Photography, Video Production Company, Corporate Event Photography in Mumbai, production houses in mumbai, advertising companies in mumbai,
ad film production houses in mumbai, indian production companies";

		$data['canonical'] = "http://www.thejigsaw.in/amp/Corporate-Event-Photography-in-Mumbai.html";

		$data['type'] = "amphtml";				$data['ogtype'] = "business.business";		$data['ogurl'] = "http://www.thejigsaw.in/Corporate-Event-Photography-in-Mumbai.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/Corporate-event.jpg";
		
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('services/corporate_event_photography');
		
		$this->load->view('template/footer');
	}

}

/* End of file Corporate_Video_Production_Company_in_Mumbai.php */
/* Location: ./application/controllers/Corporate_Video_Production_Company_in_Mumbai.php */