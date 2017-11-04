<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function login($username,$password)
	{
		# code...
		return $this->db->get_where('user', array('username'=>$username,'password'=>$password));
	}

	public function show()
	{
		# code...
		return $this->db->get('user')->result();
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */
