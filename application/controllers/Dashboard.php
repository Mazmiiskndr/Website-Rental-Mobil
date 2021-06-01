<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		
		$config['base_url'] 	= site_url('dashboard/index');
		$config['total_rows'] 	= $this->mobil_model->count_mobil();
		$config['per_page'] 	= 3;
		$config['uri_segment'] 	= 3;
		$choice 				= $config['total_rows'] / $config['per_page'];
		$config['num_links']	 = floor($config);
		$config['first_link']	 = 'First';
		$config['last_link']	 = 'Last';
		$config['next_link']	 = '&raquo;';
		$config['prev_link']	 = '&laquo;';


		$config['full_tag_open'] = '<nav><ul class="pagination pagination-lg justify-content-center">';
		$config['full_tag_close'] = '</ul></nav>';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" style="background-color: #ed563b" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');
		$this->pagination->initialize($config);
		$data['page'] = $this->uri->segment(3);



		$data['title'] = "Rental Mobil";
		$data['mobil'] = $this->mobil_model->get_data2($config['per_page'] ,$data['page'])->result();
		$data['pagination'] = $this->pagination->create_links();
		$data['testimonial'] = $this->testimonial_model->tampil_data('testimonial')->result();
		$this->load->view("templates_rental_mobil/header",$data);
		$this->load->view("home/home");
		$this->load->view("templates_rental_mobil/footer");		
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */