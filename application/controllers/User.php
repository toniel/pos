<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		# code...
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$hasil = $this->user_model->login($username,$password);

		// num_rows() method untuk mengetahui jumlah baris dari hasil query select di database
		if ($hasil->num_rows() > 0) {
			# code...
			foreach ($hasil->result() as $row) {
				# code...
				$data_session = array(
					'id_user'  => $row->id_user,
					'username' => $row->username,
					'hak_akses' => $row->hak_akses
				);
				
				$this->session->set_userdata($data_session);
			}
			redirect('barang');
		}else{
			$this->load->view('login');
		}	
	}

	public function logout()
	{
		
		// sess_destroy menghapus semua session yg tersimpan
		$this->session->sess_destroy();
		$this->load->view('login');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */