<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Short_film_movie_makers_mumbai extends CI_Controller {

	public function index()
	{
		//SEO METADATA
		$data['title'] = "Short Film Makers in Mumbai, Navi Mumbai ";

		$data['description'] = "We create short movies with best professional work in your budget range, Do you need short films for Your brand. Call (+91)9833074070 – Mumbai.";

		$data['keywords'] = "  short film makers, short film makers in Mumbai, short movie makers, short movie makers in Mumbai, make a short film";

		$data['canonical'] = "http://www.thejigsaw.in/amp/Ad-Films-Makers-in-Mumbai.html";

		$data['type'] = "amphtml";		$data['ogtype'] = "business.business";		$data['ogurl'] = "http://www.thejigsaw.in/short-film-movie-makers-mumbai.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/short-film.jpg";

		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('services/short_film');	
        $this->load->view('template/footer');
	}

}

/* End of file short_film_movie_makers_mumbai.php */
/* Location: ./application/controllers/short_film_movie_makers_mumbai.php */