<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ilp extends CI_Model
{
    public function tampil()
    {
        return $this->db->get('tb_ilp')->result();
    }

    public function tambah($data)
    {
        return $this->db->insert('tb_ilp', $data);
    }

    public function hapus($id_ilp)
    {
        $this->db->where('id_ilp', $id_ilp);
        return $this->db->delete('tb_ilp');
    }

    public function detail_dok_ilp($dok_ilp = NULL)
    {
        $query = $this->db->get_where('tb_ilp', array('dok_ilp' => $dok_ilp))->row();
        return $query;
    }

    public function edit_ilpm($id)
    {
        return $this->db->get_where('tb_ilp', ['id_ilp' => $id])->row_array();
    }

    public function proses_edit_ilpm()
    {
        $data = [
            "nm_pembuat_ilp" => $this->input->post('nm_pembuat_ilp'),
            "kriteria_ilp_1" => $this->input->post('kriteria_ilp_1'),
            "kriteria_ilp_2" => $this->input->post('kriteria_ilp_2'),
            "kriteria_ilp_3" => $this->input->post('kriteria_ilp_3'),
        ];

        $this->db->where('id_ilp', $this->input->post('id_ilp'));
        $this->db->update('tb_ilp', $data);
    }

    public function data_ilp()
    {
      $this->db->select('*');
      $this->db->from('tb_ilp');   
      $query = $this->db->get();
      return $query;
    }

    public function data_dok_ilp()
    {
      $this->db->select('*');
      $this->db->from('tb_dok_ilp_2');
      $this->db->join('tb_ilp','tb_ilp.id_ilp = tb_dok_ilp_2.id_ilp');      
      $query = $this->db->get();
      return $query;
    }

    function join2table_ilp()
    {
      $this->db->select('*');
      $this->db->from('tb_dok_ilp_2');
      $this->db->join('tb_ilp','tb_ilp.id_ilp = tb_dok_ilp_2.id_ilp');      
      $query = $this->db->get();
      return $query;
    }
}