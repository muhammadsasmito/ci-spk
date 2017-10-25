<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif_model extends CI_Model {
	 
	public function tambah_data($data)
	{
		# code...
		$this->db->insert('alternatif',$data);
		return TRUE;
	}

	public function ubah_data($data,$id)
	{
		# code...
		$this->db->where('id', $id);
		$this->db->update('alternatif', $data);
		return TRUE;
	}

	public function baca_alternatif($id)
	{
		# code...
		$query = $this->db->get_where('alternatif',array(
			'id' => $id
		));
		return $query->row();
	}

	public function data_alternatif()
	{
		# code...
		$query = $this->db->get('alternatif');
		return $query->result();
	}
	
	public function hapus_data($id)
	{
		# code...
		$this->db->delete('alternatif', array('id' => $id));
		return TRUE;
	}
}
