<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends CI_Controller {

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
		$data['kota']=$this->Mcrud->get_all_data('tbl_kota')->result();
		$this->template->load('layout_admin', 'admin/kota/index', $data);
		
	}

    public function add(){
        $this->template->load('layout_admin', 'admin/kota/form_add');
    }

	public function save(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('namaKota','namaKota','required',
		array('required'=>'Nama kota tidak boleh kosong!')
		);
		if ($this->form_validation->run() == FALSE)
		{
			$this->template->load('layout_admin', 'admin/kota/form_add');
		}
		else
		{
			$namaKota = $this->input->post('namaKota');
			$dataInsert = array('namaKota' => $namaKota);
			$this->Mcrud->insert('tbl_kota', $dataInsert);
			redirect('kota');
		};
	}

	public function getid($id){
		$dataWhere = array('idKota'=>$id);
		$data['kota'] = $this->Mcrud->get_by_id('tbl_kota', $dataWhere)->row_object();
		$this->template->load('layout_admin', 'admin/kota/form_edit', $data);

	}

	public function edit()
	{
		$id = $this->input->post('id');
		$namaKota = $this->input->post('namaKota');
		$dataUpdate = array ('namaKota' =>$namaKota);
		$this->Mcrud->update('tbl_kota', $dataUpdate, 'idKota',$id);
		redirect('kota');
	}

	public function hapus($id)
	{
		$where = array('idKota' => $id);
		$this->Mcrud->delete($where,'tbl_kota');
		redirect('kota');
	}
}
