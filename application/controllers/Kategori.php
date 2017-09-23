<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function index()
	{
		
	}

	public function create()
	{
		# code...
		$content = $this->load->view('form_kategori', '', TRUE);
		$this->load->view('template', compact('content'));
	}

}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */