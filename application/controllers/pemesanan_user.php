<?php 

class Pemesanan_user extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('m_pemesanan');
	}

	public function index(){
		$isi['content'] = 'pemesanan_user/v_pemesananuser';
		$isi['judul'] = 'Data Pemesanan';
		$isi['data'] = $this->m_pemesanan->getDataPemesanan();
		$this->load->view('v_dashboard', $isi);
	}
}
?>