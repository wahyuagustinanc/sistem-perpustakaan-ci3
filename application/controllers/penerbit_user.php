<?php

class Penerbit_user extends CI_Controller{
	public function index(){
		$isi['content'] = 'penerbit_user/v_penerbituser';
		$isi['judul']	= 'Data Penerbit';
		$isi['data']	= $this->db->get('penerbit')->result();
		$this->load->view('v_dashboard', $isi);
	}
}
?>