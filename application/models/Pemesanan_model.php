<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan_model extends CI_Model
{
    public function DataPemesanan()
    {
        return $this->db->get('pemesanan')->result_array();
    }

    public function simpan()
    {
        $data = [
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'tanggal_pesan' => $this->input->post('tanggal_pesan'),
            'harga' => $this->input->post('harga'),
            'total_pesanan' => $this->input->post('total_pesanan'),
            'total_harga' => $this->input->post('total_harga')
        ];

        $this->db->insert('pemesanan', $data);
    }

    public function update($id)
    {
        $data = [
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'tanggal_pesan' => $this->input->post('tanggal_pesan'),
            'harga' => $this->input->post('harga'),
            'total_pesanan' => $this->input->post('total_pesanan'),
            'total_harga' => $this->input->post('total_harga')
        ];

        $this->db->where('id', $id);
        $this->db->update('pemesanan', $data);
    }

    public function delete($id)
    {
        $this->db->delete('pemesanan', ['id' == $id]);
    }
}
