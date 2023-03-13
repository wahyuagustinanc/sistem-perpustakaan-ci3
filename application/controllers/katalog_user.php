<?php

class Katalog_user extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('m_katalog');
	}
	
	public function index(){
		$isi['content'] = 'katalog_user/v_kataloguser';
		$isi['judul']	= 'Daftar Katalog Buku';
		$isi['data']	= $this->m_katalog->get_data_katalog();
		$this->load->view('v_dashboard', $isi);
	}
}
?>