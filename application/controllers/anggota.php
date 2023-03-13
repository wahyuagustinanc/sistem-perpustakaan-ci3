<?php

class Anggota extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('m_anggota');
	}

	public function index(){
		$isi['content'] = 'anggota/v_anggota';
		$isi['judul']	= 'Daftar Data Anggota';
		$isi['data']	= $this->db->get('anggota')->result();
		$this->load->view('v_dashboard', $isi);
	}

	public function tambah_anggota(){
		$isi['content'] = 'anggota/form_anggota';
		$isi['judul']	= 'Form Tambah Anggota';
		$isi['id_anggota'] = $this->m_anggota->id_anggota();
		$this->load->view('v_dashboard', $isi);
	}

	public function simpan(){
		$data = array (
			'id_anggota' 	=> $this->input->post('id_anggota'),
			'nama_anggota'	=> $this->input->post('nama_anggota'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'alamat' 		=> $this->input->post('alamat'),
			'nohp' 			=> $this->input->post('nohp')
		);
		$query = $this->db->insert('anggota', $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data berhasil disimpan');
			redirect('anggota');
		}
	}

	public function edit($id){
		$isi['content'] = 'anggota/edit_anggota';
		$isi['judul']	= 'Form Edit Anggota';
		$isi['data'] = $this->m_anggota->edit($id);
		$this->load->view('v_dashboard', $isi);
	}

	public function update(){
		$id_anggota = $this->input->post('id_anggota');
		$data = array (
			'id_anggota' 	=> $this->input->post('id_anggota'),
			'nama_anggota'	=> $this->input->post('nama_anggota'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'alamat' 		=> $this->input->post('alamat'),
			'nohp' 			=> $this->input->post('nohp')
		);
		$query = $this->m_anggota->update($id_anggota, $data) ;
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data berhasil diupdate');
			redirect('anggota');
		}
	}

	public function hapus($id){
		$query = $this->m_anggota->hapus($id);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data berhasil dihapus');
			redirect('anggota');
		}
	}
}
?>