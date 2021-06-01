<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

	public function index()
	{
		$data['team'] = $this->team_model->tampil_data('team')->result();
		$data['title'] = "Team | Rental Mobil";
		$this->load->view("home/team",$data);
		$this->load->view("templates_rental_mobil/footer");	
	}

}

/* End of file Team.php */
/* Location: ./application/controllers/Team.php */