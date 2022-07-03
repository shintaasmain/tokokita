<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

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
		$data['kategori']=$this->Mcrud->get_all_data('tbl_kategori')->result();
		$this->template->load('layout_admin', 'admin/kategori/index', $data);
		
	}

    public function add(){
			$this->template->load('layout_admin', 'admin/kategori/form_add');
    }

	public function save(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('namaKategori','namaKategori','required',
		array('required'=>'Nama kategori tidak boleh kosong!')
		);
		if ($this->form_validation->run() == FALSE)
		{
			$this->template->load('layout_admin', 'admin/kategori/form_add');
		}
		else
		{

			$namaKategori = $this->input->post('namaKategori');
			$dataInsert = array('namakat' => $namaKategori);
			$this->Mcrud->insert('tbl_kategori', $dataInsert);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        	Data berhasil diupdate!</div>');
			redirect('kategori');
		}
	}

	public function getid($id){
		$dataWhere = array('idKat'=>$id);
		$data['kategori'] = $this->Mcrud->get_by_id('tbl_kategori', $dataWhere)->row_object();
		$this->template->load('layout_admin', 'admin/kategori/form_edit', $data);

	}

	public function edit()
	{
		$id = $this->input->post('id');
		$namaKategori = $this->input->post('namaKategori');
		$dataUpdate = array ('namaKat' =>$namaKategori);
		$this->Mcrud->update('tbl_kategori', $dataUpdate, 'idKat',$id);
		redirect('kategori');
	}

	public function hapus($id)
	{
		$where = array('idKat' => $id);
		$this->Mcrud->delete($where,'tbl_kategori');
		redirect('kategori');
	}
}
