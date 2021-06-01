<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lupa_password extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('email')){
			redirect('');
		}
		$this->form_validation->set_rules('email','email','trim|required|valid_email',
			['required' => "Email Tidak Boleh Kosong",
			'valid_email' => "Email Harus Valid"
			]
	);
		if($this->form_validation->run() == false){
			$data['title'] = 'Lupa Password';
			$this->load->view('templates_auth/header',$data);
			$this->load->view('auth/lupa_password');
			$this->load->view('templates_auth/footer');
		}else{
			$email = $this->input->post('email');
			$cek = $this->login_model->cek_email($email);
			if( $cek == FALSE ){

				$this->session->set_flashdata('pesan','
				<div style="color: red;" class="alert alert-danger alert-dismissible fade show" role="alert">
  					Email Belum  <strong>Terdaftar!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
				redirect('auth/lupa_password');
			}else{
				$this->session->set_userdata('id_users',$cek->id_users);
				$this->session->set_userdata('email',$cek->email);
				redirect('auth/lupa_password/changepassword');
			}
			
		}

	}

	public function changepassword()
	{
		$data['title'] = 'Ganti Passowrd';
		$this->load->view('templates_auth/header',$data);
		$this->load->view('auth/ganti_password');
		$this->load->view('templates_auth/footer');
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
				redirect('auth/login');

		}else{
			$data['title'] = 'Ganti Password';
			$this->load->view('templates_auth/header',$data);
			$this->load->view('auth/ganti_password');
			$this->load->view('templates_auth/footer');
			

		} 



	}
}

/* End of file Lupa_password.php */
/* Location: ./application/controllers/auth/Lupa_password.php */