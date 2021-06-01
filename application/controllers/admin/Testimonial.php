<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }


	public function index()
	{
		$data['title'] = "Data Testimonial | Rental Mobil";
		$data['testimonial'] = $this->testimonial_model->tampil_data('testimonial')->result();
	
		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/testimonial");
		$this->load->view("templates_admin/footer");
	}


	public function delete_testimonial($id)
	{
		$where = array('id_testimonial' => $id);
		$this->testimonial_model->hapus_data($where,'testimonial');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data Testimonial Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/testimonial');
	}
 





}

/* End of file Supir.php */
/* Location: ./application/controllers/admin/Supir.php */