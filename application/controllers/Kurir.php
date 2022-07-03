<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kurir extends CI_Controller {

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
		$data['kurir']=$this->Mcrud->get_all_data('tbl_kurir')->result();
		$this->template->load('layout_admin', 'admin/kurir/index', $data);
		
	}

    public function add(){
        $this->template->load('layout_admin', 'admin/kurir/form_add');
    }

	public function save(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('namakurir','namakurir','required',
		array('required'=>'Nama kurir tidak boleh kosong!')
		);
		if ($this->form_validation->run() == FALSE)
		{
			$this->template->load('layout_admin', 'admin/kurir/form_add');
		}
		else
		{
			$namakurir = $this->input->post('namakurir');
			$dataInsert = array('namakurir' => $namakurir);
			$this->Mcrud->insert('tbl_kurir', $dataInsert);
			redirect('kurir');
		};
	}

	public function getid($id){
		$dataWhere = array('idkurir'=>$id);
		$data['kurir'] = $this->Mcrud->get_by_id('tbl_kurir', $dataWhere)->row_object();
		$this->template->load('layout_admin', 'admin/kurir/form_edit', $data);

	}

	public function edit()
	{
		$id = $this->input->post('id');
		$namakurir = $this->input->post('namaKurir');
		$dataUpdate = array ('namakurir' =>$namakurir);
		$this->Mcrud->update('tbl_kurir', $dataUpdate, 'idkurir',$id);
		redirect('kurir');
	}

	public function hapus($id)
	{
		$where = array('idkurir' => $id);
		$this->Mcrud->delete($where,'tbl_kurir');
		redirect('kurir');
	}
}
