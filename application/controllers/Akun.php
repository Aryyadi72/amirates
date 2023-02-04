<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

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
        $this->load->model('m_akun');
    }
	
	public function index()
	{
		$data['tampil_akun'] = $this->m_akun->tampil_akun();
		
		$this->load->view('./dashboard/v_navbar');
		$this->load->view('./akun/v_akun', $data);
	}

	public function tambah_akun()
	{
		$this->load->view('./dashboard/v_navbar');
		$this->load->view('./akun/v_tbh_akun');
	}

	public function proses_tambah_akun()
	{
		$config['upload_path']          = './assets/uploads/foto-profil/';
        $config['allowed_types']        = 'gif|jpg|png|PNG';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo "Gagal Tambah";
        } else {
			
		$foto_user 		= $this->upload->data();
        $foto_user 		= $foto_user['file_name'];
		$nama_user 		= $this->input->post('nama_user');
		$alamat_user 	= $this->input->post('alamat_user');
        $jk_user 		= $this->input->post('jk_user');
        $no_telp_user 	= $this->input->post('no_telp_user');
        $email_user 	= $this->input->post('email_user');
		$username 		= $this->input->post('username');
        $password 		= $this->input->post('password');
        $kd_unit 		= $this->input->post('kd_unit');
        $id_level 		= $this->input->post('id_level');

		$data = array(
			'nama_user' 		=> ucwords($nama_user),
            'alamat_user' 		=> $alamat_user,
            'jk_user' 			=> $jk_user,
            'no_telp_user' 		=> $no_telp_user,
            'email_user' 		=> $email_user,
			'foto_user' 		=> $foto_user,
			'username' 			=> $username,
            'password' 			=> md5($password),
            'kd_unit' 			=> $kd_unit,
            'id_level' 			=> $id_level,
        );
        
		$this->db->insert('tb_login', $data);
        redirect('akun');

		}
	}

	public function hapus_user($id_user)
    {
		$this->m_akun->hapus_akun($id_user);
        $this->session->set_flashdata('sukses', 'Data Dengan ID ' . $id_user . ' berhasil dihapus.');
        redirect(base_url('akun'));
    }

	public function edit_user($id)
	{
		$data['akun'] = $this->m_akun->edit_user($id);

        $this->load->view('./dashboard/v_navbar');
		$this->load->view('./akun/v_edit_akun', $data);
    }

    public function proses_edit_akun($id)
    {
        $id = $this->input->post('id_user');
		$config['upload_path']          = './assets/uploads/foto-profil/';
        $config['allowed_types']        = 'gif|jpg|png|PNG|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {

        $nama_user 		= $this->input->post('nama_user');
		$alamat_user 	= $this->input->post('alamat_user');
        $jk_user 		= $this->input->post('jk_user');
        $no_telp_user 	= $this->input->post('no_telp_user');
        $email_user 	= $this->input->post('email_user');
		$username 		= $this->input->post('username');
        $password 		= $this->input->post('password');
        $kd_unit 		= $this->input->post('kd_unit');
        $id_level 		= $this->input->post('id_level');

		$data = array(
			'nama_user' 		=> ucwords($nama_user),
            'alamat_user' 		=> $alamat_user,
            'jk_user' 			=> $jk_user,
            'no_telp_user' 		=> $no_telp_user,
            'email_user' 		=> $email_user,
			'username' 			=> $username,
            'password' 			=> md5($password),
            'kd_unit' 			=> $kd_unit,
            'id_level' 			=> $id_level,
        );
        
		$this->db->where('id_user', $id);
		$this->db->update('tb_login', $data);
        redirect('akun');

        } else {
			
		$foto_user 		= $this->upload->data();
        $foto_user 		= $foto_user['file_name'];
		$nama_user 		= $this->input->post('nama_user');
		$alamat_user 	= $this->input->post('alamat_user');
        $jk_user 		= $this->input->post('jk_user');
        $no_telp_user 	= $this->input->post('no_telp_user');
        $email_user 	= $this->input->post('email_user');
		$username 		= $this->input->post('username');
        $password 		= $this->input->post('password');
        $kd_unit 		= $this->input->post('kd_unit');
        $id_level 		= $this->input->post('id_level');

		$data = array(
			'nama_user' 		=> ucwords($nama_user),
            'alamat_user' 		=> $alamat_user,
            'jk_user' 			=> $jk_user,
            'no_telp_user' 		=> $no_telp_user,
            'email_user' 		=> $email_user,
			'foto_user' 		=> $foto_user,
			'username' 			=> $username,
            'password' 			=> md5($password),
            'kd_unit' 			=> $kd_unit,
            'id_level' 			=> $id_level,
        );
        
		$this->db->where('id_user', $id);
		$this->db->update('tb_login', $data);
        redirect('akun');

		}
    }

	public function detail_user($id_user)
	{
		$data['title'] = "Detail Akun User - AMIRATES";
        $this->load->model('m_akun');
        $detail = $this->m_akun->detail_user($id_user);
        $data['detail'] = $detail;

		$this->load->view('./akun/v_detail_akun', $data);
	}
	
}