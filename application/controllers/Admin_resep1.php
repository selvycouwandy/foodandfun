<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_resep1 extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_resep1');
        $this->load->helper('url');
		
		//for upload file image di tambah_aksi()
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		if(!isset($_SESSION['login'])) redirect(base_url().'admin');
		$data['resep1'] = $this->m_resep1->tampil_info()->result();
		$this->load->view('templates/header.php');
		$this->load->view('templates/admin_nav.php');
		$this->load->view('Admin_resep1',$data);
		$this->load->view('templates/footer.php');
	}

	

	
	public function tambah2()
	{
	
	if(!isset($_SESSION['login'])) redirect(base_url().'admin');		
	$this->load->view('templates/header.php');
	$this->load->view('templates/admin_nav.php');
	
	if (isset($data)){
	$this->load->view('tambah_resep1',$data);}
	else {$this->load->view('tambah_resep1');	}
	
	$this->load->view('templates/footer.php');
	}	
	
	public function upload_n_tmbhaksi(){
		//upload file dulu
		$path_upload_img ="";
		$config['upload_path']          = './assets/img/uploadresep/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;

                $this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('fileToUpload'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        //$this->load->view('upload_form', $error);
						$this->tambah2($error);
                }
                else
                {
                        //$data = array('upload_data' => $this->upload->data());
						 //$data2=$this->upload->data('fileToUpload');
						 $data2=$this->upload->data();

                        //$this->load->view('upload_success', $data);
						$path_upload_img=$data2['file_name'];
						$this->tambah_aksi2($path_upload_img);
                }
		
	}

	public function upload_update(){
		$path_upload_img ="";
		$config['upload_path']          = './assets/img/uploadresep/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;

                $this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('fileToUpload'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        //$this->load->view('upload_form', $error);
						$this->update();
                }
                else
                {
                        //$data = array('upload_data' => $this->upload->data());
						 //$data2=$this->upload->data('fileToUpload');
						 $data2=$this->upload->data();

                        //$this->load->view('upload_success', $data);
						$path_upload_img=$data2['file_name'];
						$this->update2($path_upload_img);
		}
	}
	
	function tambah_aksi()
	{
			
		//post data to mysql		
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alat_bahan = $this->input->post('alat_bahan');
		$cara_membuat = $this->input->post('cara_membuat');

		$data = array(
			'id' => $id,
			'nama' => $nama,
			'alat_bahan' => $alat_bahan,
			'cara_membuat' => $cara_membuat,

			);
		$this->resep1->input_data($data,'resep1');
		redirect('admin_resep1');
	}
	
	function tambah_aksi2($fileToUpload)
	{
		//post data to mysql		
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		//$fileToUpload = $this->input->post('fileToUpload');
		$alat_bahan = $this->input->post('alat_bahan');
		$cara_membuat = $this->input->post('cara_membuat');

		$data = array(
			'id' => null,
			'nama' => $nama,
		//	'fileToUpload' => $fileToUpload,
			'alat_bahan' => $alat_bahan,
			'cara_membuat' => $cara_membuat,
			'fileToUpload' => $fileToUpload

			);
		$this->m_resep1->input_data($data,'resep1');
		redirect('admin_resep1');
		
	}
	
	


	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_resep1->hapus_data($where,'resep1');
		redirect('admin_resep1');
	}

	function edit($id)
	{
	$where = array('id' => $id);
	$data['resep1'] = $this->m_resep1->edit_data($where,'resep1')->result();
	$this->load->view('templates/header.php');

	$this->load->view('u_resep1',$data);
	}
	
	function update()
	{
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$alat_bahan = $this->input->post('alat_bahan');
	$cara_membuat = $this->input->post('cara_membuat');
	$data = array(
		'nama' => $nama,
		'alat_bahan' => $alat_bahan,
		'cara_membuat' => $cara_membuat,

	);

	$where = array(
		'id' => $id
	);
	$this->m_resep1->update_data($where,$data,'resep1');
	redirect('admin_resep1');
	}

	public function update2($fileToUpload)
	{
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$alat_bahan = $this->input->post('alat_bahan');
	$cara_membuat = $this->input->post('cara_membuat');
	//$fileToUpload = $this->input->post('fileToUpload');
	
	$data = array(
		'nama' => $nama,
		'alat_bahan' => $alat_bahan,
		'cara_membuat' => $cara_membuat,
		'fileToUpload' => $fileToUpload,

	);

	$where = array(
		'id' => $id
	);
	$this->m_resep1->update_data($where,$data,'resep1');
	redirect('admin_resep1');
	}

}