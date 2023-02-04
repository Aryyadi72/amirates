<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_gardu extends CI_Model
{
    public function tampil_gardu()
    {
        return $this->db->get('tb_file_gardu')->result();
    }

    public function tampil_tiangtr()
    {
        return $this->db->get('tb_file_ttr')->result();
    }

    public function get_nama($nama)
    {
        return $this->db->get_where('tb_file_gardu', ['nm_file_gardu' => $nama])->row_array();
    }

    public function tampil_koor_gardu()
    {
        return $this->db->get('tb_gardu')->result();
    }

    public function tampil_koor_ttr()
    {
        return $this->db->get('tb_tiangtr')->result();
    }

    public function tampil_koor_jtr()
    {
        return $this->db->get('tb_jtr')->result();
    }

    public function tampil_koor_tm()
    {
        return $this->db->get('tb_stl_tm')->result();
    }

    public function tampil_koor_tr()
    {
        return $this->db->get('tb_stl_tr')->result();
    }

    public function tampil_koor_app()
    {
        return $this->db->get('tb_app')->result();
    }

    public function tampil_koor_ktk_app()
    {
        return $this->db->get('tb_kotak_app')->result();
    }

    public function tampil_koor_kwh()
    {
        return $this->db->get('tb_kwh')->result();
    }

    public function tampil_koor_mcb()
    {
        return $this->db->get('tb_mcb')->result();
    }

    public function tampil_koor_ct()
    {
        return $this->db->get('tb_ct')->result();
    }

    public function tampil_koor_pt()
    {
        return $this->db->get('tb_pt')->result();
    }

    public function tampil_koor_up3()
    {
        return $this->db->get('tb_up3')->result();
    }

    public function tampil_koor_ulp()
    {
        return $this->db->get('tb_ulp')->result();
    }

    public function get_nama_ttr($nama)
    {
        return $this->db->get_where('tb_file_ttr', ['nm_file_ttr' => $nama])->row_array();
    }

    public function get_nama_ttra($name)
    {
        return $this->db->get_where('tb_file_ttr', ['nm_file_ttr' => $name])->row_array();
    }
}