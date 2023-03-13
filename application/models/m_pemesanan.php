<?php

class M_pemesanan extends CI_Model{
	public function id_pemesanan(){
		$this->db->select('RIGHT(pemesanan.id_pesan,3) as kode', FALSE);
		$this->db->order_by('id_pesan', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('pemesanan');
		if ($query->num_rows()<>0) {
			$data = $query->row();
			$kode = intval($data->kode)+1;
		} else{
			$kode = 1;
		}

		$kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
		$kodejadi = "RQ-".$kodemax;
		return $kodejadi;
	}

	public function jumlah_buku($id){
		$this->db->select('jumlah');
		$this->db->from('buku');
		$this->db->where('id_buku', $id);
		return $this->db->get()->row_array();
	}

	public function getDataPemesanan(){
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->join('anggota','pemesanan.id_anggota = anggota.id_anggota');
		$this->db->join('buku', 'pemesanan.id_buku = buku.id_buku');
		return $this->db->get()->result();
	}

	public function getDataById_pesan($id){
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->join('anggota', 'pemesanan.id_anggota = anggota.id_anggota');
		$this->db->join('buku', 'pemesanan.id_buku = buku.id_buku');
		$this->db->where('pemesanan.id_pesan', $id);
		return $this->db->get()->row_array();
	}

	public function deletePm($id){
		$this->db->where('id_pesan', $id);
		$this->db->delete('pemesanan');
	}
}
?>