<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->model('daftar_model');
        $this->load->helper('url');
	}


	public function index()
	{
		$data['pendaftaran'] = $this->daftar_model->tampil_info()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/nav');	
		$this->load->view('anggota',$data);
		$this->load->view('templates/footer');
	}
}