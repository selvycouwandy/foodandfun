<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_home');
        	$this->load->helper('url');
	}


	public function index()
	{
		$data['kegiatan'] = $this->m_home->tampil_info()->result();
		$data['struktur'] = $this->m_home->tampil_s()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/nav');	
		$this->load->view('Home',$data);
		$this->load->view('templates/footer');
	}
}

