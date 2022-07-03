<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mfrontend');
		$this->load->library('cart');
	}
	
	// PROFIL
	public function ubah_profil($id)
	{
		
		if(empty($this->session->userdata('username'))){
			redirect('home');
		}
		$data['profil'] = $this->Mfrontend->getprofil($id)->result();
		$data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
		$data['kota'] = $this->Mfrontend->get_all_data('tbl_kota')->result();
		$this->template->load('layout_frontend', 'frontend/ubah_profil', $data);
	}

	// UBAH PROFIL
	public function ubahProfil($id)
	{
		$idKonsumen = $this->input->post('idKonsumen');
		$idKota = $this->input->post('idKota');
		$namaKonsumen = $this->input->post('namaKonsumen');
		$email = $this->input->post('email');
		$tlpn = $this->input->post('tlpn');
		$alamat = $this->input->post('alamat');
		$dataUpdate = array(
			'idKonsumen' => $idKonsumen,
			'idKota' => $idKota,
			'namaKonsumen' => $namaKonsumen,
			'email' => $email,
			'tlpn' => $tlpn,
			'alamat' => $alamat,
		);
		$this->Mfrontend->update('tbl_member', $dataUpdate, 'idKonsumen',$idKonsumen);
		redirect('frontend/ubah_profil/'.$idKonsumen);
	}

	// MEMBER
	public function dashboard_member()
	{
		
		if(empty($this->session->userdata('username'))){
			redirect('home');
		}
		$data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
		$data['totalToko'] = $this->Mfrontend->hitungTotalToko($this->session->userdata('idKonsumen'));
		$data['totalTransaksi'] = $this->Mfrontend->hitungTotalTransaksi($this->session->userdata('idKonsumen'));
		$data['totalProduk'] = $this->Mfrontend->hitungTotalProduk($this->session->userdata('idKonsumen'));
		//var_dump($data['totalProduk']);
		$this->template->load('layout_frontend', 'frontend/dashboard_member', $data);
	}

	// TOKO
	public function toko($id)
	{
		if(empty($this->session->userdata('username'))){
			redirect('home');
		}
		//$idKonsumen = $this->session->userdata('idKonsumen');
		//var_dump($idKonsumen);
		$data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
		//$data['toko']=$this->Mfrontend->getdata_toko()->result();
		$data['toko']=$this->Mfrontend->getdata_tokosesuaiUser($id)->result();
		$this->template->load('layout_frontend', 'frontend/toko', $data);
	}

	// TAMPIL DASHBOARD TOKO
	public function dashboard_toko()
	{
		if(empty($this->session->userdata('username'))){
			redirect('home');
		}
		$data['kategori'] 	= $this->Mfrontend->get_all_data('tbl_kategori')->result();
		$data['totalToko'] = $this->Mfrontend->hitungTotalToko($this->session->userdata('idKonsumen'));
		$data['totalTransaksi'] = $this->Mfrontend->hitungTotalTransaksi($this->session->userdata('idKonsumen'));
		$data['totalProduk'] = $this->Mfrontend->hitungTotalProduk($this->session->userdata('idKonsumen'));
		$this->template->load('layout_frontend', 'frontend/dashboard_toko', $data);
	}

    //DETAIL TOKO
    public function getidToko($id){
		
		$dataWhere = array('idToko'=>$id);
		$data['toko'] = $this->Mfrontend->get_by_id('tbl_toko', $dataWhere)->row_object();
		$data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
		$data['totalToko'] = $this->Mfrontend->hitungTotalToko($this->session->userdata('idKonsumen'));
		$data['totalTransaksi'] = $this->Mfrontend->hitungTotalTransaksi($this->session->userdata('idKonsumen'));
		$data['totalProduk'] = $this->Mfrontend->hitungTotalProduk($this->session->userdata('idKonsumen'));
		$this->template->load('layout_frontend', 'frontend/dashboard_toko', $data);

	}

	// FORM TAMBAH TOKO
	public function tampil_formtoko()
	{
		if(empty($this->session->userdata('username'))){
			redirect('home');
		}
		$data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
		$this->template->load('layout_frontend', 'frontend/form_toko', $data);
	}

	// TAMBAH TOKO BARU
	public function tambah_tokobaru($id)
	{
			
			$config['upload_path']  		= './upload/';
			$config['allowed_types']  		= 'jpg|jpeg|png|gif';  
			$config['max_size']             = '10000';
			$config['max_width']            = '10000';
			$config['max_height']           = '10000';

			$this->load->library('upload',$config);

			$this->load->library('form_validation');
			$this->form_validation->set_rules('namaToko','namaToko','required',
			array('required'=>'Nama toko tidak boleh kosong!')
			);
			$this->form_validation->set_rules('deskripsi','deskripsi','required',
			array('required'=>'Deskripsi tidak boleh kosong!')
			);
			
			//var_dump($this->upload->do_upload('logo'));
			if ($this->form_validation->run() == FALSE){
				$data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
				$this->template->load('layout_frontend', 'frontend/form_toko', $data);
			}else{
				if(!$this->upload->do_upload('logo')){
					echo "Masukkan gambar dulu ya";
				}else{
					$logo= $this->upload->data();
					$logo = $logo['file_name'];
					$namaToko = $this->input->post('namaToko');
					$deskripsi = $this->input->post('deskripsi');
					$status = $this->input->post('statusAktif');
					$data = array(
						'idKonsumen' =>$this->session->idKonsumen,
						'namaToko' => $namaToko,
						'deskripsi' => $deskripsi,
						'logo' => $logo,
						'statusAktif' => 'Y',
					);
					// var_dump($data);
					$this->Mfrontend->insert('tbl_toko', $data);
					redirect('frontend/toko/'.$id);
				}
			}
		}

		// UBAH TOKO
		public function ubah_toko($id)
		{
			if(empty($this->session->userdata('username'))){
			redirect('home');
			}
			$data['toko'] = $this->Mfrontend->getToko($id)->result();
			$data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
			$this->template->load('layout_frontend', 'frontend/ubah_toko', $data);
		}

		// UBAH TOKO
		public function ubahToko($id)
		{
			$idToko = $this->input->post('idToko');
			$namaToko = $this->input->post('namaToko');
			$deskripsi = $this->input->post('deskripsi');
			$dataUpdate = array(
				'namaToko' => $namaToko,
				'deskripsi' => $deskripsi,
			);
			if ($_FILES != null){
				$this->updategambartoko($idToko);
			}
			$this->Mfrontend->update('tbl_toko', $dataUpdate, 'idToko',$idToko);
			redirect('frontend/ubah_toko/'.$idToko);
		}

		// UPDATE GAMBAR TOKO
		public function updategambartoko($idToko)
		{
			$config['upload_path']  		= './upload/';
            $config['allowed_types']  		= 'jpg|jpeg|png|gif';  
            $config['max_size']             = '10000';
            $config['max_width']            = '10000';
            $config['max_height']           = '10000';

            $this->load->library('upload',$config);
			//var_dump($this->upload->do_upload('logo'));
			if (!empty($_FILES['logo']['name'])){
				if($this->upload->do_upload('logo')){
					$logo= $this->upload->data();
					// replace logo lama
					$item = $this->db->where('idToko', $idToko)->get('tbl_toko')->row();
					$target_file = './upload/'.$item->logo;
					unlink($target_file);
					
					$data['logo'] = $logo['file_name'];

					$this->db->where('idToko', $idToko);
					$this->db->update('tbl_toko', $data);
			}
			
		}
	}


	//PRODUK
	public function produk($id)
	{
		if(empty($this->session->userdata('username'))){
			redirect('home');
		}
        $dataWhere = array('idToko'=>$id);
		$data['toko'] = $this->Mfrontend->get_by_id('tbl_toko', $dataWhere)->row_object();
		$data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
        $data['produk'] = $this->Mfrontend->getdata_produk($id)->result();
		$this->template->load('layout_frontend', 'frontend/produk', $data);
	}

    // TAMPIL FORM PRODUK
	public function tampil_formproduk($id)
	{
		if(empty($this->session->userdata('username'))){
			redirect('home');
		}
        $dataWhere = array('idToko'=>$id);
		$data['toko'] = $this->Mfrontend->get_by_id('tbl_toko', $dataWhere)->row_object();
		$data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
		$this->template->load('layout_frontend', 'frontend/form_produk', $data);
	}
    
    // TAMBAH PRODUK BARU
    public function tambah_produkbaru()
    {
            $config['upload_path']  		= './fotoProduk/';
            $config['allowed_types']  		= 'jpg|jpeg|png|gif';  
            $config['max_size']             = '10000';
            $config['max_width']            = '10000';
            $config['max_height']           = '10000';

            $this->load->library('upload',$config);
			
                if(!$this->upload->do_upload('foto')){
                    echo "Masukkan foto dulu ya";
                }else{
                    
                    $foto= $this->upload->data();
                    $foto = $foto['file_name'];
                    $id = $this->input->post('id');
                    $idKat = $this->input->post('idKat');
                    $namaProduk = $this->input->post('namaProduk');
                    $hargaProduk = $this->input->post('hargaProduk');
                    $stok = $this->input->post('stokProduk');
                    $berat = $this->input->post('beratProduk');
                    $deskripsi = $this->input->post('deskripsi');
                    $data = array(
                        'idToko' => $id,
                        'idKat' => $idKat,
                        'namaProduk' =>$namaProduk,
                        'foto' => $foto,
                        'harga' => $hargaProduk,
                        'stok' => $stok,
                        'berat' => $berat,
                        'deskripsiProduk' => $deskripsi,
                    );
                    // var_dump($data);
                    $this->Mfrontend->insert('tbl_produk', $data);
                    redirect('frontend/produk/'.$id);
                // }
            }
        }

		//DETAIL PRODUK
		public function getidProduk($idProduk, $idToko)
		{
			$data['produk'] = $this->Mfrontend->getProduk($idProduk, $idToko)->result();
			$data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
			$data['toko'] = $this->Mfrontend->get_all_data('tbl_toko')->result();
			$this->template->load('layout_frontend', 'frontend/detail_produk', $data);
		}

		// DETAIL SEKALIAN UPDATE PRODUK
		public function detailProduk()
		{
			
			$idToko = $this->input->post('idToko');
			$idProduk = $this->input->post('idProduk');
			$idKat = $this->input->post('idKat');
            $namaProduk = $this->input->post('namaProduk');
            $hargaProduk = $this->input->post('hargaProduk');
            $stok = $this->input->post('stokProduk');
            $berat = $this->input->post('beratProduk');
            $deskripsi = $this->input->post('deskripsiProduk');
            $dataUpdate = array(
				'idProduk'=>$idProduk,
                'idKat' => $idKat,
                'namaProduk' =>$namaProduk,
                // 'foto' => $foto,
                'harga' => $hargaProduk,
                'stok' => $stok,
                'berat' => $berat,
                'deskripsiProduk' => $deskripsi,
                );
			$this->Mfrontend->update('tbl_produk', $dataUpdate, 'idProduk',$idProduk);
			if ($_FILES != null){
				$this->updategambar($idProduk);
			}
			redirect('frontend/produk/'.$idToko);
		}

		// UPDATE GAMBAR PRODUK
		private function updategambar($idProduk)
		{
			$config['upload_path']  		= './fotoProduk/';
            $config['allowed_types']  		= 'jpg|jpeg|png|gif';  
            $config['max_size']             = '10000';
            $config['max_width']            = '10000';
            $config['max_height']           = '10000';

            $this->load->library('upload',$config);
			//var_dump($this->upload->do_upload('foto'));
			if (!empty($_FILES['foto']['name'])){
				if($this->upload->do_upload('foto')){
					$foto= $this->upload->data();

					// replace foto lama
					$item = $this->db->where('idProduk', $idProduk)->get('tbl_produk')->row();
					$target_file = './fotoProduk/'.$item->foto;
					unlink($target_file);

					$data['foto'] = $foto['file_name'];
					$this->db->where('idProduk', $idProduk);
					$this->db->update('tbl_produk', $data);
			}
			
		}
	}

	public function hapusProduk($id, $idToko)
	{
			if(empty($this->session->userdata('username'))){
				redirect('home');
			}
			//var_dump($idToko);
			$where = array('idProduk' => $id);
			$this->Mfrontend->delete($where,'tbl_produk');
			return redirect('frontend/produk/'.$idToko);
	}

	// CART
	public function keranjang()
	{
		if(empty($this->session->userdata('username'))){
		redirect('home/login');
		}
		$data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
		$data['toko'] = $this->Mfrontend->get_all_data('tbl_toko')->result();
		$this->template->load('layout_frontend', 'frontend/cart', $data);
	}

	// ADD CART
	public function cart($idProduk, $idT)
	{
		$data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
		$data['toko'] = $this->Mfrontend->get_all_data('tbl_toko')->result();
		$status = $this->session->userdata('status');
		if(empty($status)){
			redirect('home/login');
		}else{
			$jml_keranjang = count($this->cart->contents());
			if(empty($jml_keranjang)){
			$data_produk= $this->Mfrontend->getcart($idProduk, $idT);
			$dataInsert = array(
			'id'      => $idProduk,
			'idToko'  => $data_produk->idToko,
			'qty'     => 1,
			'price'   => $data_produk->harga,
			'name'    => $data_produk->namaProduk,
			'foto'	  => $data_produk->foto
			);
			//var_dump($dataInsert);
			$this->cart->insert($dataInsert);
			$this->template->load('layout_frontend', 'frontend/cart', $data, $dataInsert );
			}else{
				$Toko = ' ';
				if($cart = $this->cart->contents()){
					foreach ($cart as $item){
						$Toko = $item['idToko'];
					}
				}
				$data_produk = $this->Mfrontend->getcart($idProduk,$idT);
				if($Toko==$data_produk->idToko){
					$data_produk= $this->Mfrontend->getcart($idProduk, $idT);
					$insert_cart = array(
						'id'      => $idProduk,
						'idToko'  => $data_produk->idToko,
						'qty'     => 1,
						'price'   => $data_produk->harga,
						'name'    => $data_produk->namaProduk,
						'foto'	  => $data_produk->foto);
					//var_dump($insert_cart);
					$this->cart->insert($insert_cart);
					redirect('frontend/keranjang');
				}else{
					echo "Barang harus dari toko yang sama";
				}
			
			}
		}
		
	}

	// HAPUS CART
	public function hapus_cart($rowid)
	{
		$data_hapus = array(
			'rowid' => $rowid, 
			'qty'	=> 0,);

		$this->cart->update($data_hapus);
		redirect('frontend/keranjang');
	}

	// SELESAI BELANJA
	public function selesai_belanja()
	{
		$idToko = ' ';
		if($cart = $this->cart->contents()){
			foreach($cart as $item){
				$idToko = $item['idToko'];
			}
		}
		$data_pembeli = array (
			'idKonsumen' => $this->session->userdata('idKonsumen'),
			'tglOrder'	=> date('Y-m-d'),
			'idToko'	=> $idToko,
			'statusOrder' => 'Belum Bayar',
		);
		$idTerakhir = $this->Mfrontend->insert('tbl_order',$data_pembeli);
		$last_insert_id = $this->db->insert_id();

		if($cart = $this->cart->contents()){
			foreach($cart as $item){
				$data_detail = array(
					'idOrder'	=> $last_insert_id,
					'idProduk'	=> $item['id'],
					'jumlah'	=> $item['qty'],
					'harga'		=> $item['price']
				);

				$this->Mfrontend->insert('tbl_detail_order',$data_detail);
			}
		}
		$this->cart->destroy();
		redirect('frontend/transaksi/'.$this->session->userdata('idKonsumen'));
	}

	// TRANSAKSI
	public function transaksi($id)
	{
		if(empty($this->session->userdata('username'))){
			redirect('home');
		}
		$data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
		$data['order']=$this->Mfrontend->getdata_order($id)->result();
		// var_dump($data['order']);
		$this->template->load('layout_frontend', 'frontend/transaksi', $data);
	}
	// DETAIL TRANSAKSI
	public function detailOrder($id)
	{
		if(empty($this->session->userdata('username'))){
			redirect('home');
		}
		$dataWhere = array('idOrder'=>$id);
		$data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result();
		$data['order']=$this->Mfrontend->getdata_order()->result();
		$data['detailOrder']=$this->Mfrontend->getdata_detailOrder($id)->result();
		var_dump($data['detailOrder']);
		$this->template->load('layout_frontend', 'frontend/transaksi', $data);
	}

}
