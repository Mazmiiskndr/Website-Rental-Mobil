<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }


	public function index()
	{
		$data['jumlah_users'] = $this->login_model->get_jumlah_users();
		$data['jumlah_mobil'] = $this->mobil_model->get_jumlah_mobil();
		$data['jumlah_transaksi'] = $this->transaksi_model->get_jumlah_transaksi();
		$data['jumlah_type'] = $this->type_model->get_jumlah_type();
		$data['pendapatan'] = $this->transaksi_model->pendapatan();
		
		$data['mobil'] = $this->db->query("SELECT * FROM type t, mobil mb WHERE t.kode_type=mb.kode_type")->result();
		$data['type'] = $this->type_model->tampil_data('type')->result();
		$data['title'] = "Dashboard | Rental Mobil";
		$this->load->view("templates_admin/header",$data); 
		$this->load->view("templates_admin/topbar");	
		$this->load->view("templates_admin/sidebar");	
		$this->load->view("admin/dashboard");
		$this->load->view("templates_admin/footer");		
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */