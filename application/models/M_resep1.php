<?php

class M_resep1 extends CI_Model{
		public function __contruct(){
		parent::_construct();

	}

	function tampil_info(){
		$this->db->select('*');
		//$this->db->from('resep');
		$this->db->order_by("id","desc");
		return $this->db->get('resep1');
	}

	function ambil_data(){
		return $this->db->get('resep1');
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