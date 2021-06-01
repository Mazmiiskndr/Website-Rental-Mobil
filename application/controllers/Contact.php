<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['title'] = "Contact | Rental Mobil";
		
		
		$this->load->view("home/contact",$data);
		$this->load->view("templates_rental_mobil/footer");	
	}


	public function tambah_contact_aksi()
	{
		$this->_rulesContact();
		if($this->form_validation->run() == false){
			$this->index();
		}else{
			$nama 			= htmlspecialchars($this->input->post('nama'));
			
			$email 			= htmlspecialchars($this->input->post('email'));
			$subject 		= htmlspecialchars($this->input->post('subject'));
			$deskripsi 		= htmlspecialchars($this->input->post('deskripsi'));



			$data = array(
				'nama' 			=> $nama,
				'email' 		=> $email,
				'subject' 		=> $subject,
				'deskripsi' 	=> $deskripsi,

			);

			$this->contact_model->insert_contact($data,'contact');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
				Terimakasih Telah <strong>Menghubungi Kami!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				');
			redirect('contact');
		}

	}


	public function _rulesContact()
	{
		$this->form_validation->set_rules('nama','Nama Team','required',
			[
				'required' => "Nama Team tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('subject','Subject','required',
			[
				'required' => "Subject tidak boleh kosong",
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