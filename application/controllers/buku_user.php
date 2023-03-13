<?php

class Buku_user extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('m_buku');
	}
	
	public function index(){
		$isi['content'] = 'buku_user/v_bukuuser';
		$isi['judul']	= 'Daftar Data Buku';
		$isi['data']	= $this->m_buku->get_data_buku();
		$this->load->view('v_dashboard', $isi);
	}
}
?>