<?php

class M_home extends CI_Model{

	function tampil_info(){
		return $this->db->get('kegiatan');
	}

	function ambil_data(){
		return $this->db->get('kegiatan');
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

	function tampil_s(){
		return $this->db->get('struktur');
	}

	function edit_s($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_s($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}