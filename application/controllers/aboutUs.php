<?php

class AboutUs extends CI_Controller{
	public function index(){
		$isi['content'] = 'aboutus/v_aboutus';
		$isi['judul']	= 'About Us';
		$this->load->view('v_dashboard', $isi);
	}
}

?>