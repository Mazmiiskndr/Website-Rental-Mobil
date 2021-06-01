<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function index()
	{
		$customer = $this->session->userdata('id_users');
		$data['rental'] = $this->db->query("SELECT * FROM rental rtl, mobil mb, users usr WHERE rtl.id_mobil=mb.id_mobil AND rtl.id_users=usr.id_users AND usr.id_users='$customer'")->result();
		$data['transaksi'] = $this->mobil_model->tampil_data('transaksi')->result();
		$data['title'] = "Transaksi | Rental Mobil";
		$this->load->view("home/transaksi",$data);
		$this->load->view("templates_rental_mobil/footer");	
	}

	public function detail_transaksi($id)
	{
		$data['detail'] = $this->db->query("SELECT * FROM rental rtl, mobil mb, users usr WHERE rtl.id_mobil=mb.id_mobil AND rtl.id_users=usr.id_users AND rtl.id_rental='$id' ORDER BY id_rental DESC")->result();
		$data['title'] = "Detail Transaksi | Rental Mobil";
		$this->load->view("home/detail_transaksi",$data);
		$this->load->view("templates_rental_mobil/footer");	
	}

	public function pembayaran($id)
	{
		$data['transaksi'] = $this->db->query("SELECT * FROM rental rtl, mobil mb, users usr WHERE rtl.id_mobil=mb.id_mobil AND rtl.id_users=usr.id_users AND rtl.id_rental='$id' ORDER BY id_rental DESC")->result();
		$data['bank'] = $this->mobil_model->tampil_data('bank')->result();
		$data['title'] = "Pembayaran | Rental Mobil";
		$this->load->view("home/pembayaran",$data);
		$this->load->view("templates_rental_mobil/footer");	
	}

	public function pembayaran_aksi()
	{
		$id_users 					= $this->input->post('id_users');
		$id_rental 					= $this->input->post('id_rental');
		$id_mobil 					= $this->input->post('id_mobil');
		$bank 					= htmlspecialchars($this->input->post('bank'));
		$nama_rekening 			= htmlspecialchars($this->input->post('nama_rekening'));
		$nomor_rekening 		= htmlspecialchars($this->input->post('nomor_rekening'));
		$nominal_transfer 		= htmlspecialchars($this->input->post('nominal_transfer'));
		$status_pembayaran 		= "Pending";


		$bukti_pembayaran 		= $_FILES['bukti_pembayaran']['name'];

		if($bukti_pembayaran){
			$config ['upload_path'] = './assets/uploads/bukti_pembayaran';
			$config ['allowed_types'] = 'pdf|jpg|jpeg|png|tiff';

			$this->load->library('upload', $config);

			if( $this->upload->do_upload('bukti_pembayaran') ){
				$bukti_pembayaran = $this->upload->data('file_name');
				$this->db->set('bukti_pembayaran',$bukti_pembayaran);
			}else{
				echo $this->upload->display_errors();
			}

		}

		$data = array(
			'id_users'  			=>  $id_users,
			'id_rental'  			=>  $id_rental,
			'id_mobil'  			=>  $id_mobil,
			'bank'  				=>  $bank,
			'nama_rekening'  		=>  $nama_rekening,
			'nomor_rekening'  		=>  $nomor_rekening,
			'nominal_transfer'  	=>  $nominal_transfer,
			'status_pembayaran'  	=>  $status_pembayaran,
			'bukti_pembayaran' 	 	=>  $bukti_pembayaran
		);

		$this->transaksi_model->insert_transaksi($data,'transaksi');
		$status_pembayaran = array( 
			'status_pembayaran' => 'Pending'
		);

		$id = array(
			'id_rental' => $id_rental
		);
 
		$this->mobil_model->update_data2('rental',$status_pembayaran,$id);
		$this->session->set_flashdata('pesan','
			<div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
			Bukti pembayaran berhasil di <strong>Upload!</strong>. Admin akan segera menghubungi Anda.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('transaksi');


	}

	public function cetak_invoice($id)
	{
		$data['transaksi'] = $this->db->query("SELECT * FROM rental rtl, mobil mb, users usr WHERE rtl.id_mobil=mb.id_mobil AND rtl.id_users=usr.id_users AND rtl.id_rental='$id' ORDER BY id_rental DESC")->result();
		$data['title'] = "Cetak Invoice Pembayaran";
		$this->load->view('home/cetak_invoice',$data);
	}




}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */