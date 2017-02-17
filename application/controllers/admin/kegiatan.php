<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kegiatan extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		//Load model
		$this->load->model('kegiatan_model');}

	public function index(){

		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$data['kegiatan'] 	= $this->kegiatan_model->show_kegiatan(); 			//untuk tampil database kegiatan	
		$this->load->view('kegiatan', $data);
		$this->load->view('templates/footer');
	}


}		

