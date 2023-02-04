<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ilp extends CI_Controller {

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
	// public function __construct()
    // {
    //     // parent::__construct();
    //     // if ($this->session->userdata('login') == FALSE) {
    //     //     redirect(base_url("login"));
    //     // }
        
    //     // $this->load->library('form_validation');
    // }
	
	public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login') == FALSE) {
            redirect(base_url("login"));
        }
        $this->load->model('m_ilp');
    }

    public function index()
	{
		// $this->load->model('m_ilp');
		// $data['title'] = "Data SLA - Integritas Layanan Publik";
        // $data['data'] = $this->m_ilp->tampil();

        $data['ilp'] = $this->m_ilp->data_ilp()->result(); 

		$this->load->view('./dashboard/v_navbar', $data);
		$this->load->view('./ilp/v_ilp');
	}

	public function proses_tambah_ilp()
    {
        $this->load->model('m_ilp');

        $config['upload_path']          = './assets/uploads/dok_ilp/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {

            echo "Gagal Tambah";
        } else {
		
		$dok_ilp            = $this->upload->data();
        $dok_ilp            = $dok_ilp['file_name'];
        $nm_pembuat_ilp 	= $this->input->post('nm_pembuat_ilp');
        $kriteria_ilp_1 	= $this->input->post('kriteria_ilp_1');
        $kriteria_ilp_2 	= $this->input->post('kriteria_ilp_2');
        $kriteria_ilp_3 	= $this->input->post('kriteria_ilp_3');

        $data = array(
            'nm_pembuat_ilp' 	=> ucwords($nm_pembuat_ilp),
            'kriteria_ilp_1' 	=> $kriteria_ilp_1,
            'kriteria_ilp_2' 	=> $kriteria_ilp_2,
            'kriteria_ilp_3' 	=> $kriteria_ilp_3,
            'dok_ilp'           => $dok_ilp,
            

        );
        $this->m_ilp->tambah($data);

        // $this->session->set_flashdata('sukses', 'Data Atas Nama ' . $nm_pembuat_ilp . ' berhasil ditambahkan.');
        redirect(base_url('ilp'));
        
        }
    }

	public function hapus($id_ilp)
    {
        $this->load->model('m_ilp');
		$this->m_ilp->hapus($id_ilp);
        // $this->session->set_flashdata('sukses', 'Data Dengan NIK ' . $nik . ' berhasil dihapus.');
        redirect(base_url('ilp'));
    }

	public function cetak_lp()
    {
        $data['title'] = "Denda untuk SLA Integritas Layanan Publik";
        $this->load->view('ilp/cetak_ilp', $data);
    }

    // public function proses_upload_ilp()
    // {
    //     $config['upload_path']          = './assets/uploads/dok_ilp/';
    //     $config['allowed_types']        = 'pdf';
    //     $config['max_size']             = 10000;
    //     $config['max_width']            = 10000;
    //     $config['max_height']           = 10000;

    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('userfile')) {

    //         echo "Gagal Tambah";
    //     } else {

    //         $nm_dok_ilp = $this->upload->data();
    //         $nm_dok_ilp = $nm_dok_ilp['file_name'];

    //         $data = array(
    //             'nm_dok_ilp' => $nm_dok_ilp,
    //         );

    //         $this->db->insert('tb_dok_ilp_2', $data);
    //         redirect('ilp');
    //     }
    // }
	
    public function detail_dok_ilp($dok_ilp)
    {
        $this->load->model('m_ilp');
        $detail = $this->m_ilp->detail_dok_ilp($dok_ilp);
        $data['detail'] = $detail;

		$this->load->view('./ilp/detail_dok_ilp', $data);
    }

    public function edit_ilp($id)
    {
        $data['ilp'] = $this->m_ilp->edit_ilpm($id);

        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./ilp/v_edit_ilp', $data);
    }

    public function proses_edit_ilp($id)
    {
        $id = $this->input->post('id_ilp');
        $config['upload_path']          = './assets/uploads/dok_ilp/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {

        $nm_pembuat_ilp 	= $this->input->post('nm_pembuat_ilp');
        $kriteria_ilp_1 	= $this->input->post('kriteria_ilp_1');
        $kriteria_ilp_2 	= $this->input->post('kriteria_ilp_2');
        $kriteria_ilp_3 	= $this->input->post('kriteria_ilp_3');

        $data = array(
            'nm_pembuat_ilp' 	=> ucwords($nm_pembuat_ilp),
            'kriteria_ilp_1' 	=> $kriteria_ilp_1,
            'kriteria_ilp_2' 	=> $kriteria_ilp_2,
            'kriteria_ilp_3' 	=> $kriteria_ilp_3,

        );
        // $this->session->set_flashdata('sukses', 'Data Atas Nama ' . $nm_pembuat_ilp . ' berhasil ditambahkan.');
        $this->db->where('id_ilp', $id);
		$this->db->update('tb_ilp', $data);
        redirect('ilp');

        } else {
		
		$dok_ilp            = $this->upload->data();
        $dok_ilp            = $dok_ilp['file_name'];
        $nm_pembuat_ilp 	= $this->input->post('nm_pembuat_ilp');
        $kriteria_ilp_1 	= $this->input->post('kriteria_ilp_1');
        $kriteria_ilp_2 	= $this->input->post('kriteria_ilp_2');
        $kriteria_ilp_3 	= $this->input->post('kriteria_ilp_3');

        $data = array(
            'nm_pembuat_ilp' 	=> ucwords($nm_pembuat_ilp),
            'kriteria_ilp_1' 	=> $kriteria_ilp_1,
            'kriteria_ilp_2' 	=> $kriteria_ilp_2,
            'kriteria_ilp_3' 	=> $kriteria_ilp_3,
            'dok_ilp'           => $dok_ilp,
            

        );

        $this->db->where('id_ilp', $id);
		$this->db->update('tb_ilp', $data);
        redirect('ilp');
        }
    }

}