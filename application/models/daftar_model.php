<?php 

class daftar_model extends CI_Model{
	function ambil_data(){
		return $this->db->get('pengurus');
	}

	public function insert_user()
	{
		$data =
		[	'id_pengurus'		=> $this->input->post('id_pengurus'),
			'nama_pengurus'		=> $this->input->post('nama_pengurus'),
			'telepon'			=> $this->input->post('telepon'),
			'alamat'			=> $this->input->post('alamat'),
			'keterangan'		=> $this->input->post('keterangan'),
			];

		$this->db->insert('pengurus', $data);
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

}