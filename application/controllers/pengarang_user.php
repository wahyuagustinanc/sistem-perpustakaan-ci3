<?php

class Pengarang_user extends CI_Controller{
	public function index(){
		$isi['content'] = 'pengarang_user/v_pengaranguser';
		$isi['judul']	= 'Daftar Data Pengarang';
		$isi['data']	= $this->db->get('pengarang')->result();
		$this->load->view('v_dashboard', $isi);
	}
}
?>