<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_model');
	}

	public function index()
	{
		$kategori = $this->kategori_model->show();
		$content  = $this->load->view('list_kategori', compact('kategori'), TRUE);
		$this->load->view('template', compact('content'));	

	}

	public function create()
	{
		# code...
		$content = $this->load->view('form_kategori', '', TRUE);
		$this->load->view('template', compact('content'));
	}
	public function edit($id)
	{
		# code...
		$kategori = $this->kategori_model->find($id);
		$content = $this->load->view('form_kategori', compact('kategori'), TRUE);
		$this->load->view('template', compact('content'));

	}

	public function update()
	{
		# code...
		$id = $this->input->post('id_kategori');
		$data = array('nama_kategori' => $this->input->post('nama_kategori'),);
		$this->kategori_model->update($id,$data);
		redirect('kategori');
	}

	public function delete($id)
	{
		# code...
		$this->kategori_model->delete($id);
		redirect('kategori');
	}

}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */