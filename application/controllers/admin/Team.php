<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }


	public function index()
	{
		$data['title'] = "Data Team | Rental Mobil";
		$data['team'] = $this->team_model->tampil_data('team')->result();
	
		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/team");
		$this->load->view("templates_admin/footer");
	}

	public function detail_team($id)
	{
		$data['detail'] = $this->team_model->ambil_id_team($id);
		
		$data['title'] = "Detail Team | Rental Mobil";
		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/detail_team");
		$this->load->view("templates_admin/footer");

	} 
	public function tambah_team()
	{
		$this->_rulesTeam();
		if($this->form_validation->run() == false){
			$this->index();
		}else{
			$nama 			= htmlspecialchars($this->input->post('nama'));
			$jabatan 		= htmlspecialchars($this->input->post('jabatan'));
			$email 			= htmlspecialchars($this->input->post('email'));
			$deskripsi 		= htmlspecialchars($this->input->post('deskripsi'));
			$gambar 				= $_FILES['gambar']['name'];

				if($gambar){
					$config ['upload_path'] = './assets/uploads/team';
					$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

					$this->load->library('upload', $config);
					
					if( $this->upload->do_upload('gambar') ){
						$gambar = $this->upload->data('file_name');
						$this->db->set('gambar',$gambar);
					}else{
						echo "Photo Team Gagal Diupload!";

					}
				}
		
 

				$data = array(
					'nama' 			=> $nama,
					'jabatan' 		=> $jabatan,
					'email' 		=> $email,
					'deskripsi' 	=> $deskripsi,
					'gambar' 		=> $gambar



				);

				$this->team_model->insert_team($data,'team');
				$this->session->set_flashdata('pesan','
					<div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
	  					Data Team Berhasil di <strong>Tambahkan!</strong>
	  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    					<span aria-hidden="true">&times;</span>
	  					</button>
					</div>
					');
				redirect('admin/team');
		}

	}

	public function edit_team($id)
	{
		$data['detail'] = $this->team_model->ambil_id_team($id);
	
		$data['title'] = "Edit Team | Rental Mobil";
		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/update_team");
		$this->load->view("templates_admin/footer");
	}

	public function update_team_aksi()
	{
	
			$id_team 		= $this->input->post('id_team');
			$nama 			= htmlspecialchars($this->input->post('nama'));
			$jabatan 		= htmlspecialchars($this->input->post('jabatan'));
			$email 			= htmlspecialchars($this->input->post('email'));
			$deskripsi 		= htmlspecialchars($this->input->post('deskripsi'));
			
			$gambar 		= $_FILES['gambar']['name'];

			if($gambar){
				$config ['upload_path'] = './assets/uploads/produk';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				
				if( $this->upload->do_upload('gambar') ){
					$gambar = $this->upload->data('file_name');
					$this->db->set('gambar',$gambar);
				}else{
					echo "Photo Team Gagal Diupload!";

				} 
			}

			$data = array(
				'nama' 			=> $nama,
				'jabatan' 		=> $jabatan,
				'email' 		=> $email,
				'deskripsi' 	=> $deskripsi

			);

			$where = array('id_team' => $id_team);

			$this->team_model->update_data($where,$data,'team');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Team Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/team');


	}

	public function delete_team($id)
	{
		$where = array('id_team' => $id);
		$this->team_model->hapus_data($where,'team');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data  Team Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/team');
	}
 


	public function _rulesTeam()
	{
		$this->form_validation->set_rules('nama','Nama Team','required',
			[
				'required' => "Nama Team tidak boleh kosong",
			]
		);

	
		$this->form_validation->set_rules('jabatan','Jabatan Team','required',
			[
				'required' => "Jabatan Team tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('email','Email','required|valid_email',
			[
				'required' => "Email tidak boleh kosong",
			]
		);



	}




}

/* End of file Supir.php */
/* Location: ./application/controllers/admin/Supir.php */