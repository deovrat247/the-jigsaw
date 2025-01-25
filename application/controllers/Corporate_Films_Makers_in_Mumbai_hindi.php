<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corporate_Films_Makers_in_Mumbai_hindi extends CI_Controller {

	public function index()
	{
		//SEO METADATA
		$data['title'] = "कॉर्पोरेट विडियो निर्माता मुंबई | कॉर्पोरेट विडियो उत्पादन | विडियो उत्पादन कंपनी  ";

		$data['description'] = "THE JIGSAW is one of the best Corporate Film Makers in Mumbai, Navi Mumbai. We make Corporate Films Mumbai that is of a very high quality and extremely economical.";

		$data['keywords'] = "  Corporate Films, Corporate Film Maker, Corporate Films Mumbai, Corporate Film Makers in Navi Mumbai, Corporate Film Makers in Mumbai, television advertising agencies, film and television production houses in mumbai";

		$data['canonical'] = "http://www.thejigsaw.in/amp/Corporate-Films-Makers-in-Mumbai.html";

		$data['type'] = "amphtml";		$data['ogtype'] = "business.business";		$data['ogurl'] = "http://www.thejigsaw.in/Corporate-Films-Makers-in-Mumbai-hindi.html";		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/corporate-films.jpg";

		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('services/corporate_film_hindi');		
		$this->load->view('template/footer');
	}

}

/* End of file Corporate_Films_Makers_in_Mumbai.php */
/* Location: ./application/controllers/Corporate_Films_Makers_in_Mumbai_hindi.php */