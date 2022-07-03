<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mfrontend');
	}
	public function index(){
		$data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
		$data['produkTerbaru'] = $this->Mfrontend->getdata_produkTerbaru()->result();
		$data['produkToko'] = $this->Mfrontend->get_all_data('tbl_produk')->result();
		$this->template->load('layout_frontend', 'frontend/home', $data);
	}

	// REGISTRASI
	public function register()
	{
		$data['Kota'] = $this->Mfrontend->get_all_data('tbl_kota')->result();
		$data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
		$this->template->load('layout_frontend', 'frontend/register',$data);
	}

	public function act_reg()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('namaLengkap','namaLengkap','required',
		array('required'=>'Nama lengkap tidak boleh kosong!')
		);
		$this->form_validation->set_rules('email','email','required',
		array('required'=>'Email tidak boleh kosong!')
		);
		$this->form_validation->set_rules('username','username','required',
		array('required'=>'Username tidak boleh kosong!')
		);
		$this->form_validation->set_rules('password','password','required',
		array('required'=>'Password tidak boleh kosong!')
		);
		$this->form_validation->set_rules('password','password','required',
		array('required'=>'Password tidak boleh kosong!')
		);
		$this->form_validation->set_rules('password_confirm','password_confirm','required',
		array('required'=>'Password konfirmasi tidak boleh kosong!')
		);
		$this->form_validation->set_rules('alamat','alamat','required',
		array('required'=>'Alamat tidak boleh kosong!')
		);
		$this->form_validation->set_rules('no_telepon','no_telepon','required',
		array('required'=>'No telepon tidak boleh kosong!')
		);
		if ($this->form_validation->run() == FALSE)
		{
		$data['Kota'] = $this->Mfrontend->get_all_data('tbl_kota')->result();
		$data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
		$this->template->load('layout_frontend', 'frontend/register',$data);
		}
		else
		{
		$namaKonsumen = $this->input->post('namaLengkap');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$password_confirm = $this->input->post('password_confirm');
		$alamat = $this->input->post('alamat');
		$idKota = $this->input->post('idKota');
		$no_telepon = $this->input->post('no_telepon');
		$data = array(
			'namaKonsumen' => $namaKonsumen,
			'email' => $email,
			'username' => $username,
			'password' => $password,
			'alamat' => $alamat,
			'idKota' => $idKota,
			'tlpn' => $no_telepon,
			'statusAktif' => 'Y',
		);
		$this->Mfrontend->insert('tbl_member', $data);
		redirect('home');
		}	
	}

	// LOGIN

	public function login(){
		$data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
		$this->template->load('layout_frontend', 'frontend/login',$data);
	}

	public function act_login()
	{
		
		$this->load->model('Mlogin_frontend');
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$cek = $this->Mlogin_frontend->cek_login($u, $p);
		if($cek->num_rows()>0){
			$row = $cek->row_array();
			$data_session = array(
				'username' => $u,
				'idKonsumen'=>$row['idKonsumen'],
				'namaKonsumen'=> $row['namaKonsumen'],
				'status' => 'login'
			);
			
			$this->session->set_userdata($data_session);
			redirect('home');
		}else{
			redirect('home/login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}

}
