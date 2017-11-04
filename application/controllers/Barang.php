<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('barang_model');
		$this->load->model('kategori_model');
		//jika tidak ada session dg nama username maka menuju halaman user
		//atau jika hak akses bukan admin menuju halaman user
		if (!$this->session->has_userdata('username')|| $this->session->userdata('hak_akses')!='admin') {
			# code...
			redirect('user');
		}
	}

	public function index()
	{
		$barangs = $this->barang_model->show();
		$judul = 'Barang';
		$content = $this->load->view('list_barang',compact('barangs'),TRUE);
		$this->load->view('template',compact('content','judul'));
	}

	public function create()
	{
		# code...

		$kategori = $this->kategori_model->show();
		$judul = 'Tambah Barang';
		$content = $this->load->view('form_barang',compact('kategori'),TRUE);
		$this->load->view('template',compact('content','judul'));
	}

	public function store()
	{
		# code...

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 2048;

		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar');

		$hasil = $this->upload->data();



		//mengisi nilai
		$nama_file =$this->session->userdata('username');
		$_POST['gambar']=$nama_file.'.jpg';


		$this->barang_model->save($this->input->post());
		$this->session->set_flashdata('status','Data berhasil disimpan');
		redirect('barang');

	}

	public function edit($id)
	{
		# code...
		$judul = 'Edit Barang';
		$kategori = $this->kategori_model->show();
		$barang = $this->barang_model->find($id);
		$content = $this->load->view('form_barang',compact('barang','kategori'),TRUE);
		$this->load->view('template',compact('content','judul'));

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
						'id_kategori'=>$this->input->post('id_kategori'),
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
