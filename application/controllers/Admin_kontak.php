<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_kontak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('daftar_model');
        $this->load->helper('url');
	}

	public function index()
	{
		if(!isset($_SESSION['login'])) redirect(base_url().'admin');
		$data['kontak'] = $this->daftar_model->tampil_kontak()->result();
		$this->load->view('templates/header.php');
		$this->load->view('templates/admin_nav.php');
		$this->load->view('admin_kontak',$data);
		$this->load->view('templates/footer.php');
		
	}

	function tambah()
	{
	$this->load->view('templates/header');
	$this->load->view('t_kontak');
	}

	function tambah_aksi()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$telp = $this->input->post('telp');
		$alamat = $this->input->post('alamat');
		$ket = $this->input->post('ket');

		$data = array(
			'nama' => $nama,
			'telp' => $telp,
			'alamat' => $alamat,
			'ket' => $ket,
			);
		$this->daftar_model->input_data($data,'kontak');
		redirect('admin_kontak');
	}


	function hapus($id)
	{
		$where = array('id' => $id);
		$this->daftar_model->hapus_data($where,'kontak');
		redirect('admin_kontak');
	}

	function edit($id)
	{
		$this->load->view('templates/header');
	$where = array('id' => $id);
	$data['kontak'] = $this->daftar_model->edit_data($where,'kontak')->result();
	$this->load->view('u_kontak',$data);
	}
	
	function update()
	{
	$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$telp = $this->input->post('telp');
		$alamat = $this->input->post('alamat');
		$ket = $this->input->post('ket');

	$data = array(
		'nama' => $nama,
			'telp' => $telp,
			'alamat' => $alamat,
			'ket' => $ket,
	);

	$where = array(
		'id' => $id
	);
	$this->daftar_model->update_data($where,$data,'kontak');
	redirect('admin_kontak');
	}
}