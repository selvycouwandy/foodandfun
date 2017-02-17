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
			'alamat'			=> $this->input->post('alamat'),
			'telepon'			=> $this->input->post('telepon'),
			'email'				=> $this->input->post('email'),
			'tanggallahir'		=> $this->input->post('tanggallahir'),
			];

		$this->db->insert('pendaftaran', $data);
	}


    public function nim_sudah_terdaftar( $nim ){
        $query = $this->db->get_where( 'pendaftaran', array( 'nim' => $nim) );
        if( !empty( $query->row_array() ) ) {
            return true;
        }
        return false;
    }

    function tampil_info(){
		return $this->db->get('pendaftaran');
	}
}
