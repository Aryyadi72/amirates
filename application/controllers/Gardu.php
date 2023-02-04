<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gardu extends CI_Controller {

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
        $this->load->model('m_gardu');
    }

    public function index()
	{
		$data['file'] = $this->m_gardu->tampil_gardu();
		
		$this->load->view('./dashboard/v_navbar');
		$this->load->view('./gardu/v_file_gardu', $data);
	}

    public function proses_upload_file_gardu()
    {
        $config['upload_path']          = './assets/uploads/gardu/';
        $config['allowed_types']        = 'json';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {

            echo "Gagal Tambah";
        } else {

            $nm_file_gardu = $this->upload->data();
            $nm_file_gardu = $nm_file_gardu['file_name'];

            $data = array(
                'nm_file_gardu' => $nm_file_gardu,
            );

            $this->db->insert('tb_file_gardu', $data);
            redirect('gardu');
        }
    }

    public function proses_upload_file_tiangtr()
    {
        $config['upload_path']          = './assets/uploads/tiangtr/';
        $config['allowed_types']        = 'json';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {

            echo "Gagal Tambah";
        } else {

            $nm_file_ttr = $this->upload->data();
            $nm_file_ttr = $nm_file_ttr['file_name'];

            $data = array(
                'nm_file_ttr' => $nm_file_ttr,
            );

            $this->db->insert('tb_file_ttr', $data);
            redirect('gardu');
        }
    }

    public function tampil_gardu()
    {
        $data['file'] = $this->m_gardu->tampil_koor_gardu();

        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./gardu/v_data_gardu', $data);
    }

    public function upload_gardu($nama)
    {
        $this->m_gardu->get_nama($nama);
        $alamatfile = "./assets/uploads/gardu/" . $nama;
        $json = file_get_contents($alamatfile);
        
        // $split = explode("\n", $json);
        $r = json_decode($json,true);

        foreach ($r as $row) {
            
            $data = [
                
                'id_gardu'     => $row['id_gardu'],
                'lat_gardu'    => $row['lat_gardu'],
                'long_gardu'   => $row['long_gardu'],
                'nm_gardu'     => $row['nm_gardu'],
                
            ];
            
            $this->db->insert('tb_gardu', $data);
        }

        redirect('gardu');
    }

    public function list_aset()
    {
        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./gardu/v_list_aset');
    }

    public function list_jtr()
    {
        $data['file'] = $this->m_gardu->tampil_koor_jtr();

        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./jtr/v_jtr', $data);
    }

    public function list_tm()
    {
        $data['file'] = $this->m_gardu->tampil_koor_tm();

        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./tm/v_tm', $data);
    }

    public function list_tr()
    {
        $data['file'] = $this->m_gardu->tampil_koor_tr();

        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./tr/v_tr', $data);
    }

    public function list_app()
    {
        $data['file'] = $this->m_gardu->tampil_koor_app();

        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./app/v_app', $data);
    }

    public function list_ktk_app()
    {
        $data['file'] = $this->m_gardu->tampil_koor_ktk_app();

        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./ktk_app/v_ktk_app', $data);
    }

    public function list_kwh()
    {
        $data['file'] = $this->m_gardu->tampil_koor_kwh();

        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./kwh/v_kwh', $data);
    }

    public function list_mcb()
    {
        $data['file'] = $this->m_gardu->tampil_koor_mcb();

        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./mcb/v_mcb', $data);
    }

    public function list_ct()
    {
        $data['file'] = $this->m_gardu->tampil_koor_ct();

        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./ct/v_ct', $data);
    }

    public function list_pt()
    {
        $data['file'] = $this->m_gardu->tampil_koor_pt();

        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./pt/v_pt', $data);
    }

    // Tiang TR
    public function list_ttr()
    {
        $data['file'] = $this->m_gardu->tampil_tiangtr();

        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./tiangtr/v_file_tiangtr', $data);
    }
    
    public function tampil_file_ttr($nama)
    {
        $datp['filo'] = $this->m_gardu->tampil_tiangtr();
        // ambil nama file dari database
        $this->m_gardu->get_nama_ttr($nama);
        // print_r($nama);

        // memanipulasi sebuah string menjadi huruf kecil
        $nama = strtolower($nama);

        // alamat file json di folder local
        $alamatfile = "./assets/uploads/tiangtr/" . $nama;

        // membaca semua data yang ada di file kita dalam bentuk string
        $json = file_get_contents($alamatfile);
        
        //  menerjemahkan string JSON ke array
        $obj  = json_decode($json);

        // mengubah string JSON menjadi array 
        $data = array(
            'file' => $obj
        );

        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./tiangtr/v_detail_ttr', $data, $datp);
    }

    public function validasi_ttr($nama)
    {
        // $data = $this->uri->segment('3');

        // ambil nama file dari database
        $this->m_gardu->get_nama_ttr($nama);
        
        // alamat file json di folder local
        $alamatfile = "./assets/uploads/tiangtr/" . $nama;
        
        // membaca semua data yang ada di file kita dalam bentuk string
        $json = file_get_contents($alamatfile);
        
        //  menerjemahkan string JSON ke array
        $obj  = json_decode($json, true);

        $data = array(
            'file' => $obj
        );

        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./tiangtr/v_valid_ttr', $data);
    }

    public function proses_validasi_ttr()
    {
        // $index = $this->uri->segment('3');
        
        // ambil nama file dari database
        // $this->m_gardu->get_nama_ttra($name);

        // // memanipulasi sebuah string menjadi huruf kecil
        // $apo = strtolower($do);

        // alamat file json di folder local
        $alamatfile = "./assets/uploads/tiangtr/Data_Tiang_TR_-_2_Feb_2023.json";

        // membaca semua data yang ada di file kita dalam bentuk string
        $json = file_get_contents($alamatfile);
        
        //  menerjemahkan string JSON ke array
        $obj  = json_decode($json, true);

        //assign the data to selected index
        // $row = $obj[$index];
        // $row = $obj;

        foreach ($obj as $key => $value) {
            if ($value['kd_tiangtr'] == 'TTR01') {
                $obj[$key]['value_1'] = "1";
                $obj[$key]['value_2'] = "1";
                $obj[$key]['value_3'] = "1";
                $obj[$key]['value_4'] = "1";
                $obj[$key]['value_5'] = "1";
                $obj[$key]['value_6'] = "1";
                $obj[$key]['value_7'] = "1";
            } else {
                $obj[$key]['value_1'] = "1";
                $obj[$key]['value_2'] = "1";
                $obj[$key]['value_3'] = "1";
                $obj[$key]['value_4'] = "1";
                $obj[$key]['value_5'] = "1";
                $obj[$key]['value_6'] = "1";
                $obj[$key]['value_7'] = "1";
            }
        }
            
            // $input = [
                
            //     'value_1'       => $this->input->post('value_1'),
            //     'value_2'       => $this->input->post('value_2'),
            //     'value_3'       => $this->input->post('value_3'),
            //     'value_4'       => $this->input->post('value_4'),
            //     'value_5'       => $this->input->post('value_5'),
            //     'value_6'       => $this->input->post('value_6'),
            //     'value_7'       => $this->input->post('value_7'),
                
            // ];
            
            //update the selected index
            // $obj[$index] = $input;
            // $input;

            //encode back to json
            // $data = json_encode($input, JSON_PRETTY_PRINT);
            // file_put_contents($alamatfile, $data);
            file_put_contents($alamatfile, json_encode($obj, JSON_PRETTY_PRINT));

        redirect('gardu/tampil_gardu');
    }
}