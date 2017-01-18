<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_kontak extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('daftar_model');
	}


	public function index()
	{
		$this->load->view('f_kontak');
		$this->load->view('templates/header');
		$this->load->view('templates/nav');	
		$this->load->view('templates/footer');
	}
}