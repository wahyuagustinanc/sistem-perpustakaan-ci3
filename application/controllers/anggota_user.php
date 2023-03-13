<?php

class Anggota_user extends CI_Controller{
	public function index(){
		$isi['content'] = 'anggota_user/v_anggotauser';
		$isi['judul']	= 'Daftar Data Anggota';
		$isi['data']	= $this->db->get('anggota')->result();
		$this->load->view('v_dashboard', $isi);
	}
}
?>