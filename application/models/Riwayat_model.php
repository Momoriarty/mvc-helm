<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat_model extends CI_Model
{
    public function DataRiwayat()
    {
        return $this->db->get('riwayat')->result_array();
    }

    public function simpan()
    {
        $data = [
            'pemesanan_id' => $this->input->post('pemesanan_id'),
            'tanggal_bayar' => $this->input->post('tanggal_bayar'),
            'status' => $this->input->post('status'),
            'harga' => $this->input->post('harga'),
            'total_pesanan' => $this->input->post('total_pesanan'),
            'total_harga' => $this->input->post('total_harga'),
            'nominal' => $this->input->post('nominal'),
            'kembalian' => $this->input->post('kembalian')
        ];

        $this->db->insert('riwayat', $data);
    }

    public function update($id)
    {
        $data = [
            'pemesanan_id' => $this->input->post('pemesanan_id'),
            'tanggal_bayar' => $this->input->post('tanggal_bayar'),
            'status' => $this->input->post('status'),
            'harga' => $this->input->post('harga'),
            'total_pesanan' => $this->input->post('total_pesanan'),
            'total_harga' => $this->input->post('total_harga'),
            'nominal' => $this->input->post('nominal'),
            'kembalian' => $this->input->post('kembalian')
        ];

        $this->db->where('id', $id);
        $this->db->update('riwayat', $data);
    }

    public function delete($id)
    {
        $this->db->delete('riwayat', ['id' == $id]);
    }
}
