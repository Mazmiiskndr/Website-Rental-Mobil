<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type_model extends CI_Model {

	public function get_jumlah_type()
	{
		$sql = "SELECT count(id_type) as id_type FROM type";
		$result = $this->db->query($sql);
		return $result->row()->id_type;
	}


	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function insert_type($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	} 

	public function ambil_id_type($id)
	{
		$result = $this->db->where('id_type',$id)->get('type');
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