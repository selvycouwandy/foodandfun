<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pendaftaran extends CI_Controller {


	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/nav');	
		$this->load->view('pendaftaran');
		$this->load->view('templates/footer');
	}
}
