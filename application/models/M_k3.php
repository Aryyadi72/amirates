<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_k3 extends CI_Model
{
    public function tampil_k3()
    {
        return $this->db->get('tb_k3')->result();
    }

    public function tambah_k3($data)
    {
        return $this->db->insert('tb_k3', $data);
    }

    public function hapus_k3($id_k3)
    {
        $this->db->where('id_k3', $id_k3);
        return $this->db->delete('tb_k3');
    }

    public function detail_dok($id_dok_k3 = NULL)
    {
        $query = $this->db->get_where('tb_dok_k3', array('id_dok_k3' => $id_dok_k3))->row();
        return $query;
    }

    public function detail_gbr($id_gbr_k3 = NULL)
    {
        $query = $this->db->get_where('tb_gbr_k3', array('id_gbr_k3' => $id_gbr_k3))->row();
        return $query;
    }

    public function edit_k3($id)
    {
        return $this->db->get_where('tb_k3', ['id_k3' => $id])->row_array();
    }

    public function proses_edit_k3()
    {
        $data = [
            "nm_pembuat_k3" => $this->input->post('nm_pembuat_k3'),
            "tgl_pembuat_k3" => $this->input->post('tgl_pembuat_k3'),
            "kriteria_k3_1" => $this->input->post('kriteria_k3_1'),
            "kriteria_k3_2" => $this->input->post('kriteria_k3_2'),
            "kriteria_k3_3" => $this->input->post('kriteria_k3_3'),
            "kriteria_k3_4" => $this->input->post('kriteria_k3_4')
        ];

        $this->db->where('id_k3', $this->input->post('id_k3'));
        $this->db->update('tb_k3', $data);
    }

}