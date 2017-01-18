<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('daftar_model');
	}

	public function index()
	{
		$data['pengurus'] = $this->daftar_model->ambil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/nav');	
		$this->load->view('kontak',$data);
		$this->load->view('templates/footer');
	}

	function tambah(){
		$this->load->view('f_kontak');
	}


	function tambah_aksi(){
		$nama = $this->input->post('nama_pengurus');
		$telepon = $this->input->post('telepon');
		$alamat = $this->input->post('alamat');
		$keterangan= $this->input->post('keterangan');

		$data = array(
			'nama_pengurus' => $nama,
			'telepon' => $telepon,
			'alamat' => $alamat,
			'keterangan' => $keterangan
			);

		$this->daftar_model->input_data($data,'pengurus');
		redirect('kontak');
	}

		function hapus($id_pengurus){
		$where = array('id_pengurus' => $id_pengurus);
		$this->daftar_model->hapus_data($where,'pengurus');
		redirect('kontak');
	}

}
