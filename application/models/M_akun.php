<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_akun extends CI_Model
{

    public function tampil_akun()
    {
        return $this->db->get('tb_login')->result();
    }

    public function tambah_akun($data)
    {
        return $this->db->insert('tb_login', $data);
    }

    public function hapus_akun($id_user)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->delete('tb_login');
    }

    public function edit_user($id)
    {
        return $this->db->get_where('tb_login', ['id_user' => $id])->row_array();
    }

    public function proses_edit_akun()
    {
        $data = [
            "nama_user" 	=> $this->input->post('nama_user'),
            "alamat_user" 	=> $this->input->post('alamat_user'),
            "jk_user" 		=> $this->input->post('jk_user'),
            "no_telp_user" 	=> $this->input->post('no_telp_user'),
            "email_user" 	=> $this->input->post('email_user'),
            "username" 		=> $this->input->post('username'),
            "foto_user" 	=> $this->input->post('foto_user'),
            "kd_unit" 		=> $this->input->post('kd_unit'),
            "id_level" 		=> $this->input->post('id_level'),
        ];

        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('tb_login', $data);
    }

    public function detail_user($id_user = NULL)
    {
        $query = $this->db->get_where('tb_login', array('id_user' => $id_user))->row();
        return $query;
    }

}