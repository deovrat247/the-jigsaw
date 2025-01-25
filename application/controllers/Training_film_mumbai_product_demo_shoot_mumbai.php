<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Training_film_mumbai_product_demo_shoot_mumbai extends CI_Controller {

	public function index()
	{
		//SEO METADATA
		$data['title'] = "Commercial Shoots Mumbai - THE JIGSAW";

		$data['description'] = "Contact and get more details about THE JIGSAW, the best commercial and corporate film maker based in Mumbai";

		$data['keywords'] = "commercial film shoot, training video shoot mumbai";

		$data['canonical'] = "http://thejigsaw.in/amp/training-film-mumbai-product-demo-shoot-mumbai.html";

		$data['type'] = "canonical";
		
		$data['ogtype'] = "business.business";
		$data['ogurl'] = "http://www.thejigsaw.in/training-film-mumbai-product-demo-shoot-mumbai.html";
		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/ad-film-makers.jpg";

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('number','Number','required|numeric');
		$this->form_validation->set_rules('message','Message','required');

		if($this->form_validation->run() === FALSE){

			$this->load->view('template/header',$data);
			$this->load->view('template/navigation');
			$this->load->view('public/contact_us',$data);		
			$this->load->view('template/footer');
		} else {

			$data = $this->input->post();

			$this->load->library('email');
			$config = array();
			$config['ptotocol'] = 'smtp';
			$config['smtp_host'] = 'mail.thejigsaw.in';
			$config['smtp_user'] = 'info@thejigsaw.in';
			$config['smtp_pass'] = 'rvjig@123';
			$config['smtp_port'] = 587;

			$this->email->initialize($config);

			$this->email->set_newline("\r\n");

			$this->email->from($data['email']);
			$this->email->to('shashank@thejigsaw.in');
			$this->email->subject($data['number']);
			$this->email->message($data['message']);

			if($this->email->send()){
				$this->session->set_flashdata('contact_us', 'Thanks For Contacting Us, You can also call us on (+91)9833074070');
				redirect('training-film-mumbai-product-demo-shoot-mumbai');
			}

			
		}
	}

	

}

/* End of file training_film_mumbai_product_demo_shoot_mumbai.php */
/* Location: ./application/controllers/training_film_mumbai_product_demo_shoot_mumbai.php */