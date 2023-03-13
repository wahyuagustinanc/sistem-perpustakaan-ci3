<?php

class Katalog extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('m_katalog');
	}

	public function index(){
		$isi['content'] = 'katalog/v_katalog';
		$isi['judul']	= 'Daftar Katalog Buku';
		$isi['data']	= $this->m_katalog->get_data_katalog();
		$this->load->view('v_dashboard', $isi);
	}

	public function tambah_katalog(){
		$isi['content'] = 'katalog/form_katalog';
		$isi['judul']	= 'Form Tambah Katalog Buku';
		$isi['judul_buku'] = $this->db->get('buku')->result();
		$this->load->view('v_dashboard', $isi);
	}

	public function simpan(){
		$data = array(
			'id_katalog' => $this->input->post('id_katalog'),
			'gambar' => $this->input->post('gambar'),
			'id_buku' => $this->input->post('id_buku'),
			'deskripsi' => $this->input->post('deskripsi'),
			'status' => $this->input->post('status')
		);
		$query = $this->db->insert('katalog', $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Katalog berhasil disimpan');
			redirect('katalog');
		}
	}

	public function edit($id){
		$isi['content'] = 'katalog/edit_katalog';
		$isi['judul']	= 'Form Edit Katalog Buku';
		$isi['judul_buku'] = $this->db->get('buku')->result();
		$isi['data'] = $this->m_katalog->edit($id);
		$this->load->view('v_dashboard', $isi);
	}

	public function update(){
		$id_katalog = $this->input->post('id_katalog');
		$data = array(
			'id_katalog' => $this->input->post('id_katalog'),
			'gambar' => $this->input->post('gambar'),
			'id_buku' => $this->input->post('id_buku'),
			'deskripsi' => $this->input->post('deskripsi'),
			'status' => $this->input->post('status')
		);
		$query = $this->m_katalog->update($id_katalog, $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Katalog buku berhasil diupdate');
			redirect('katalog');
		}
	}

	public function hapus($id){
		$query = $this->m_katalog->hapus($id);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Katalog buku berhasil dihapus');
			redirect('katalog');
		}
	}

	public function upload(){
		$namaFile = $_FILES['gambar']['name'];
		$ukuranFile = $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tmpName = $_FILES['gambar']['tmp_name'];

		//cek apakah gambar sudah diupload
		if ($error === 4) {
			echo "<script>
					alert('Gambar belum diupload');
				</script>";
			return false;
		}

		$ekstensiGambarValid = ['jpeg', 'jpg', 'png'];
		$ekstensiGambar = explode('.', $namaFile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));
		
		//cek ekstensi mask ke dalam ekstensi valid
		if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
			echo "<script>
					alert('Ekstensi gambar yang diperbolehkan adalah jpeg, jpg, png');
				</script>";
			return false;
		}

		//cek jika size melebihi yang diperbolehkan
		if ($ukuranFile > 500000) {
			echo "<script>
					alert('Gambar melebihi ukuran yang diperbolehkan');
				</script>";
			return false;
		}

		//lolos pengecekan, file masukkan ke dalam database
		//buat nama file menjadi unik
		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar;

		move_uploaded_file($tmpName, '<?= base_url()?>assets/dist/img/katalog'. $namaFileBaru);

		return $namaFileBaru;
	}
}
?>