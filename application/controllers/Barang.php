<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('barang_model');
		$this->load->model('kategori_model');
	}

	public function index()
	{
		$barangs = $this->barang_model->show();
		$content = $this->load->view('list_barang',compact('barangs'),TRUE);
		$this->load->view('template',compact('content'));
	}

	public function create()
	{
		# code...
		$kategories = $this->kategori_model->show();
		$content = $this->load->view('form_barang',compact('kategories'),TRUE);
		$this->load->view('template',compact('content'));
	}

	public function store()
	{
		# code...
		$data = array(
						'nama_barang'=>$this->input->post('nama_barang'),
						'id_kategori'=>$this->input->post('id_kategori'),
						'harga'=>$this->input->post('harga'),
						'stok'=>$this->input->post('stok'),
					);
		$this->barang_model->save($data);
		$this->session->set_flashdata('status','Data berhasil disimpan');
		redirect('barang');
		
	}

	public function edit($id)
	{
		# code...
		$barang = $this->barang_model->find($id);
		$content = $this->load->view('form_barang',compact('barang'),TRUE);
		$this->load->view('template',compact('content'));

	}

	public function update()
	{
		# code...
		// menangkap id dari form 
		$id = $this->input->post('id_barang');
		$data = array(
						'nama_barang' =>$this->input->post('nama_barang'),
						'harga'=>$this->input->post('harga'),
						'stok'=>$this->input->post('stok'), 
					);
		$this->barang_model->update($id,$data);
		$this->session->set_flashdata('status','Data berhasil diupdate');
		redirect('barang');

	}

	public function delete($id)
	{
		# code...
		$this->barang_model->delete($id);
		$this->session->set_flashdata('status','Data berhasil dihapus');
		redirect('barang');
	}

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */