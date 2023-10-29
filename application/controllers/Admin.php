<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Helm_model', 'hm');
		$this->load->model('Akun_model', 'am');
	}
	public function index()
	{
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/index');
		$this->load->view('admin/template/footer');
	}

	public function helm()
	{
		$data['helm'] = $this->hm->DataHelm();
		$this->load->view('admin/template/navbar', $data);
		$this->load->view('admin/helm');
		$this->load->view('admin/template/footer');
	}

	public function akun()
	{
		$data['akun'] = $this->am->DataAkun();
		$this->load->view('admin/template/navbar', $data);
		$this->load->view('admin/akun');
		$this->load->view('admin/template/footer');
	}

	public function pemesanan()
	{
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/pemesanan');
		$this->load->view('admin/template/footer');
	}

	public function riwayat()
	{
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/riwayat');
		$this->load->view('admin/template/footer');
	}

}
