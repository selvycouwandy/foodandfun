<?php

class Daftar_model extends CI_Model{


	public function __contruct(){
		parent::_construct();

	}

	public function insert_user()
	{
		$data =
		[	'namalengkap'		=> $this->input->post('namalengkap'),
			'nim'				=> $this->input->post('nim'),
			'username'			=> $this->input->post('username'),
			'alamat'			=> $this->input->post('alamat'),
			'telepon'			=> $this->input->post('telepon'),
			'email'				=> $this->input->post('email'),
			];

		$this->db->insert('pendaftaran', $data);



	}
}