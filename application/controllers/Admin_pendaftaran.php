<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_pendaftaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('daftar_model');
        $this->load->helper('url');
	}

	public function index()
	{
		if(!isset($_SESSION['login'])) redirect(base_url().'admin');
		$data['pendaftaran'] = $this->daftar_model->tampil_info()->result();
		$this->load->view('templates/header.php');
		$this->load->view('templates/admin_nav.php');
		$this->load->view('admin_pendaftaran',$data);
		$this->load->view('templates/footer.php');
		
	}


	function hapus($nim)
	{
		$where = array('nim' => $nim);
		$this->daftar_model->hapus_data($where,'pendaftaran');
		redirect('admin_pendaftaran');
	}

	function edit($nim)
	{
		$this->load->view('templates/header');
	$where = array('nim' => $nim);
	$data['pendaftaran'] = $this->daftar_model->edit_data($where,'pendaftaran')->result();
	$this->load->view('u_pendaftaran',$data);
	}
	
	function update()
	{
	$nim = $this->input->post('nim');
		$namalengkap = $this->input->post('namalengkap');
		$telepon = $this->input->post('telepon');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');

	$data = array(
		'namalengkap' => $namalengkap,
			'telepon' => $telepon,
			'alamat' => $alamat,
			'email' => $email,
	);

	$where = array(
		'nim' => $nim
	);
	$this->daftar_model->update_data($where,$data,'pendaftaran');
	redirect('admin_pendaftaran');
	}
}