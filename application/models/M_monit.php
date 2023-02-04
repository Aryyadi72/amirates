<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_monit extends CI_Model
{
    public function tampil_monit()
    {
        return $this->db->get('tb_monit_kualitas_kuantitas')->result();
    }

    public function tampil_monit_valid($id_data_evaluasi = NULL)
    {
        return $this->db->get('tb_evaluasi_dua')->result();
    }

    // public function tampil_aset()
    // {
    //     return $this->db->get('tb_jenis_asset')->result();
    // }

    // public function tampil_validasi()
    // {
    //     return $this->db->get('tb_evaluasi')->result();
    // }

    public function detail_aset($id_data_jenis_aset = NULL)
    {
        $query = $this->db->get_where('tb_jenis_asset', array('id_data_jenis_aset' => $id_data_jenis_aset))->row();
        return $query;
    }

    public function detail_validasi($id_data_evaluasi = NULL)
    {
        $query = $this->db->get_where('tb_evaluasi', array('id_data_evaluasi' => $id_data_evaluasi))->row();
        return $query;
    }

    public function tambah_valid($data)
    {
        return $this->db->insert('tb_evaluasi_dua', $data);
    }

    // public function edit_valid($id_data_monit)
    // {
    //     $this->db->where('id_data_monit', $id_data_monit);
    //     return $this->db->get('tb_monit_kualitas_kuantitas')->row();
    // }

    // public function edit($id_data_evaluasi)
    // {
    //     $this->db->where('id_data_evaluasi', $id_data_evaluasi);
    //     return $this->db->get('tb_evaluasi')->row();
    // }

    // public function proses_edit($where, $data)
    // {
    //     $this->db->where($where);
    //     return $this->db->update('tb_evaluasi', $data);
    // }

    // public function proses_edit_valid($where, $data)
    // {
    //     $this->db->where($where);
    //     return $this->db->update('tb_data', $data);
    // }

    public function edit_evaluasi($id)
    {
        return $this->db->get_where('tb_evaluasi', ['id_data_evaluasi' => $id])->row_array();
    }

    public function proses_edit_evaluasi()
    {
        $data = [
            'k_kolom' 			=> $this->input->post('k_kolom'),
            'k_eam' 			=> $this->input->post('k_eam'),
            'k_koordinasi' 		=> $this->input->post('k_koordinasi'),
            'k_lokasi' 			=> $this->input->post('k_lokasi'),
			'k_gbr' 			=> $this->input->post('k_gbr'),
            'perbaikan_error' 	=> $this->input->post('perbaikan_error'),
			'id_data_monit' 	=> $this->input->post('id_data_monit')
        ];

        $this->db->where('id_data_evaluasi', $this->input->post('id_data_evaluasi'));
        $this->db->update('tb_evaluasi', $data);
    }

}