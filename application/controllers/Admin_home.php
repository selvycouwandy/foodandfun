<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');
		$this->load->helper('url'); 
	}

	public function index()
	{
		if(!isset($_SESSION['login'])) redirect(base_url().'admin');
		$data['kegiatan'] = $this->m_home->tampil_info()->result();
		$data['struktur'] = $this->m_home->tampil_s()->result();
		$this->load->view('templates/header.php');
		$this->load->view('templates/admin_nav.php');
		$this->load->view('admin_home',$data);
		$this->load->view('templates/footer.php');
	}

	function tambah()
	{
	$this->load->view('templates/header');
	$this->load->view('t_kegiatan');
	$this->load->view('templates/footer.php');	
	}

	function tambah_aksi()
	{
		$tanggal = $this->input->post('tanggal');
		$kegiatan = $this->input->post('kegiatan');

		$data = array(
			'tanggal' => $tanggal,
			'kegiatan' => $kegiatan,
			);
		$this->m_home->input_data($data,'kegiatan');
		redirect('admin_home');
	}


	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_home->hapus_data($where,'kegiatan');
		redirect('admin_home');
	}

	function edit($id)
	{
	$this->load->view('templates/Header');
	$where = array('id' => $id);
	$data['kegiatan'] = $this->m_home->edit_data($where,'kegiatan')->result();
	$this->load->view('u_kegiatan',$data);
	}
	
	function update()
	{
	$id = $this->input->post('id');
	$tanggal = $this->input->post('tanggal');
	$kegiatan = $this->input->post('kegiatan');

	$data = array(
		'tanggal' => $tanggal,
		'kegiatan' => $kegiatan,
	);

	$where = array(
		'id' => $id
	);

	$this->m_home->update_data($where,$data,'kegiatan');
	redirect('admin_home');
	}

	function update_s()
	{
	$id = $this->input->post('id');
	$ketua = $this->input->post('ketua');
	$sekretaris = $this->input->post('sekretaris');
	$pembimbing = $this->input->post('pembimbing');

	$data = array(
		'ketua' => $ketua,
		'sekretaris' => $sekretaris,
		'pembimbing' => $pembimbing,
	);

	$where = array(
		'id' => $id
	);

	$this->m_home->update_s($where,$data,'struktur');
	redirect('admin_home');
	}
}
