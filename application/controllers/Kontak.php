<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->model('daftar_model');
        $this->load->helper('url');
	}


	public function index()
	{
		$data['kontak'] = $this->daftar_model->tampil_kontak()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/nav');	
		$this->load->view('kontak',$data);
		$this->load->view('templates/footer');
	}
}
