<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	public function show()
	{
		# active record
		// return $this->db->get('barang')->result();//active record

		#query builder
		// $sql="SELECT * FROM barang";
		// return $this->db->query($sql)->result();

		$this->db->select('*');
		$this->db->from('barang');
		$this->db->join('kategori', 'barang.id_kategori = kategori.id_kategori', 'left');
		return $this->db->get()->result();

	}

	public function save($data)
	{
		# code...
		$this->db->insert('barang', $data);
	}

	public function find($id)
	{
		# code...
		return $this->db->get_where('barang', array('id_barang'=>$id))->row();
	}

	public function update($id,$data)
	{
		# code...
		$this->db->where('id_barang',$id);
		$this->db->update('barang', $data);
	}

	public function delete($id)
	{
		# code...
	// 	$this->db->where('id_barang',$id);
	// 	$this->db->delete('barang');

		$this->db->delete('barang', array('id_barang'=>$id));

		// $sql = "DELETE FROM barang where id_barang=$.id";
		// $this->db->query($sql);
	}
	

}

/* End of file Barang_model.php */
/* Location: ./application/models/Barang_model.php */