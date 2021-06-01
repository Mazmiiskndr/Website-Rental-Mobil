<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {

	public function index()
	{
		$data['testimonial'] = $this->testimonial_model->tampil_data('testimonial')->result();
		$data['title'] = "Testimonial | Rental Mobil";
		$this->load->view("home/testimonial",$data);
		$this->load->view("templates_rental_mobil/footer");	
	}


	public function tambah_testimoni_aksi()
	{
		$this->_rulesTestimoni();
		if($this->form_validation->run() == false){
			$this->index();
		}else{
			$nama 			= htmlspecialchars($this->input->post('nama'));
			
			$email 			= htmlspecialchars($this->input->post('email'));
			$deskripsi 		= htmlspecialchars($this->input->post('deskripsi'));



			$data = array(
				'nama' 			=> $nama,
				'email' 		=> $email,
				'deskripsi' 		=> $deskripsi,

			);

			$this->testimonial_model->insert_testimonial($data,'testimonial');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
				Terimakasih Telah Memberikan <strong>Testimoni!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				');
			redirect('testimonial');
		}

	}


	public function _rulesTestimoni()
	{
		$this->form_validation->set_rules('nama','Nama Team','required',
			[
				'required' => "Nama Team tidak boleh kosong",
			]
		);


		$this->form_validation->set_rules('email','Email','required|valid_email',
			[
				'required' => "Email tidak boleh kosong",
			]
		);



	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */