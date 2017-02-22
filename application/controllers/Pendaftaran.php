<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pendaftaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('daftar_model');
        $this->load->helper('url');
	}
	
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/nav');	
		$this->load->view('pendaftaran');
		$this->load->view('templates/footer');
	}
	
	public function prosespendaftaran(){
		$namalengkap = $this->input->post('namalengkap');
		$telepon = $this->input->post('telepon');
		$alamat = $this->input->post('alamat');
		$nim = $this->input->post('nim');
		$email = $this->input->post('email');

		$data = array(
			'namalengkap' => $namalengkap,
			'telepon' => $telepon,
			'alamat' => $alamat,
			'nim' => $nim,
			'email' => $email
			);
		$this->daftar_model->input_data($data,'pendaftaran');
		redirect('Home');
	}
}
