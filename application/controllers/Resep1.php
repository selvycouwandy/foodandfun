<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep1 extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_resep1');
        $this->load->helper('url');
	}


	public function index()
	{
		$data['resep1'] = $this->m_resep1->tampil_info()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/nav');	
		$this->load->view('resep1',$data);
		$this->load->view('templates/footer');
	}

	public function tampilandetail()
	{
		$idresep=$this->input->get('id', TRUE);
		$where = array('id' => $idresep);
		$data['resep1'] = $this->m_resep1->edit_data($where,'resep1')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/nav');	
		$this->load->view('tampilanresep1',$data);
		$this->load->view('templates/footer');
	}
}
