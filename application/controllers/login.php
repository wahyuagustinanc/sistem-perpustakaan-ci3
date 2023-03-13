<?php

class Login extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('m_login');
	}

	public function index(){
		$this->load->view('v_login');
	}

	public function proses_login(){
		$user = $this->input->post('username');
		$pw = $this->input->post('password');
		$this->m_login->proses_login($user, $pw);
	}

	public function proses_registrasi(){
		$user = $this->input->post('username');
		$pw = $this->input->post('password');
		$this->m_registrasi->proses_registrasi($user, $pw);
	}	

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
?>