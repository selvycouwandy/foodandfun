<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('daftar_model');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/nav');	
		$this->load->view('pendaftaran');
		$this->load->view('templates/footer');
	}

	public function prosespendaftaran(){
//		var_dump($this->input->post('namalengkap'));
		$this->daftar_model->insert_user();
		redirect(base_url());
	}
	
}
