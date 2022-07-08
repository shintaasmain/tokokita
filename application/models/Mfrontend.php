<?php

class Mfrontend extends CI_Model{
    
    public function get_all_data($tabel){
        $q=$this->db->get($tabel);
        return $q;
    }

    public function insert($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

    public function get_by_id($tabel, $id)
    {
        return $this->db->get_where($tabel, $id);
    }

    public function update($tabel, $data, $pk, $id)
    {
        $this->db->where($pk, $id);
        $this->db->update($tabel, $data);
    }
    public function delete($where, $table)
    {
        $this->db->where($where);
		$this->db->delete($table);
    }

    // PROFIL
    public function getprofil($id)
	{
        $this->db->select('*');
        $this->db->from('tbl_member');
        $this->db->join('tbl_kota','tbl_kota.idKota = tbl_member.idKota');   
        $this->db->where('tbl_member.idKonsumen', $id); 
        $query = $this->db->get();
        return $query;
	}

    // TOKO
    public function getdata_toko()
	{
	  $this->db->select('*');
      $this->db->from('tbl_toko');
      $this->db->join('tbl_member','tbl_member.idKonsumen = tbl_toko.idKonsumen');      
      $query = $this->db->get();
      return $query;
	}

    // TOKO
    public function getdata_tokosesuaiUser($id)
	{
	  $this->db->select('*');
      $this->db->from('tbl_toko');
      $this->db->join('tbl_member','tbl_member.idKonsumen = tbl_toko.idKonsumen');   
      $this->db->where('tbl_member.idKonsumen',$id);   
      $query = $this->db->get();
      return $query;
	}

    public function getToko($id)
	{
        $this->db->select('tbl_toko.*', 'tbl_member.idkonsumen');
        $this->db->from('tbl_toko');
        $this->db->join('tbl_member','tbl_member.idKonsumen = tbl_toko.idKonsumen');   
        $this->db->where('tbl_toko.idToko', $id); 
        $query = $this->db->get();
        return $query;
	}

    // PRODUK
    public function getdata_produk($id)
	{
      $this->db->select('*');
      $this->db->from('tbl_produk');
      $this->db->join('tbl_kategori','tbl_kategori.idKat = tbl_produk.idKat');      
      $this->db->join('tbl_toko','tbl_toko.idToko = tbl_produk.idToko');      
      $this->db->where('tbl_produk.idToko',$id);      
      $query = $this->db->get();
      return $query;
	}

    public function getdata_produkTerbaru()
	{
      $this->db->select('*');
      $this->db->from('tbl_produk');
      $this->db->join('tbl_kategori','tbl_kategori.idKat = tbl_produk.idKat');      
      $this->db->join('tbl_toko','tbl_toko.idToko = tbl_produk.idToko');      
      $this->db->order_by('tbl_produk.idProduk','DESC'); 
      $this->db->limit(4);

      $query = $this->db->get();
      return $query;
	}

    public function getproduk($idProduk, $idToko)
    {
        $this->db->select('tbl_produk.*, tbl_toko.namaToko , tbl_kategori.namaKat, tbl_kategori.idKat');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_toko', 'tbl_toko.idToko = tbl_produk.idToko');
        $this->db->join('tbl_kategori', 'tbl_kategori.idKat = tbl_produk.idKat');
        $this->db->where('tbl_produk.idProduk',$idProduk); 
        $this->db->where('tbl_toko.idToko',$idToko); 
        return $query = $this->db->get();
    }
    public function getcart($idProduk, $idToko)
    {
        $this->db->select('tbl_produk.*, tbl_toko.namaToko , tbl_kategori.namaKat, tbl_kategori.idKat');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_toko', 'tbl_toko.idToko = tbl_produk.idToko');
        $this->db->join('tbl_kategori', 'tbl_kategori.idKat = tbl_produk.idKat');
        $this->db->where('tbl_produk.idProduk',$idProduk); 
        $this->db->where('tbl_toko.idToko',$idToko); 
        return $query = $this->db->get()->row();
    }

    public function find($id)
    {
        $result = $this->db->where('idProduk', $id)
                        ->limit(1)
                        ->get('tbl_produk');
        if($result->num_rows()>0){
            return $result->row();
        }else{
            return array();
        }
    }

    //TRANSAKSI
    public function getdata_order($id)
	{
	  $this->db->select('*');
      $this->db->from('tbl_order');
      $this->db->join('tbl_member','tbl_member.idKonsumen = tbl_order.idKonsumen');      
      $this->db->join('tbl_toko','tbl_order.idToko = tbl_toko.idToko');      
      $this->db->where('tbl_order.idKonsumen', $id);      
      $query = $this->db->get();
      return $query;
	}

    //DETAIL TRANSAKSI
    public function getdata_detailOrder($id)
	{
	  $this->db->select('*');
      $this->db->from('tbl_detail_order');
      $this->db->join('tbl_order','tbl_order.idOrder = tbl_detail_order.idOrder');      
      $this->db->join('tbl_produk','tbl_produk.idProduk = tbl_detail_order.idProduk');     
      $this->db->where('tbl_detail_order.idOrder', $id);      
      $query = $this->db->get();
      return $query;
	}

    // TOTAL TOKO
    public function hitungTotalToko($id)
    {   
        $this->db->select('*');
        $this->db->from('tbl_toko');
        $this->db->join('tbl_member','tbl_member.idKonsumen = tbl_toko.idKonsumen');   
        $this->db->where('tbl_member.idKonsumen',$id);   
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }

    // TOTAL TRANSAKSI
    public function hitungTotalTransaksi($id)
    {   
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->join('tbl_member','tbl_member.idKonsumen = tbl_order.idKonsumen');      
        $this->db->join('tbl_toko','tbl_order.idToko = tbl_toko.idToko'); 
        $this->db->where('tbl_order.idKonsumen',$id);       
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }

    // TOTAL PRODUK
    public function hitungTotalProduk()
    {   
        $query = $this->db->get('tbl_produk');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }

    //PESANAN
    public function getPesanan($id)
    {
        $where = $this->session->userdata('idKonsumen');
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->join('tbl_toko','tbl_order.idToko = tbl_toko.idToko'); 
        $this->db->join('tbl_member','tbl_order.idKonsumen = tbl_member.idKonsumen');   
		$this->db->join('tbl_detail_order','tbl_order.idOrder = tbl_detail_order.idOrder');  
		$this->db->join('tbl_produk','tbl_detail_order.idProduk = tbl_produk.idProduk');  
        $this->db->where('tbl_order.idToko',$id); 
        $this->db->where('tbl_toko.idKonsumen', $where);
        $this->db->group_by('tbl_order.idOrder');
        return $this->db->get();
    }

    public function getDetailPesanan($idOrder , $idToko)
    {
        $where = $this->session->userdata('idKonsumen');
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->join('tbl_toko','tbl_order.idToko = tbl_toko.idToko');    
		$this->db->join('tbl_detail_order','tbl_order.idOrder = tbl_detail_order.idOrder');  
		$this->db->join('tbl_produk','tbl_detail_order.idProduk = tbl_produk.idProduk');  
        $this->db->join('tbl_kategori','tbl_produk.idKat = tbl_kategori.idKat'); 
        $this->db->where('tbl_order.idToko',$idToko); 
        $this->db->where('tbl_order.idOrder',$idOrder); 
        $this->db->where('tbl_toko.idKonsumen', $where);
        
        return $this->db->get();
    }

    public function getBuktiBayar($idOrder , $idToko)
    {
        $where = $this->session->userdata('idKonsumen');
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->join('tbl_toko','tbl_order.idToko = tbl_toko.idToko');    
        $this->db->where('tbl_order.idToko',$idToko); 
        $this->db->where('tbl_order.idOrder',$idOrder); 
        $this->db->where('tbl_toko.idKonsumen', $where);
        
        return $this->db->get();
    }

    public function updateStatusOrder($id, $data){
        $this->db->where('idOrder', $id);
        $this->db->update('tbl_order', $data); 
    }

    public function getDetailTransaksi($idOrder)
    {
        $where = $this->session->userdata('idKonsumen');
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->join('tbl_toko','tbl_order.idToko = tbl_toko.idToko');    
		$this->db->join('tbl_detail_order','tbl_order.idOrder = tbl_detail_order.idOrder');  
		$this->db->join('tbl_produk','tbl_detail_order.idProduk = tbl_produk.idProduk');  
		$this->db->join('tbl_kategori','tbl_produk.idKat = tbl_kategori.idKat');  
        $this->db->where('tbl_order.idOrder',$idOrder); 
        $this->db->where('tbl_toko.idKonsumen', $where);
        
        return $this->db->get();
    }

    public function getBuktiBayarTransaksi($idOrder)
    {
        $where = $this->session->userdata('idKonsumen');
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->join('tbl_toko','tbl_order.idToko = tbl_toko.idToko');
        $this->db->where('tbl_order.idOrder',$idOrder); 
        $this->db->where('tbl_toko.idKonsumen', $where);
        
        return $this->db->get();
    }

    //Jumlah Toko bagian tentangkami
	public function jumlah_toko() {
		$this->db->select('COUNT(idToko) as total_toko');
		$this->db->from('tbl_toko');

		$hasil = $this->db->get();
		return $hasil;
	}
	//Jumlah Member bagian tentangkami
	public function jumlah_member() {
		$this->db->select('COUNT(idKonsumen) as total_member');
		$this->db->from('tbl_member');

		$hasil = $this->db->get();
		return $hasil;
	}
	//Jumlah Kurir bagian tentangkami
	public function jumlah_kurir() {
		$this->db->select('COUNT(idKurir) as total_kurir');
		$this->db->from('tbl_kurir');

		$hasil = $this->db->get();
		return $hasil;
	}
}

?>
