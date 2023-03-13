<?php 

class Pemesanan extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('m_pemesanan');
	}

	public function index(){
		$isi['content'] = 'pemesanan/v_pemesanan';
		$isi['judul'] = 'Data Pemesanan';
		$isi['data'] = $this->m_pemesanan->getDataPemesanan();
		$this->load->view('v_dashboard', $isi);
	}

	public function tambah_pemesanan(){
		$isi['content'] = 'pemesanan/t_pemesanan';
		$isi['judul'] = 'Form Tambah Pemesanan';
		$isi['id_pemesanan'] = $this->m_pemesanan->id_pemesanan();
		$isi['pemesan'] = $this->db->get('anggota')->result();
		$isi['buku'] = $this->db->get('buku')->result();
		$this->load->view('v_dashboard', $isi);
	}

	public function simpan(){
		$data = array(
			'id_pesan' => $this->input->post('id_pesan'),
			'id_anggota' => $this->input->post('id_anggota'),
			'id_buku' => $this->input->post('id_buku'),
			'tgl_pesan' => $this->input->post('tgl_pesan'),
			'tgl_kembali' => $this->input->post('tgl_kembali'),
		);
		$query = $this->db->insert('pemesanan', $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Pemesanan berhasil disimpan');
			redirect('pemesanan');
		}
	}

	public function jumlah_buku(){
		$id = $this->input->post('id');
		$data = $this->m_pemesanan->jumlah_buku($id);
		echo json_encode($data);
	}

	public function kembalikan($id){
		$data = $this->m_pemesanan->getDataById_pesan($id);
		$kembalikan = array(
			'id_anggota' => $data['id_anggota'],
			'id_buku' => $data['id_buku'],
			'tgl_pesan' => $data['tgl_pesan'],
			'tgl_kembali' => $data['tgl_kembali'],
			'tgl_kembalikan' => date('Y-m-d')
		);
		$query = $this->db->insert('pengembalian',$kembalikan);
		if ($query = true) {
			$delete = $this->m_pemesanan->deletePm($id);
			if ($delete = true) {
				$this->session->set_flashdata('info', 'Buku berhasil dikembalikan');
				redirect('pemesanan');
			}
		}
	}
}
?>