<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monit extends CI_Controller {


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
        $this->load->model('m_monithari');
    }

    public function index()
	{
		$data['file'] = $this->m_monithari->tampil_monit();
		
		$this->load->view('./dashboard/v_navbar');
		$this->load->view('./monit_harian/v_monit_file', $data);
	}

    public function proses_upload_file()
    {
        $config['upload_path']          = './assets/uploads/monit/';
        $config['allowed_types']        = 'json';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {

            echo "Gagal Tambah";
        } else {

            $file_monit = $this->upload->data();
            $file_monit = $file_monit['file_name'];

            $data = array(
                'file_monit' => $file_monit,
            );

            $this->db->insert('tb_file_monit', $data);
            redirect('monit');
        }
    }

    public function tampil_file($nama)
    {
        $this->m_monithari->get_nama($nama);
        $nama = strtolower($nama);
        $alamatfile = "./assets/uploads/monit/" . $nama;
        $json = file_get_contents($alamatfile);
        // $data['tampil_kuantitas'] = $this->m_realisasi->tampilkan_real();
        // $json = file_get_contents("./assets/uploads/monit/", $file);
        $obj  = json_decode($json);
        $data = array(
            'file' => $obj
        );

        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./monit_harian/v_monit_ljt', $data);
    }

    public function detail_monit($nama)
    {
        $this->m_monithari->get_nama($nama);
        $nama = strtolower($nama);
        $alamatfile = "./assets/uploads/monit/" . $nama;
        $json = file_get_contents($alamatfile);
        // $data['tampil_kuantitas'] = $this->m_realisasi->tampilkan_real();
        // $json = file_get_contents("./assets/uploads/monit/", $file);
        $obj  = json_decode($json);
        $data = array(
            'file' => $obj
        );

        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./monit_harian/v_detail_monit', $data);
    }

    public function upload_ke($nama)
    {
        $this->m_monithari->get_nama($nama);
        $alamatfile = "./assets/uploads/monit/" . $nama;
        $json = file_get_contents($alamatfile);
        
        // $split = explode("\n", $json);
        $r = json_decode($json,true);

        foreach ($r as $row) {
            
            $data = [
                
                'up3'            => $row['up3'],
                'ulp'            => $row['ulp'],
                'nm_penyulang'   => $row['nm_penyulang'],
                'nm_gardu'       => $row['nm_gardu'],
                'tgl_survey'     => $row['tgl_survey'],
                'petugas'        => $row['petugas'],
                'pengevaluasi'   => $row['pengevaluasi'],
                'tiang_tr'       => $row['tiang_tr'],
                'jtr'            => $row['jtr'],
                'stl_tm'         => $row['stl_tm'],
                'stl_tr'         => $row['stl_tr'],
                'app'            => $row['app'],
                'kotak_app'      => $row['kotak_app'],
                'kwh'            => $row['kwh'],
                'mcb'            => $row['mcb'],
                'ct'             => $row['ct'],
                'pt'             => $row['pt'],

            ];
            
            $this->db->insert('tb_monit', $data);
        }

        redirect('monit');
    }
}