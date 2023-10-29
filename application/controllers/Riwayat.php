<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Riwayat_model', 'rm');
    }

    public function tambah()
    {
        $this->rm->simpan();
        redirect('admin/Riwayat');
    }
    public function edit($id)
    {
        $this->rm->update($id);
        redirect('admin/Riwayat');
    }
    public function hapus($id)
    {
        $this->rm->delete($id);
        redirect('admin/Riwayat');
    }
}
