<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

	public function show()
	{
		# code...
		return $this->db->get('kategori')->result();
	}

	public function find($id)
	{
		# code...
		return $this->db->get_where('kategori', array('id_kategori'=>$id))->row();
	}

	public function update($id,$data)
	{
		# code...
		$this->db->update('kategori', $data, array('id_kategori'=>$id));
	}
	public function delete($id)
	{
		# code...
		$this->db->delete('kategori', array('id_kategori'=>$id));
	}
}

/* End of file Kategori_model.php */
/* Location: ./application/models/Kategori_model.php */