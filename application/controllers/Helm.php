<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Helm extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Helm_model', 'hm');
    }

    public function tambah()
    {
        $this->hm->simpan();
        redirect('admin/helm');
    }
    public function edit($id)
    {
        $this->hm->update($id);
        redirect('admin/helm');
    }
    public function hapus($id)
    {
        $this->hm->delete($id);
        redirect('admin/helm');
    }
}
