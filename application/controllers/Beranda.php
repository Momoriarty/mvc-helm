<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
	public function index()
	{
		$this->load->view('user/template/navbar');
		$this->load->view('user/index');
		$this->load->view('user/template/footer');
	}
}
