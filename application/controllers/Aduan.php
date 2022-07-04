<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aduan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mcrud');
		
	}

	public function index()
	{
		if(empty($this->session->userdata('userName'))){
			redirect('adminpanel');
		}
		$data['aduan']=$this->Mcrud->get_all_data('tbl_pengaduan')->result();
		$this->template->load('layout_admin', 'admin/aduan/index', $data);
		
	}

    public function add(){
        $this->template->load('layout_admin', 'admin/kurir/form_add');
    }

	public function save(){
		$namakurir = $this->input->post('namakurir');
		$dataInsert = array('namakurir' => $namakurir);
		$this->Mcrud->insert('tbl_kurir', $dataInsert);
		redirect('kurir');
	}

	public function getid_aktif($id){
		$statusAktif = 'Y';
		$dataUpdate = array ('statusAktif' =>$statusAktif);
		$this->Mcrud->update('tbl_member', $dataUpdate, 'idKonsumen',$id);
		redirect('member');

	}
	public function getid_tidakaktif($id){
		$statusAktif = 'N';
		$dataUpdate = array ('statusAktif' =>$statusAktif);
		$this->Mcrud->update('tbl_member', $dataUpdate, 'idKonsumen',$id);
		redirect('member');

	}
	
}
