<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aduan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mcrud');
	}

	public function tambah_aduan(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$nohp = $this->input->post('nohp');
		$pesanaduan = $this->input->post('pesanaduan');
		$dataInsert = array(
			'nama' =>$nama,
			'email' =>$email,
			'nohp' =>$nohp,
			'pesanaduan' =>$pesanaduan
		);

		$this->Mcrud->insert('tbl_pengaduan', $dataInsert);
		redirect('frontend/tentangkami');
	}
}
