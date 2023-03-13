<?php

class Dashboard extends CI_Controller{
	public function index(){
		$this->m_security->getSecurity();
		$isi['content'] = 'v_home';
		$isi['judul'] 	= 'Home';

		$this->load->model('m_dashboard');
		$isi['anggota']	= $this->m_dashboard->countAnggota();
		$isi['buku']	= $this->m_dashboard->countBuku();
		$isi['pemesanan']	= $this->m_dashboard->countPesan();
		$isi['kembali']	= $this->m_dashboard->countKembali();
		$this->load->view('v_dashboard', $isi);
	}
}
?>