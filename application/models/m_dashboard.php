<?php

class M_dashboard extends CI_Model{
	public function countAnggota(){
		return $this->db->count_all('anggota');
	}

	public function countBuku(){
		return $this->db->count_all('buku');
	}

	public function countPesan(){
		return $this->db->count_all('pemesanan');
	}

	public function countKembali(){
		return $this->db->count_all('pengembalian');
	}	
}
?>