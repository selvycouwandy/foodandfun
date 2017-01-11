<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	public function __construct(){
	parent::__construct();
	$this->load->model('Daftar_model');
	}

	public function pendaftaran(){
		$this->Daftar_model->insert_user(); //
		redirect('home');
	}

}	