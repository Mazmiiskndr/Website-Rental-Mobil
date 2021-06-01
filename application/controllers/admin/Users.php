<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }

	public function index()
	{
		$data['title'] = "Data Users | Rental Mobil";
		$data['users'] = $this->users_model->tampil_data('users')->result();
	
		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/users");
		$this->load->view("templates_admin/footer");
	}

	public function tambah_users()
	{
		$this->_rulesUsers();
		if($this->form_validation->run() == false){
			$this->index();
		}else{
			$nama 			= htmlspecialchars($this->input->post('nama'));
			$alamat 		= htmlspecialchars($this->input->post('alamat'));
			$email 			= htmlspecialchars($this->input->post('email'));
			$password 		= md5($this->input->post('password'));

			$no_ktp 		= htmlspecialchars($this->input->post('no_ktp'));
			$no_hp 			= htmlspecialchars($this->input->post('no_hp'));
			

			
		
 

				$data = array(
					'nama' 			=> $nama,
					'alamat' 		=> $alamat,
					'email' 		=> $email,
					'password'		=> $password,
					'no_ktp' 		=> $no_ktp,
					'no_hp' 		=> $no_hp,



				);

				$this->users_model->insert_users($data,'users');
				$this->session->set_flashdata('pesan','
					<div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
	  					Data Users Berhasil di <strong>Tambahkan!</strong>
	  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    					<span aria-hidden="true">&times;</span>
	  					</button>
					</div>
					');
				redirect('admin/users');
		}

	}



	public function edit_users($id)
	{
		$data['detail'] = $this->users_model->ambil_id_users($id);
	
		$data['title'] = "Edit Users | Rental Mobil";
		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/update_users");
		$this->load->view("templates_admin/footer");
	}

	public function update_users_aksi()
	{
			$id_users 			= $this->input->post('id_users');
			$email 			= htmlspecialchars($this->input->post('email'));
			$nama 			= htmlspecialchars($this->input->post('nama'));
			$alamat 		= htmlspecialchars($this->input->post('alamat'));
			$no_hp 			= htmlspecialchars($this->input->post('no_hp'));

			$no_ktp 		= htmlspecialchars($this->input->post('no_ktp'));

			$data = array(
				'nama' 			=> $nama,
				'alamat' 		=> $alamat,
				'email' 		=> $email,
				'no_ktp' 		=> $no_ktp,
				'no_hp' 		=> $no_hp

			);

			$where = array('id_users' => $id_users);

			$this->users_model->update_data($where,$data,'users');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Users Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/users');


	}

	public function delete_users($id)
	{
		$where = array('id_users' => $id);
		$this->users_model->hapus_data($where,'users');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data Users Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/users');
	}
 


	public function _rulesUsers()
	{
		$this->form_validation->set_rules('nama','Nama Users','required',
			[
				'required' => "Nama Users tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('email','Email','required|valid_email',
			[
				'required' => "Email tidak boleh kosong",
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

	}


}

/* End of file Users.php */
/* Location: ./application/controllers/admin/Users.php */