<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data['title'] = "About Us | Rental Mobil";
		
		
		$this->load->view("home/about",$data);
		$this->load->view("templates_rental_mobil/footer");	
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */