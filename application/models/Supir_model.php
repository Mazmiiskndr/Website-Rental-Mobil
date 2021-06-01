<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supir_model extends CI_Model {

	public function get_jumlah_supir()
	{
		$sql = "SELECT count(id_supir) as id_supir FROM supir";
		$result = $this->db->query($sql);
		return $result->row()->id_supir;
	}


	public function tampil_data($table)
	{
		return $this->db->get($table);
	}


	public function insert_supir($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	} 

	public function ambil_id_supir($id)
	{
		$result = $this->db->where('id_supir',$id)->get('supir');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	} 

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}




}
 
/* End of file Type_model.php */
/* Location: ./application/models/Type_model.php */