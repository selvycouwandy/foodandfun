<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_resep');
        $this->load->helper('url');
	}


	public function index()
	{
		$data['resep'] = $this->m_resep->tampil_info()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/nav');	
		$this->load->view('resep',$data);
		$this->load->view('templates/footer');
	}
}
