<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct() {
        parent::__construct();

		$this->load->model('Daftar_model');
    }	






	public function ceknimnim(){
		 if( $this->Daftar_model->nim_sudah_terdaftar( $this->input->post('nimanggotanya') ) )
		 { echo "1"; }
   		 else 
   		 { echo "0"; }
	}




}

?>
