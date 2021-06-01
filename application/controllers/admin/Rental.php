<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rental extends CI_Controller { 

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }


	public function index()
	{
		
		$data['rental'] = $this->rental_model->tampil_data2('rental')->result();

		$data['title'] = "Data Rental | Rental Mobil";
	 
		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/rental");
		$this->load->view("templates_admin/footer");
	}
 
	public function detail_rental($id)
	{
		$where = array('id_rental' => $id);
		$data['detail'] = $this->rental_model->detail_data2($where);
		
		$data['title'] = "Detail Rental | Rental Mobil";
		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/detail_rental");
		$this->load->view("templates_admin/footer");

	}

	public function edit_rental($id)
	{
		$data['rental'] = $this->db->query("SELECT * FROM rental r, mobil m, users u WHERE r.id_mobil=m.id_mobil AND r.id_users=u.id_users AND r.id_rental='$id' ORDER BY id_rental DESC")->result();
		$data['title'] = "Detail Rental | Rental Mobil";
		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/edit_rental");
		$this->load->view("templates_admin/footer");
	}

	public function update_rental_aksi()
	{
		$id_rental 				= $this->input->post('id_rental');
		$tanggal_pengembalian 	= $this->input->post('tanggal_pengembalian');
		$status_rental 			= $this->input->post('status_rental');
		$status_pengembalian 	= $this->input->post('status_pengembalian');
		$tanggal_kembali 		= $this->input->post('tanggal_kembali');
		$status_pembayaran 		= $this->input->post('status_pembayaran');
		$denda 					= $this->input->post('denda');

		$x 						= strtotime($tanggal_pengembalian);
		$y						= strtotime($tanggal_kembali);
		$selisih				= abs($x - $y)/(60*60*24);
		$total_denda			= $selisih * $denda;
 

		$data = array(
			'tanggal_pengembalian' 	=> $tanggal_pengembalian,
			'status_rental'			=> $status_rental,
			'status_pengembalian'	=> $status_pengembalian,
			'status_pembayaran'		=> $status_pembayaran,
			'total_denda'			=> $total_denda
		); 

		$where = array(
			'id_rental'	=> $id_rental
		); 
		
		$this->rental_model->update_data('rental',$data,$where);
		if($status_rental == "Selesai"){
			$data = $this->rental_model->get_where($where,'rental')->row(); 
			$status = array( 
			'status' => 'Tersedia'
			);

			$id = array(
			'id_mobil' => $data->id_mobil
			);
 
			$this->mobil_model->update_data2('mobil',$status,$id);
		}else{
			$data = $this->rental_model->get_where($where,'rental')->row(); 
			$status = array( 
			'status' => 'Tidak Tersedia'
			);

			$id = array(
			'id_mobil' => $data->id_mobil
			);
 
			$this->mobil_model->update_data2('mobil',$status,$id);
		}
		$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show col-sm-12" role="alert">
  					Transaksi Berhasil <strong>Diupdate!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/rental');
			



		
	}



	public function delete_rental($id)
	{
		$where = array('id_rental' => $id);
		$data = $this->rental_model->get_where($where,'rental')->row(); 
		$where2 = array('id_mobil' => $data->id_mobil);

		$data2 = array('status' => 'Tersedia');

		$this->rental_model->update_data('mobil', $data2,$where2);
		$this->rental_model->delete_data($where,'rental');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Rental Berhasil di <strong>Hapus!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('admin/rental');
	}







}

/* End of file Rental.php */
/* Location: ./application/controllers/admin/Rental.php */