<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rental extends CI_Controller {

	// public function __construct()
 //    {
 //        parent::__construct();  
 //        cek_login();
 //        cek_user();
 //    }


	public function tambah_rental($id)
	{
		if(!$this->session->userdata('email')){
			$this->session->set_flashdata('pesan','
				<div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
				Akses ditolak. <strong>Silahkan Login Dulu!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				');
			redirect('auth/login');
			cek_login();

		}else{
			$data['detail'] = $this->mobil_model->ambil_id_mobil($id);
			$data['title'] = "Tambah Rental | Rental Mobil";
			$data['mobil'] = $this->mobil_model->tampil_data('mobil')->result();
			$data['supir'] = $this->supir_model->tampil_data('supir')->result();
			
			$this->load->view("home/tambah_rental",$data);
			$this->load->view("templates_rental_mobil/footer");
		}
	}

	public function tambah_rental_aksi()
	{
		
		$id_mobil 			= $this->input->post('id_mobil');
		$id_users 			= $this->input->post('id_users');
		$tanggal_rental 	= $this->input->post('tanggal_rental');
		$tanggal_kembali 	= $this->input->post('tanggal_kembali');
		$denda 				= $this->input->post('denda');
		$harga 				= $this->input->post('harga');
		$pengambilan 		= $this->input->post('pengambilan');
		$pengembalian 		= $this->input->post('pengembalian');
		$supir 				= $this->input->post('supir');



		$data = array(
			'id_mobil'				=> $id_mobil,
			'id_users'				=> $id_users,
			'tanggal_rental'		=> $tanggal_rental,
			'tanggal_kembali'		=> $tanggal_kembali,
			'denda'					=> $denda,
			'harga'					=> $harga,
			'pengambilan'			=> $pengambilan,
			'pengembalian'			=> $pengembalian,
			'supir'					=> $supir,
			'tanggal_pengembalian' 	=> '-',
			'status_rental'			=> 'Belum Selesai',
			'status_pengembalian'	=> 'Belum Kembali',
			'status_pembayaran'		=> 'Belum Bayar'
		);

		$this->rental_model->insert_data($data,'rental');

		$status = array( 
			'status' => 'Tidak Tersedia'
		);

		$id = array(
			'id_mobil' => $id_mobil
		);

		$this->mobil_model->update_data2('mobil',$status,$id);

		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			Rental Berhasil, Lanjutkan <strong>Transaksi!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('transaksi');



	}


	public function batal_rental($id)
	{
		$where = array('id_rental' => $id);
		$data = $this->rental_model->get_where($where,'rental')->row(); 
		$where2 = array('id_mobil' => $data->id_mobil);

		$data2 = array('status' => 'Tersedia');

		$this->rental_model->update_data('mobil', $data2,$where2);
		$this->rental_model->delete_data($where,'rental');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			Transaksi Berhasil <strong>Dibatalkan!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('transaksi');

	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */