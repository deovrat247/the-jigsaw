<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corporate_Video_Production_Company_in_Mumbai_hindi extends CI_Controller {

	public function index()
	{
		//SEO METADATA
		$data['title'] = "कॉर्पोरेट वीडियो निर्माता इन मुंबई | कॉर्पोरेट वीडियो प्रोडक्शन | वीडियो उत्पादन कंपनी ";

		$data['description'] = "TheJigsaw is a Corporate Video Makers & Video Production Company based in Mumbai and has been active in the field of making corporate films for over fifteen years. ";

		$data['keywords'] = "Corporate Video, Corporate Video Production, Video Production Company, Corporate Video Production in Mumbai, production houses in mumbai, advertising companies in mumbai,
ad film production houses in mumbai, indian production companies";

		$data['canonical'] = "http://www.thejigsaw.in/amp/Corporate-Video-Production-Company-in-Mumbai.html";

		$data['type'] = "amphtml";				$data['ogtype'] = "business.business";		$data['ogurl'] = "http://www.thejigsaw.in/Corporate-Video-Production-Company-in-Mumbai-hindi.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/Corporate-Video.jpg";
		
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('services/corporate_video_production_hindi');
		
		$this->load->view('template/footer');
	}

}

/* End of file Corporate_Video_Production_Company_in_Mumbai.php */
/* Location: ./application/controllers/Corporate_Video_Production_Company_in_Mumbai_hindi.php */