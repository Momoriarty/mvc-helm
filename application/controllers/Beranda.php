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
}
