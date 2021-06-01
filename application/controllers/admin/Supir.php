<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supir extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }


	public function index()
	{
		$data['title'] = "Data Supir | Rental Mobil";
		$data['supir'] = $this->supir_model->tampil_data('supir')->result();
	
		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/supir");
		$this->load->view("templates_admin/footer");
	}
	public function tambah_supir()
	{
		$this->_rulesSupir();
		if($this->form_validation->run() == false){
			$this->index();
		}else{
			$nama_supir 		= htmlspecialchars($this->input->post('nama_supir'));
			$alamat 			= htmlspecialchars($this->input->post('alamat'));
			$lembur 			= htmlspecialchars($this->input->post('lembur'));
			$tgl_lahir 			= htmlspecialchars($this->input->post('tgl_lahir'));

			$no_ktp 			= htmlspecialchars($this->input->post('no_ktp'));
			$no_hp 				= htmlspecialchars($this->input->post('no_hp'));
			


			$gambar 				= $_FILES['gambar']['name'];

				if($gambar){
					$config ['upload_path'] = './assets/uploads/supir';
					$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

					$this->load->library('upload', $config);
					
					if( $this->upload->do_upload('gambar') ){
						$gambar = $this->upload->data('file_name');
						$this->db->set('gambar',$gambar);
					}else{
						echo "Photo Supir Gagal Diupload!";

					}
				}
		
 

				$data = array(
					'nama_supir' 	=> $nama_supir,
					'alamat' 		=> $alamat,
					'lembur' 		=> $lembur,
					'tgl_lahir' 	=> $tgl_lahir,
					'no_ktp' 		=> $no_ktp,
					'no_hp' 		=> $no_hp,
					'gambar' 		=> $gambar



				);

				$this->supir_model->insert_supir($data,'supir');
				$this->session->set_flashdata('pesan','
					<div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
	  					Data Supir Berhasil di <strong>Tambahkan!</strong>
	  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    					<span aria-hidden="true">&times;</span>
	  					</button>
					</div>
					');
				redirect('admin/supir');
		}

	}

	public function edit_supir($id)
	{
		$data['detail'] = $this->supir_model->ambil_id_supir($id);
	
		$data['title'] = "Edit Supir | Rental Mobil";
		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/update_supir");
		$this->load->view("templates_admin/footer");
	}

	public function update_supir_aksi()
	{
	
			$id_supir 			= $this->input->post('id_supir');
			$nama_supir 		= htmlspecialchars($this->input->post('nama_supir'));
			$alamat 			= htmlspecialchars($this->input->post('alamat'));
			$lembur 			= htmlspecialchars($this->input->post('lembur'));
			$tgl_lahir 			= htmlspecialchars($this->input->post('tgl_lahir'));

			$no_ktp 			= htmlspecialchars($this->input->post('no_ktp'));
			$no_hp 				= htmlspecialchars($this->input->post('no_hp'));
			
			$gambar 			= $_FILES['gambar']['name'];

			if($gambar){
				$config ['upload_path'] = './assets/uploads/produk';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				
				if( $this->upload->do_upload('gambar') ){
					$gambar = $this->upload->data('file_name');
					$this->db->set('gambar',$gambar);
				}else{
					echo "Photo Supir Gagal Diupload!";

				} 
			}

			$data = array(
				'nama_supir' 	=> $nama_supir,
				'alamat' 		=> $alamat,
				'lembur' 		=> $lembur,
				'tgl_lahir' 	=> $tgl_lahir,
				'no_ktp' 		=> $no_ktp,
				'no_hp' 		=> $no_hp

			);

			$where = array('id_supir' => $id_supir);

			$this->supir_model->update_data($where,$data,'supir');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Supir Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/supir');


	}

	public function delete_supir($id)
	{
		$where = array('id_supir' => $id);
		$this->supir_model->hapus_data($where,'supir');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data  Supir Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/supir');
	}
 


	public function _rulesSupir()
	{
		$this->form_validation->set_rules('nama_supir','Nama Supir','required',
			[
				'required' => "Nama Supir tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('alamat','Alamat','required',
			[
				'required' => "Alamat tidak boleh kosong",
			]
		);
		
		$this->form_validation->set_rules('no_ktp','No. KTP','required',
			[
				'required' => "No. KTP tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('no_hp','No. HP','required',
			[
				'required' => "No. HP tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('tarif','Tarif','required',
			[
				'required' => "Tarif tidak boleh kosong",
			]
		);


	}




}

/* End of file Supir.php */
/* Location: ./application/controllers/admin/Supir.php */