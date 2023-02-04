<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoring extends CI_Controller {

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
        $this->load->model('m_monit');
		$this->load->library('form_validation');
    }

	public function index()
	{
		$this->load->model('m_monit');
		$data['title'] = "Data Kualitas & Kuantitas";
        $data['data'] = $this->m_monit->tampil_monit();

		$this->load->view('./dashboard/v_navbar');
		$this->load->view('./monitoring/v_monitoring', $data);
	}

	public function detail_jenis($id_data_jenis_aset)
    {
        $this->load->model('m_monit');
        $detail = $this->m_monit->detail_aset($id_data_jenis_aset);
        $data['detail'] = $detail;

        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./monitoring/v_jenis_aset_2', $data);
    }

	public function detail_valid($id_data_evaluasi)
    {
        $this->load->model('m_monit');
        $detail = $this->m_monit->detail_validasi($id_data_evaluasi);
        $data['detail'] = $detail;

		// $this->load->model('m_monit');
        // $data['data'] = $this->m_monit->tampil_monit_valid($id_data_evaluasi = NULL);

        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./monitoring/v_validasi_2', $data);
    }

	public function edit($id_data_monit)
	{
		$this->load->model('m_monit');
        $data['data'] = $this->m_monit->edit($id_data_monit);

		$this->load->view('./dashboard/v_navbar', $data);
		$this->load->view('./monitoring/v_tambah_valid');
	}

	public function proses_edit()
    {

        $this->load->model('m_monit');
		
		$id_data_evaluasi	= $this->input->post('id_data_evaluasi');
		$k_kolom 			= $this->input->post('k_kolom');
		$k_eam 				= $this->input->post('k_eam');
        $k_koordinasi 		= $this->input->post('k_koordinasi');
        $k_lokasi 			= $this->input->post('k_lokasi');
		$k_gbr 				= $this->input->post('k_gbr');
        $perbaikan_error 	= $this->input->post('perbaikan_error');
		$id_data_monit 		= $this->input->post('id_data_monit');

        $data = array(
            'id_data_evaluasi' 	=> $id_data_evaluasi,
			'k_kolom' 			=> $k_kolom,
            'k_eam' 			=> $k_eam,
            'k_koordinasi' 		=> $k_koordinasi,
            'k_lokasi' 			=> $k_lokasi,
			'k_gbr' 			=> $k_gbr,
            'perbaikan_error' 	=> $perbaikan_error,
			'id_data_monit' 	=> $id_data_monit            
        );
		$where = array(
            'id_data_monit' => $id_data_monit,
        );
        $this->m_monit->proses_edit($where, $data);

        // $this->session->set_flashdata('sukses', 'Data Atas Nama ' . $nm_pembuat_ilp . ' berhasil ditambahkan.');
        redirect(base_url('monitoring'));
    }

	// public function tambah_valid_dua($id_data_evaluasi)
	// {
	// 	$this->load->model('m_monit');
    //     $data['data'] = $this->m_monit->detail_validasi($id_data_evaluasi);

	// 	$this->load->view('./dashboard/v_navbar');
	// 	$this->load->view('./monitoring/v_validasi_3', $data);
	// }

	// public function tampil_valid($id_data_evaluasi)
	// {
	// 	$this->load->model('m_monit');
    //     $data['data'] = $this->m_monit->tampil_monit_valid($id_data_evaluasi = NULL);

	// 	$this->load->view('./dashboard/v_navbar');
	// 	$this->load->view('./monitoring/v_validasi_3', $data);
	// }

	public function edit_evaluasi($id)
    {
        $data['evaluasi'] = $this->m_monit->edit_evaluasi($id);

		$this->load->view('./dashboard/v_navbar');
		$this->load->view('./monitoring/v_tambah_valid', $data);
    }

    public function proses_edit_evaluasi($id)
    {
        $this->m_monit->proses_edit_evaluasi($id);
        redirect('monitoring');
    }

	

}