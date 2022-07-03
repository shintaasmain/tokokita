<?php

class Mcrud extends CI_Model{
    
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

    public function getdata_ongkir($table, $tbljoin, $q,$tbljoin2, $q2, $tbljoin3, $q3)
	{
		$this->db->select('*,bk.idKotaAsal, namaKurir , a.namaKota AS KotaAsal, b.namaKota AS KotaTujuan, biaya');
		$this->db->join ($tbljoin, $q)->join($tbljoin2, $q2)->join($tbljoin3, $q3);
        $this->db->order_by('idBiayaKirim', 'asc');
		return $this->db->get($table);
	}

}

?>