<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viral_video_maker_in_navi_mumbai_hindi extends CI_Controller {

	public function index()
	{
		//SEO METADATA
		$data['title'] = "वायरल वीडियो निर्माता | वायरल वीडियो निर्माता इन मुंबई |  वायरल वीडियो निर्माता इन मुंबई,वाशी,नवी मुंबई ";

		$data['description'] = "THE JIGSAW is one of the leading Viral Video Maker Company in Navi Mumbai, Vashi, we work with our clients for their needs in making your video popular on all platforms like YouTube, Facebook, etc.";

		$data['keywords'] = "Viral Video Maker, Viral Video Maker in Mumbai, Viral Video Maker in Navi Mumbai, Viral Video Maker in Vashi, best viral video making agencies in mumbai";

		$data['canonical'] = "http://thejigsaw.in/amp/viral-video-maker-in-navi-mumbai.html";

		$data['type'] = "amphtml";				$data['ogtype'] = "business.business";		$data['ogurl'] = "http://www.thejigsaw.in/viral-video-maker-in-navi-mumbai-hindi.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/viral-video.jpg";

		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('services/viral_video_hindi');
		
		$this->load->view('template/footer');
	}

}

/* End of file viral_video-maker_in_navi_mumbai.php */
/* Location: ./application/controllers/viral_video-maker_in_navi_mumbai_hindi.php */
