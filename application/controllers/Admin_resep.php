<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_resep extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_resep');
        $this->load->helper('url');
		
		//for upload file image di tambah_aksi()
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		if(!isset($_SESSION['login'])) redirect(base_url().'admin');
		$data['resep'] = $this->m_resep->tampil_info()->result();
		$this->load->view('templates/header.php');
		$this->load->view('templates/admin_nav.php');
		$this->load->view('Admin_resep',$data);
		$this->load->view('templates/footer.php');
	}

	
	public function tambah()
	{
	
	if(!isset($_SESSION['login'])) redirect(base_url().'admin');		
	$this->load->view('templates/header.php');
	$this->load->view('templates/admin_nav.php');
	
	if (isset($data)){
	$this->load->view('t_resep',$data);}
	else {$this->load->view('t_resep');	}
	
	$this->load->view('templates/footer.php');
	}
	
	public function tambah2($data)
	{
	
	if(!isset($_SESSION['login'])) redirect(base_url().'admin');		
	$this->load->view('templates/header.php');
	$this->load->view('templates/admin_nav.php');
	
	if (isset($data)){
	$this->load->view('t_resep',$data);}
	else {$this->load->view('t_resep');	}
	
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
	
	function tambah_aksi()
	{
			
		//post data to mysql		
		$nama = $this->input->post('nama');
		$link = $this->input->post('link');

		$data = array(
			'nama' => $nama,
			'link' => $link,
			);
		$this->m_resep->input_data($data,'resep');
		redirect('admin_resep');
	}
	
	function tambah_aksi2($path_upload_img)
	{
		//post data to mysql		
		$nama = $this->input->post('nama');
		$link = $this->input->post('link');

		$data = array(
			'nama' => $nama,
			'link' => $link,
			'id' => null,
			'path_upload_img' => $path_upload_img
			);
		$this->m_resep->input_data($data,'resep');
		redirect('admin_resep');
		
	}
	
	


	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_resep->hapus_data($where,'resep');
		redirect('admin_resep');
	}

	function edit($id)
	{
	$where = array('id' => $id);
	$data['resep'] = $this->m_resep->edit_data($where,'resep')->result();
	$this->load->view('u_resep',$data);
	}
	
	function update()
	{
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$link = $this->input->post('link');

	$data = array(
		'nama' => $nama,
		'link' => $link,
	);

	$where = array(
		'id' => $id
	);
	$this->m_resep->update_data($where,$data,'resep');
	redirect('admin_resep');
	}
}
