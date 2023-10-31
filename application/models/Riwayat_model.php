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
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'pemesanan_id' => $this->input->post('pemesanan_id'),
            'tanggal_bayar' => $this->input->post('tanggal_bayar'),
            'status' => 'selesai',
            'merk' => $this->input->post('merk'),
            'tipe' => $this->input->post('tipe'),
            'harga' => $this->input->post('harga'),
            'total_pesan' => $this->input->post('total_pesan'),
            'total_harga' => $this->input->post('total_harga'),
            'nominal' => $this->input->post('nominal'),
            'gmail' => $this->input->post('gmail'),
            'kembalian' => $this->input->post('nominal') - $this->input->post('total_harga')
        ];

        $this->db->insert('riwayat', $data);

        $helm = $this->db->get_where('helm', ['merk' => $this->input->post('merk')])->row_array();
        $sisa_stok = $helm['stok'] - $this->input->post('total_pesan');

        $this->db->where('merk', $helm['merk']);
        $this->db->update('helm', ['stok' => $sisa_stok]);


        redirect('beranda/bayar_detail/' . $this->input->post('pemesanan_id'));
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
