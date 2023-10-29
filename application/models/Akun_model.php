<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun_model extends CI_Model
{
    public function DataAkun()
    {
        return $this->db->get('akun')->result_array();
    }

    public function simpan()
    {
        $config['upload_path'] = './assets/img/profile/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2048;
        $config['file_name'] = 'IMG-Profile-' . time();

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('profile')) {
            $data = [
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'gmail' => $this->input->post('gmail'),
                'no_hp' => $this->input->post('no_hp'),
                'password' => $this->input->post('password'),
                'level' => $this->input->post('level'),
                'is_active' => $this->input->post('is_active'),
                'profile' => $this->upload->data('file_name')
            ];

            $this->db->insert('akun', $data);
        } else {
            $error = $this->upload->display_errors();
        }
    }

    public function update($id)
    {
        $existingData = $this->db->get_where('akun', ['id' => $id])->row_array();

        $config['upload_path'] = './assets/img/profile/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2048;
        $config['file_name'] = 'IMG-Profile-' . time();

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('profile')) {
            $profile = $this->upload->data('file_name');

            if (file_exists('./assets/img/profile/' . $existingData['profile'])) {
                unlink('./assets/img/profile/' . $existingData['profile']);
            }
        } else {
            $profile = $existingData['profile'];
        }

        $data = [
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'gmail' => $this->input->post('gmail'),
            'no_hp' => $this->input->post('no_hp'),
            'password' => $this->input->post('password'),
            'level' => $this->input->post('level'),
            'is_active' => $this->input->post('is_active'),
            'profile' => $profile
        ];

        $this->db->where('id', $id);
        $this->db->update('akun', $data);
    }

    public function delete($id)
    {
        $existingData = $this->db->get_where('akun', ['id' => $id])->row_array();

        if (file_exists('./assets/img/profile/' . $existingData['profile'])) {
            unlink('./assets/img/profile/' . $existingData['profile']);
        }

        $this->db->delete('akun', ['id' => $id]);
    }

}
