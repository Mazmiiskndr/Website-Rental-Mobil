<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();  
		cek_login();
		cek_user();
	}


	public function index()
	{
		
		// $data['transaksi'] = $this->db->query("SELECT * FROM transaksi t, mobil mb, rental r, users usr WHERE t.id_rental=r.id_rental AND t.id_mobil=mb.id_mobil AND t.id_users=usr.id_users")->result();
		$data['transaksi'] = $this->transaksi_model->tampil_data('transaksi')->result();
		// var_dump($data);die;

		$data['title'] = "Data Transaksi | Rental Mobil";

		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/transaksi");
		$this->load->view("templates_admin/footer");
	}

	public function detail_transaksi($id)
	{
		$where = array('id_transaksi' => $id);
		$data['detail'] = $this->transaksi_model->detail_data2($where);
		// $data['detail'] = $this->db->query("SELECT * FROM transaksi t, rental r, mobil m, users u WHERE t.id_rental=r.id_rental AND t.id_users=u.id_users AND t.id_mobil=m.id_mobil AND t.id_transaksi='$id' ORDER BY id_transaksi DESC")->result();
		// $data['detail'] = $this->db->query("SELECT * FROM transaksi t, rental r WHERE t.id_rental=r.id_rental  AND t.id_transaksi='$id' ORDER BY id_transaksi DESC")->result();
		// var_dump($data);die;
		
		$data['title'] = "Detail Transaksi | Rental Mobil";
		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/detail_transaksi");
		$this->load->view("templates_admin/footer");

	}

	public function pembayaran($id)
	{
		$where = array('id_transaksi' => $id);
		$data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE id_transaksi = '$id'")->result();

		$data['title'] = "Data Pembayaran | Rental Mobil";

		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/konfirmasi_pembayaran");
		$this->load->view("templates_admin/footer");
	}

	public function delete_transaksi($id)
	{
		$where = array('id_transaksi' => $id);
		$this->transaksi_model->hapus_data($where,'transaksi');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Transaksi Berhasil di <strong>Hapus!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('admin/transaksi');
	}


	public function konfirmasi_pembayaran_aksi()
	{
		
		$id_transaksi 		= $this->input->post('id_transaksi');
		$status_pembayaran 	= htmlspecialchars($this->input->post('status_pembayaran'));

		$data = array(

			'status_pembayaran' 	=> $status_pembayaran

		);

		$where = array('id_transaksi' => $id_transaksi);

		$this->transaksi_model->update_data($where,$data,'transaksi');

		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			Pembayaran Berhasil di <strong>Konfirmasi!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('admin/transaksi');
		
	}

	public function download_bukti_pembayaran($id)
	{
		$this->load->helper('download');
		$filePembayaran = $this->transaksi_model->downloadPembayaran($id);
		$file = 'assets/uploads/bukti_pembayaran/'.$filePembayaran['bukti_pembayaran'];
		force_download($file, null);
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/admin/Transaksi.php */