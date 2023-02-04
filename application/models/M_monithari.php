<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_monithari extends CI_Model
{
    public function tampil_monit()
    {
        return $this->db->get('tb_file_monit')->result();
    }

    public function get_nama($nama)
    {
        return $this->db->get_where('tb_file_monit', ['file_monit' => $nama])->row_array();
    }
}