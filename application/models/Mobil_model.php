<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil_model extends CI_Model {

	public function get_jumlah_mobil()
	{
		$sql = "SELECT count(id_mobil) as id_mobil FROM mobil";
		$result = $this->db->query($sql);
		return $result->row()->id_mobil;
	}


	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function get_data($limit,$start)
	{
		$query = $this->db->get('mobil',$limit,$start);
		return $query;
	}
	public function get_data2($limit,$start)
	{
		$query = $this->db->get('mobil',$limit,$start);
		return $query;
	}
	public function count_mobil()
	{
		$query = $this->db->get('mobil')->num_rows();
		return $query;
	}


	public function insert_mobil($data,$table)
	{
		$this->db->insert($table,$data);
	} 

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	} 

	public function update_data2($table,$data,$where)
	{
		$this->db->update($table,$data,$where);
	}



	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function ambil_id_mobil($id)
	{
		$result = $this->db->where('id_mobil',$id)->get('mobil');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	} 

	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('type');
		$this->db->like('kode_type',$keyword);
		$this->db->or_like('nama_type',$keyword);
		return $this->db->get()->result();
	}

	// public function ambil_id_mobil($id)
	// {
	// 	$this->db->select('mobil.id_mobil,nama_mobil');
	// 	$this->db->from('mobil');
	// 	$this->db->join('type', 'mobil.id_mobil = type.id_type');
	// 	$result =$this->db->where('mobil.id_mobil', $id);
	// 	if($result->num_rows() > 0){
	// 		return $result->result();
	// 	}else{
	// 		return false;
	// 	}
	// 	return $this->db->get()->result();
	// }




}
 
/* End of file Type_model.php */
/* Location: ./application/models/Type_model.php */