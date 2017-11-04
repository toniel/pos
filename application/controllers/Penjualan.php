<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
	}

	public function index()
	{
		$judul ='Transaksi Penjualan';
		$barang = $this->barang_model->show();
		$content =  $this->load->view('penjualan', compact('barang'), TRUE);
		$this->load->view('template', compact('content','judul'));
	}

	public function add_to_cart()
	{
		# code...
		
		$id = $this->input->post('id_barang');
		$qty = $this->input->post('qty');
		$barang = $this->barang_model->find($id);

		$data = array(
		        'id'      => $id,
		        'qty'     => $qty,
		        'price'   => $barang->harga,
		        'name'    => $barang->nama_barang,
		        
		);

		$this->cart->insert($data);
		redirect('penjualan/cart_view');
	}

	public function cart_view()
	{
		# code...
		$judul = 'List Cart';
		$content = $this->load->view('cart_view','',TRUE);
		$this->load->view('template',compact('content','judul'));
	}

}

/* End of file Penjualan.php */
/* Location: ./application/controllers/Penjualan.php */