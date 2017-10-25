<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif_model extends CI_Model {
	 
	public function tambah_data($data)
	{
		# code...
		$this->db->insert('alternatif',$data);
		return TRUE;
	}

	public function data_alternatif()
	{
		# code...
		$query = $this->db->get('alternatif');
		return $query->result();
	}
}
