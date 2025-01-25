<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resource_hindi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Resource_Model');
		
	}

	public function index()
	{
		$data['title']='संसाधन';
		$data['description']='';
		$data['keywords']='';
		$data['type']='';
		$data['canonical']='';
		$data['ogtype'] = "business.business";
		$data['ogurl'] = "http://www.thejigsaw.in/posts";
		$data['ogimage'] = "http://www.thejigsaw.in/assets/images/banner.jpg";
		
		$data['resources'] = $this->Resource_Model->get_posts();

		
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('resource/index-resource-hindi',$data);
		$this->load->view('template/footer');		
	}
	public function view($slug = NULL){
		
		$data['resources'] = $this->Resource_Model->get_posts($slug);
		
		$this->load->view('template/headerres',$data);
		$this->load->view('template/navigation');
		$this->load->view('resource/view',$data);
		$this->load->view('template/footer');
	}

}

/* End of file Resource.php */
/* Location: ./application/controllers/Resource_hindi.php */