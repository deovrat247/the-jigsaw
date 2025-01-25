<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_Model extends CI_Model {

	//Get latest blog on home page

	public function latest_blog($n)
	{
		$this->db->order_by('id','desc');
		$this->db->limit($n);
		return $this->db->get('articles')->result();
	}

	//Get Posts
	public function get_posts($slug = FALSE){
		
		if($slug === FALSE){
			$this->db->order_by('id', 'DESC');
			$query = $this->db->get('articles');
			return $query->result_array();
		}
		$query = $this->db->get_where('articles', array('slug' => $slug));
		return $query->row_array();
	}



	//Get Categories
	public function get_categories(){

		$this->db->order_by('name');
		$query = $this->db->get('categories');
		return $query->result_array();
	}

}

/* End of file Post_Model.php */
/* Location: ./application/models/Post_Model.php */