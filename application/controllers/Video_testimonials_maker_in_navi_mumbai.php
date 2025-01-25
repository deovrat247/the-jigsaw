<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video_testimonials_maker_in_navi_mumbai extends CI_Controller {

	public function index()
	{
		//SEO METADATA
		$data['title'] = "Video Testimonials Maker | Video Testimonials Maker in Mumbai, Navi Mumbai, Vashi";

		$data['description'] = "THE JIGSAW As a Video Testimonials Makers in Mumbai, Navi Mumbai and Vashi work in deep understanding of the video and use technologies in video creation.";

		$data['keywords'] = "Video Testimonials Maker, Video Testimonials Maker in Mumbai, Video Testimonials Maker in Navi Mumbai, Video Testimonials Maker in Vashi, best video testimonials agencies in mumbai";

		$data['canonical'] = "http://thejigsaw.in/amp/video-testimonials-maker-in-navi-mumbai.html";

		$data['type'] = "amphtml";				$data['ogtype'] = "business.business";		$data['ogurl'] = "http://www.thejigsaw.in/video-testimonials-maker-in-navi-mumbai.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/ad-film-makers.jpg";				

		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('services/video-testimonials');
		
		$this->load->view('template/footer');
	}

}

/* End of file video_testimonials_maker_in_navi_mumbai.php */
/* Location: ./application/controllers/video_testimonials_maker_in_navi_mumbai.php */