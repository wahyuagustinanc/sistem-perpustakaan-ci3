<?php

class M_registrasi extends CI_Model{
	public function insertData(){
		$this->db->insert('login');
		return $this->db->set()->result();
	}
}
?>