<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rental_model extends CI_Model {

	public function tampil_data($table)
	{
		return $this->db->get($table);
	}


	public function insert_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
	public function get_where($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	public function tampil_data2($table)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join('users','users.id_users = rental.id_users');
		$this->db->join('mobil','mobil.id_mobil = rental.id_mobil');

		return $this->db->get();
	}
	public function detail_data2($where)
	{
		$this->db->select('*');
		$this->db->from('rental');
		$this->db->join('users','users.id_users = rental.id_users');
		$this->db->join('mobil','mobil.id_mobil = rental.id_mobil');
		$this->db->where($where);
		$query =  $this->db->get();

		return $query->result();
	}


	public function update_data($table,$data,$where)
	{
		$this->db->update($table,$data,$where);
	} 
	
	

	public function delete_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function ambil_id_rental($id)
	{
		$result = $this->db->where('id_rental',$id)->get('rental');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	} 
	

	public function downloadPembayaran($id)
	{
		$query = $this->db->get_where('rental',array('id_rental' => $id));
		return $query->row_array();
	}




}

/* End of file Rental_model.php */
/* Location: ./application/models/Rental_model.php */