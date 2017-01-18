<?php 


class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('daftar_model');
		$this->load->helper('url');

	}


	function tambah(){
		$this->load->view('f_kontak');
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama_pengurus');
		$nama = $this->input->post('telepon');
		$alamat = $this->input->post('alamat');
		$keterangan= $this->input->post('keterangan');

		$data = array(
			'nama_pengurus' => $nama,
			'telepon' => $telepon,
			'alamat' => $alamat,
			'keteragan' => $keterangan
			);
		$this->data_model->input_data($data,'pengurus');
		redirect('kontak');
	}

		function hapus($id){
		$where = array('pengurus' => $id);
		$this->data_model->hapus_data($where,'pengurus');
		redirect('kontak');
	}


}