<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Helm_model extends CI_Model
{
    public function DataHelm()
    {
        return $this->db->get('helm')->result_array();
    }

    public function simpan()
    {
        $config['upload_path'] = './assets/img/helm/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2048;
        $config['file_name'] = 'IMG-Helm-' . time();

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $data = [
                'merk' => $this->input->post('merk'),
                'tipe' => $this->input->post('tipe'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $this->input->post('harga'),
                'warna' => $this->input->post('warna'),
                'stok' => $this->input->post('stok'),
                'gambar' => $this->upload->data('file_name')
            ];

            $this->db->insert('helm', $data);

        } else {
            $error = $this->upload->display_errors();
        }
    }

    public function update($id)
    {
        $existingData = $this->db->get_where('helm', ['id' => $id])->row_array();

        if ($existingData) {
            $config['upload_path'] = './assets/img/helm/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2048;
            $config['file_name'] = 'IMG-Helm-' . time();

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data('file_name');

                if (file_exists('./assets/img/helm/' . $existingData['gambar'])) {
                    unlink('./assets/img/helm/' . $existingData['gambar']);
                }
            } else {
                $gambar = $existingData['gambar'];
            }

            $data = [
                'merk' => $this->input->post('merk'),
                'tipe' => $this->input->post('tipe'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $this->input->post('harga'),
                'warna' => $this->input->post('warna'),
                'stok' => $this->input->post('stok'),
                'gambar' => $gambar
            ];

            $this->db->where('id', $id);
            $this->db->update('helm', $data);
        }
    }


    public function delete($id)
    {
        $existingData = $this->db->get_where('helm', ['id' => $id])->row_array();

        if (file_exists('./assets/img/helm/' . $existingData['gambar'])) {
            unlink('./assets/img/helm/' . $existingData['gambar']);
        }

        $this->db->delete('helm', ['id' == $id]);
    }
}
