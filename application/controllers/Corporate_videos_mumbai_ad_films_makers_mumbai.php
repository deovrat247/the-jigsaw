<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corporate_videos_mumbai_ad_films_makers_mumbai extends CI_Controller {

	public function index()
	{
		//SEO METADATA
		$data['title'] = "Best corporate film makers Mumbai | Navi Mumbai";

		$data['description'] = "Corporate film makers Mumbai - The Jigsaw is a award winning corporate film making company based in Mumbai, Navi Mumbai. We offer corporate films, corporate video, corporate ad video at affordable cost..";

		$data['keywords'] = "corporate films mumbai, corporate film makers mumbai, corporate film maker, corporate film makers in mumbai, corporate video, corporate video production, video production company";

		$data['canonical'] = "http://thejigsaw.in/amp/corporate-videos-mumbai-ad-films-makers-mumbai.html";

		$data['type'] = "amphtml";		$data['ogtype'] = "business.business";		$data['ogurl'] = "http://www.thejigsaw.in/corporate-videos-mumbai-ad-films-makers-mumbai.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/banner.jpg";

		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('public/gallery');		
		$this->load->view('template/footer');		
	}

}

/* End of file Corporate_videos_mumbai_ad_films_makers-mumbai.php */
/* Location: ./application/controllers/Corporate_videos_mumbai_ad_films_makers-mumbai.php */