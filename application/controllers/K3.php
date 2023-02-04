<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K3 extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login') == FALSE) {
            redirect(base_url("login"));
        }
        $this->load->model('m_k3');
    }

	 public function index()
	{
		$this->load->model('m_k3');
		$data['title'] = "Data SLA - K3";
        $data['data'] = $this->m_k3->tampil_k3();

		$this->load->view('./dashboard/v_navbar');
		$this->load->view('./k3/v_k3_2', $data);
	}

	public function proses_tambah_k3()
    {

        $this->load->model('m_k3');
		
		$nm_pembuat_k3 		= $this->input->post('nm_pembuat_k3');
		$tgl_pembuat_k3 	= $this->input->post('tgl_pembuat_k3');
        $kriteria_k3_1 		= $this->input->post('kriteria_k3_1');
        $kriteria_k3_2 		= $this->input->post('kriteria_k3_2');
        $kriteria_k3_3 		= $this->input->post('kriteria_k3_3');
		$kriteria_k3_4 		= $this->input->post('kriteria_k3_4');

        $data = array(
            'nm_pembuat_k3' 	=> ucwords($nm_pembuat_k3),
            'tgl_pembuat_k3' 	=> $tgl_pembuat_k3,
            'kriteria_k3_1' 	=> $kriteria_k3_1,
            'kriteria_k3_2' 	=> $kriteria_k3_2,
            'kriteria_k3_3' 	=> $kriteria_k3_3,
			'kriteria_k3_4' 	=> $kriteria_k3_4,
            

        );
        $this->m_k3->tambah_k3($data);

        // $this->session->set_flashdata('sukses', 'Data Atas Nama ' . $nm_pembuat_ilp . ' berhasil ditambahkan.');
        redirect(base_url('k3'));
    }

	public function hapus_k3($id_k3)
    {
        $this->load->model('m_k3');
		$this->m_k3->hapus_k3($id_k3);
        // $this->session->set_flashdata('sukses', 'Data Dengan NIK ' . $nik . ' berhasil dihapus.');
        redirect(base_url('k3'));
    }

	public function cetak_k3()
    {
        $data['title'] = "Denda untuk SLA K3";
        $this->load->view('k3/cetak_k3', $data);
    }
	
    public function proses_upload_dok()
    {
        $config['upload_path']          = './assets/uploads/dok_k3/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {

            echo "Gagal Tambah";
        } else {

            $nm_dok_k3 = $this->upload->data();
            $nm_dok_k3 = $nm_dok_k3['file_name'];

            $data = array(
                'nm_dok_k3' => $nm_dok_k3,
            );

            $this->db->insert('tb_dok_k3', $data);
            redirect('k3');
        }
    }

    public function proses_upload_gbr()
    {
        $config['upload_path']          = './assets/uploads/gbr_k3/';
        $config['allowed_types']        = 'gif|jpg|png|PNG';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {

            echo "Gagal Tambah";
        } else {

            $nm_gbr_k3 = $this->upload->data();
            $nm_gbr_k3 = $nm_gbr_k3['file_name'];

            $data = array(
                'nm_gbr_k3' => $nm_gbr_k3,
            );

            $this->db->insert('tb_gbr_k3', $data);
            redirect('k3');
        }
    }

    public function detail_dok($id_dok_k3)
    {
        $this->load->model('m_k3');
        $detail = $this->m_k3->detail_dok($id_dok_k3);
        $data['detail'] = $detail;

		$this->load->view('./k3/detail_dok', $data);
    }

    public function detail_gbr($id_gbr_k3)
    {
        $this->load->model('m_k3');
        $detail = $this->m_k3->detail_gbr($id_gbr_k3);
        $data['detail'] = $detail;

		$this->load->view('./k3/detail_gbr', $data);
    }

    public function edit_k3($id)
    {
        $data['k3'] = $this->m_k3->edit_k3($id);

        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./k3/v_edit_k3', $data);
    }

    public function proses_edit_k3($id)
    {
        $this->m_k3->proses_edit_k3($id);
        redirect('k3');
    }
}