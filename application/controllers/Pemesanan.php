<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pemesanan_model', 'pm');
    }

    public function tambah()
    {
        $this->pm->simpan();
        redirect('admin/Pemesanan');
    }
    public function edit($id)
    {
        $this->pm->update($id);
        redirect('admin/Pemesanan');
    }
    public function hapus($id)
    {
        $this->pm->delete($id);
        redirect('admin/Pemesanan');
    }
}
