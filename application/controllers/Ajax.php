<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct() {
        parent::__construct();

		$this->load->model('Akun_model');
    }	




	public function ceknama(){
		 if( $this->Daftar_model->username_user_sudah_terdaftar( $this->input->post('nimanggotanya') ) )
		 { echo "1"; }
   		 else 
   		 { echo "0"; }
	}

	public function ceknimnim(){
		 if( $this->Daftar_model->nim_sudah_terdaftar( $this->input->post('usernameanggotanya') ) )
		 { echo "1"; }
   		 else 
   		 { echo "0"; }
	}




}

?>