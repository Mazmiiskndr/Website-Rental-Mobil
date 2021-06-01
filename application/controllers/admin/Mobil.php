<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    } 

 
	public function index()
	{
		$data['title'] = "Data Mobil | Rental Mobil";
		$data['mobil'] = $this->db->query("SELECT * FROM type t, mobil mb WHERE t.kode_type=mb.kode_type")->result();
		$data['type'] = $this->type_model->tampil_data('type')->result();
		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/mobil");
		$this->load->view("templates_admin/footer");
	}

	public function detail_mobil($id)
	{
		$data['detail'] = $this->mobil_model->ambil_id_mobil($id);
		
		$data['title'] = "Detail Mobil | Rental Mobil";
		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/detail_mobil");
		$this->load->view("templates_admin/footer");

	}

	public function tambah_data_mobil()
	{
		$this->_rulesMobil();
		if($this->form_validation->run() == false){
			$this->index();
		}else{

		$kode_type 			= htmlspecialchars($this->input->post('kode_type'));
	
		$merk 				= htmlspecialchars($this->input->post('merk'));
		$warna 				= htmlspecialchars($this->input->post('warna'));
		$harga 				= htmlspecialchars($this->input->post('harga'));
		$denda 				= htmlspecialchars($this->input->post('denda'));
		$bahan_bakar 		= htmlspecialchars($this->input->post('bahan_bakar'));
		$gear 				= htmlspecialchars($this->input->post('gear'));
		$ac 				= htmlspecialchars($this->input->post('ac'));
		$mesin 				= htmlspecialchars($this->input->post('mesin'));
		$kursi 				= htmlspecialchars($this->input->post('kursi'));
		$tahun 				= htmlspecialchars($this->input->post('tahun'));
		$status 			= htmlspecialchars($this->input->post('status'));


		$gambar 				= $_FILES['gambar']['name'];

			if($gambar){
				$config ['upload_path'] = './assets/uploads/mobil';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				
				if( $this->upload->do_upload('gambar') ){
					$gambar = $this->upload->data('file_name');
					$this->db->set('gambar',$gambar);
				}else{
					echo "Photo Mobil Gagal Diupload!";

				}
			}
		
 

			$data = array(
				'kode_type' 		=> $kode_type,
				'merk' 				=> $merk,
				'warna' 			=> $warna,
				'harga' 			=> $harga,
				'denda' 			=> $denda,
				'bahan_bakar' 		=> $bahan_bakar,
				'gear' 				=> $gear,
				'ac' 				=> $ac,
				'mesin' 			=> $mesin,
				'kursi' 			=> $kursi,
				'tahun' 			=> $tahun,
				'status' 			=> $status,
				'gambar' 			=> $gambar


			);

			$this->mobil_model->insert_mobil($data,'mobil');
			$this->session->set_flashdata('pesan','
				<div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
  					Data Mobil Berhasil di <strong>Tambahkan!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/mobil');
		}

	}

	public function edit_mobil($id)
	{
		$data['detail'] = $this->mobil_model->ambil_id_mobil($id);
		$data['type'] = $this->type_model->tampil_data('type')->result();

		$data['title'] = "Update Mobil | Rental Mobil";
		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/update_mobil");
		$this->load->view("templates_admin/footer");
	}

	public function update_mobil_aksi()
	{
		
			$id_mobil 			= $this->input->post('id_mobil');
		
			$kode_type 			= htmlspecialchars($this->input->post('kode_type'));
			$merk 				= htmlspecialchars($this->input->post('merk'));
			$warna 				= htmlspecialchars($this->input->post('warna'));
			$harga 				= htmlspecialchars($this->input->post('harga'));
			$denda 				= htmlspecialchars($this->input->post('denda'));
			$bahan_bakar 		= htmlspecialchars($this->input->post('bahan_bakar'));
			$gear 				= htmlspecialchars($this->input->post('gear'));
			$ac 				= htmlspecialchars($this->input->post('ac'));
			$mesin 				= htmlspecialchars($this->input->post('mesin'));
			$kursi 				= htmlspecialchars($this->input->post('kursi'));
			$tahun 				= htmlspecialchars($this->input->post('tahun'));
			$status 			= htmlspecialchars($this->input->post('status'));
			$gambar 				= $_FILES['gambar']['name'];

			if($gambar){
				$config ['upload_path'] = './assets/uploads/mobil';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				
				if( $this->upload->do_upload('gambar') ){
					$gambar = $this->upload->data('file_name');
					$this->db->set('gambar',$gambar);
				}else{
					echo "Photo Mobil Gagal Diupload!";

				}
			}

			$data = array(
		
				'kode_type' 		=> $kode_type,
				'merk' 				=> $merk,
				'warna' 			=> $warna,
				'harga' 			=> $harga,
				'denda' 			=> $denda,
				'bahan_bakar' 		=> $bahan_bakar,
				'gear' 				=> $gear,
				'ac' 				=> $ac,
				'mesin' 			=> $mesin,
				'kursi' 			=> $kursi,
				'tahun' 			=> $tahun,
				'status' 			=> $status,

			);

			$where = array('id_mobil' => $id_mobil);

			$this->mobil_model->update_data($where,$data,'mobil');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Mobil Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/mobil');



		
	}

	public function delete_mobil($id)
	{
		$where = array('id_mobil' => $id);
		$this->mobil_model->hapus_data($where,'mobil');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data Mobil Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/mobil');
	}

	public function type_mobil()
	{
		$data['title'] = "Type Mobil | Rental Mobil";
		$data['type'] = $this->type_model->tampil_data('type')->result();
		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/type_mobil");
		$this->load->view("templates_admin/footer");
	}

	public function tambah_type_mobil()
	{

		$data['type'] = $this->type_model->tampil_data('type')->result();
		$this->_rulesType();
		if($this->form_validation->run() == false){
			$this->type_mobil();
		}else{

	
			$kode_type 				= htmlspecialchars($this->input->post('kode_type'));
			$nama_type 				= htmlspecialchars($this->input->post('nama_type'));
		
 

			$data = array(
				'kode_type' 		=> $kode_type,
				'nama_type' 		=> $nama_type

			);

			$this->type_model->insert_type($data,'type');
			$this->session->set_flashdata('pesan','
				<div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
  					Data Type Mobil Berhasil di <strong>Tambahkan!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/mobil/type_mobil');
		}
		
	}

	public function delete_type($id)
	{
		$where = array('id_type' => $id);
		$this->type_model->hapus_data($where,'type');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data Type Mobil Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/mobil/type_mobil');
	}


	public function edit_type($id)
	{
		$data['detail'] = $this->type_model->ambil_id_type($id);

		$data['title'] = "Update Type Mobil | Rental Mobil";
		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/update_type");
		$this->load->view("templates_admin/footer");
	}

	public function update_type_mobil_aksi()
	{
		
			$id_type 			= $this->input->post('id_type');
		
			$kode_type 			= htmlspecialchars($this->input->post('kode_type'));
			$nama_type 				= htmlspecialchars($this->input->post('nama_type'));
			
			

			$data = array(
				
				'nama_type' 			=> $nama_type,
				'kode_type' 			=> $kode_type

			);

			$where = array('id_type' => $id_type);

			$this->type_model->update_data($where,$data,'type');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Type Mobil Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/mobil/type_mobil');



		
	}

	

	public function _rulesType()
	{
		$this->form_validation->set_rules('kode_type','Kode Type','required',
			[
				'required' => "Kode Type tidak boleh kosong",
			]
	);
		$this->form_validation->set_rules('nama_type','Nama Type','required',
			[
				'required' => "Nama Type tidak boleh kosong",
			]
	);

	}

	public function _rulesMobil()
	{
		$this->form_validation->set_rules('kode_type','Kode Type','required',
			[
				'required' => "Kode Type tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('merk','Merk Mobil','required',
			[
				'required' => "Merk Mobil Type tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('warna','Warna Mobil','required',
			[
				'required' => "Warna Mobil Type tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('harga','Harga Mobil','required',
			[
				'required' => "Harga Mobil Type tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('denda','Denda Mobil','required',
			[
				'required' => "Denda Mobil Type tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('bahan_bakar','Bahan Bakar','required',
			[
				'required' => "Bahan Bakar Mobil Type tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('gear','Transmisi Mobil','required',
			[
				'required' => "Transmisi Mobil Type tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('ac','AC Mobil','required',
			[
				'required' => "AC Mobil Type tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('mesin','Mesin Mobil','required',
			[
				'required' => "Mesin Mobil Type tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('tahun','Tahun Mobil','required',
			[
				'required' => "Tahun Mobil Type tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('status','Status Mobil','required',
			[
				'required' => "Status Mobil Type tidak boleh kosong",
			]
		);

	}


	public function search()
	{
		$data['title'] = "Type Mobil | Rental Mobil";
		$keyword = $this->input->post('keyword');
		$data['type'] = $this->mobil_model->get_keyword($keyword);
		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/type_mobil");
		$this->load->view("templates_admin/footer");
	}



}

/* End of file Mobil.php */
/* Location: ./application/controllers/admin/Mobil.php */
// $this->mobil_model->get_keyword($keyword);