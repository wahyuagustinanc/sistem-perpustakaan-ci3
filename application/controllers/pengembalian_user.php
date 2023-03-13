<?php

class Pengembalian_user extends CI_Controller{
	public function index(){
		$isi['content'] = 'pengembalian_user/v_pengembalianuser';
		$isi['judul']	= 'Data Pengembalian Buku';
		$this->load->model('m_pengembalian');
		$isi['data']	= $this->m_pengembalian->getAllData();
		$this->load->view('v_dashboard', $isi);
	}
}

?>