<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ongkir extends CI_Controller {

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
		$data['ongkir']=$this->Mcrud->getdata_ongkir('tbl_biaya_kirim bk', 'tbl_kurir k', 'bk.idKurir=k.idKurir', 'tbl_kota a','bk.idKotaAsal = a.idKota', 'tbl_kota b','bk.idKotaTujuan = b.idKota' )->result();
		$this->template->load('layout_admin', 'admin/ongkir/index', $data);
		
	}

	
    public function add(){
		$data['kurir'] = $this->Mcrud->get_all_data('tbl_kurir')->result();
		$data['kota_asal'] = $this->Mcrud->get_all_data('tbl_kota')->result();
		$data['kota_tujuan'] = $this->Mcrud->get_all_data('tbl_kota')->result();
		//var_dump($data);
		$this->template->load('layout_admin', 'admin/ongkir/form_add',$data);
    }

	public function save(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('biaya','biaya','required',
		array('required'=>'Biaya tidak boleh kosong!')
		);
		if ($this->form_validation->run() == FALSE)
		{
			$data['kurir'] = $this->Mcrud->get_all_data('tbl_kurir')->result();
			$data['kota_asal'] = $this->Mcrud->get_all_data('tbl_kota')->result();
			$data['kota_tujuan'] = $this->Mcrud->get_all_data('tbl_kota')->result();
			//var_dump($data);
			$this->template->load('layout_admin', 'admin/ongkir/form_add',$data);
		}
		else
		{
		$idkurir = $this->input->post('idKurir');
		$idkotaasal = $this->input->post('idKotaAsal');
		$idkotatujuan = $this->input->post('idKotaTujuan');
		$biaya = $this->input->post('biaya');
		$data = array(
			'idKurir' => $idkurir,
			'idKotaAsal' => $idkotaasal,
			'idKotaTujuan' => $idkotatujuan,
			'biaya' => $biaya,
		);
		$this->Mcrud->insert('tbl_biaya_kirim', $data);
		redirect('ongkir');
		}	
	}

	public function getid($id){
		$dataWhere = array('idBiayaKirim'=>$id);
		$data['biaya'] = $this->Mcrud->get_by_id('tbl_biaya_kirim', $dataWhere)->row_object();
		$data['kurir'] = $this->Mcrud->get_all_data('tbl_kurir')->result();
		$data['kota'] = $this->Mcrud->get_all_data('tbl_kota')->result();
	
		$this->template->load('layout_admin', 'admin/ongkir/form_edit', $data);

	}

	public function edit()
	{
		$id = $this->input->post('id');
		$idkurir = $this->input->post('idKurir');
		$idkotaasal = $this->input->post('idKotaAsal');
		$idkotatujuan = $this->input->post('idKotaTujuan');
		$biaya = $this->input->post('biaya');
		$dataUpdate = array(
			'idKurir' => $idkurir,
			'idKotaAsal' => $idkotaasal,
			'idKotaTujuan' => $idkotatujuan,
			'biaya' => $biaya,
		);
		$this->Mcrud->update('tbl_biaya_kirim', $dataUpdate, 'idBiayaKirim',$id);
		redirect('ongkir');
	}

	public function hapus($id)
	{
		$where = array('idBiayaKirim' => $id);
		$this->Mcrud->delete($where,'tbl_biaya_kirim');
		redirect('ongkir');
	}
	
	

    
}
