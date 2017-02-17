<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_resep extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_resep');
        $this->load->helper('url');
	}

	public function index()
	{
		if(!isset($_SESSION['login'])) redirect(base_url().'admin');
		$data['resep'] = $this->m_resep->tampil_info()->result();
		$this->load->view('templates/header.php');
		$this->load->view('templates/admin_nav.php');
		$this->load->view('admin_resep',$data);
		$this->load->view('templates/footer.php');
	}

	function tambah()
	{
	$this->load->view('t_resep');
	}

	function tambah_aksi()
	{
		$nama = $this->input->post('nama');
		$link = $this->input->post('link');

		$data = array(
			'nama' => $nama,
			'link' => $link,
			);
		$this->m_resep->input_data($data,'resep');
		redirect('admin_resep');
	}


	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_resep->hapus_data($where,'resep');
		redirect('admin_resep');
	}

	function edit($id)
	{
	$where = array('id' => $id);
	$data['resep'] = $this->m_resep->edit_data($where,'resep')->result();
	$this->load->view('u_resep',$data);
	}
	
	function update()
	{
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$link = $this->input->post('link');

	$data = array(
		'nama' => $nama,
		'link' => $link,
	);

	$where = array(
		'id' => $id
	);
	$this->m_resep->update_data($where,$data,'resep');
	redirect('admin_resep');
	}
}