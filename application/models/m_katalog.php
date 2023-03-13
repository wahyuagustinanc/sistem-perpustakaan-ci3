<?php

class M_katalog extends CI_Model{
	public function get_data_katalog(){
		$this->db->select('*');
		$this->db->from('katalog');
		$this->db->join('buku', 'buku.id_buku = katalog.id_buku');
		return $this->db->get();
	}

	public function edit($id){
		$this->db->select('*');
		$this->db->from('katalog');
		$this->db->join('buku', 'buku.id_buku = katalog.id_buku');
		$this->db->where('katalog.id_katalog', $id);
		return $this->db->get()->row_array();
	}

	public function update($id_katalog, $data){
		$this->db->where('id_katalog', $id_katalog);
		$this->db->update('katalog', $data);
	}

	public function hapus($id){
		$this->db->where('id_katalog', $id);
		$this->db->delete('katalog');
	}
}
?>