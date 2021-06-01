<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function view($id)
	{
		$data['profile'] = $this->profile_model->ambil_id_profile($id);
		
		$data['title'] = "Detail Profile | Rental Mobil";
		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/profile");
		$this->load->view("templates_admin/footer");
	}


	public function setting($id)
	{
		$data['detail'] = $this->profile_model->ambil_id_profile($id);
	
		$data['title'] = "Account Setting | Rental Mobil";
		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/account_setting");
		$this->load->view("templates_admin/footer");
	}

	public function setting_aksi()
	{
	
			$id_users 		= $this->input->post('id_users');
			$nama 			= htmlspecialchars($this->input->post('nama'));
		
			$email 			= htmlspecialchars($this->input->post('email'));
			$alamat 		= htmlspecialchars($this->input->post('alamat'));
			$no_ktp 		= htmlspecialchars($this->input->post('no_ktp'));
			$no_hp 			= htmlspecialchars($this->input->post('no_hp'));
			
		
			$data = array(
				'nama' 			=> $nama,
				'email' 		=> $email,
				'alamat' 		=> $alamat,
				'no_ktp' 		=> $no_ktp,
				'no_hp' 		=> $no_hp,

			);

			$where = array('id_users' => $id_users);

			$this->profile_model->update_data($where,$data,'users');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Profile Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/profile/view/'.$this->session->userdata('id_users'));


	}


	public function ganti_password()
	{
		$data['title'] = "Ganti Password | Rental Mobil";

		$this->load->view("templates_admin/header",$data);
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/change_password");
		$this->load->view("templates_admin/footer");
	} 

	public function ganti_password_aksi()
	{
		$pass_baru 	= $this->input->post('pass_baru');
		$ulang_pass = $this->input->post('ulang_pass');

		$this->form_validation->set_rules('pass_baru','New Password','required|matches[ulang_pass]');
		$this->form_validation->set_rules('ulang_pass','Confirm Password','required');

		if( $this->form_validation->run() != false ){
			$id_users	= $this->input->post('id_users');
			$data 		= array('password' => md5($pass_baru));
			$id 		= array('email' => $this->session->userdata('email'));

			$this->users_model->update_password($id,$data,'users');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Password Berhasil <strong>Diupdate!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
				redirect('admin/profile/view/'.$this->session->userdata('id_users'));

		}else{
			$data['title'] = "Ganti Password | Rental Mobil";

			$this->load->view("templates_admin/header",$data);
			$this->load->view("templates_admin/topbar");	
			$this->load->view("templates_admin/sidebar");	
			$this->load->view("admin/change_password");
			$this->load->view("templates_admin/footer");
			

		} 



	}

}

/* End of file Profile.php */
/* Location: ./application/controllers/admin/Profile.php */