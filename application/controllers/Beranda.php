<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Helm_model', 'hm');
		$this->load->model('Akun_model', 'am');
		$this->load->model('Pemesanan_model', 'pm');
		$this->load->model('Riwayat_model', 'rm');
	}
	public function index()
	{
		$data['helm'] = $this->hm->DataHelm();
		$this->load->view('user/template/navbar', $data);
		$this->load->view('user/index');
		$this->load->view('user/template/footer');
	}

	public function profile()
	{
		$data['user'] = $this->db->get_where('akun', ['id' => $this->session->userdata('id')])->row_array();
		$data['beranda'] = true;
		$this->load->view('user/template/navbar', $data);
		$this->load->view('user/profile');
		$this->load->view('user/template/footer');
	}
	public function pemesanan()
	{
		$data['pesanan'] = $this->db->get('pemesanan')->result_array();
		$data['beranda'] = true;
		$this->load->view('user/template/navbar', $data);
		$this->load->view('user/pemesanan');
		$this->load->view('user/template/footer');
	}
	public function detail($id)
	{
		$data['helm'] = $this->db->get_where('helm', ['id' => $id])->row_array();
		$data['beranda'] = true;
		$this->load->view('user/template/navbar', $data);
		$this->load->view('user/detail');
		$this->load->view('user/template/footer');
	}

	public function bayar()
	{
		$data['bayar'] = [
			'pemesanan_id' => time(),
			'tanggal_bayar' => date('Y-m-d'),
			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
			'merk' => $this->input->post('merk'),
			'tipe' => $this->input->post('tipe'),
			'ukuran' => $this->input->post('ukuran'),
			'harga' => $this->input->post('harga'),
			'total_pesanan' => $this->input->post('total_pesanan'),
			'total_harga' => $this->input->post('total_pesanan') * $this->input->post('harga'),
		];
		$data['beranda'] = true;
		$this->load->view('user/template/navbar', $data);
		$this->load->view('user/bayar');
		$this->load->view('user/template/footer');
	}

	public function bayar_detail($id)
	{
		$data['riwayat'] = $this->db->get_where('riwayat', ['pemesanan_id' => $id])->row_array();
		$this->load->view('user/template/navbar', $data);
		$this->load->view('user/bayar_detail');
		$this->load->view('user/template/footer');
	}
}
