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

	function tampil_kontak(){
		return $this->db->get('kontak');
	}

		function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
