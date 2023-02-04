<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
        if ($this->session->userdata('login') == TRUE) {
            redirect(base_url());
        }
        $this->load->library('form_validation');
        $this->load->model('m_login');
    }
	
	public function index()
	{
		$this->load->view('./login/v_login');
	}

	public function auth()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        if ($this->form_validation->run() != false) {
            $data_login = array(
                'username' => htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES),
                'password' => md5(htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES)),
            );
            $user = $this->m_login->login($this->security->xss_clean($data_login));
            if ($user->num_rows() > 0) {
                $data = $user->row_array();
                $this->session->set_userdata('login', TRUE);
                $this->session->set_userdata('username', $data['username']);
                $this->session->set_userdata('kd_unit', $data['kd_unit']);
                $this->session->set_userdata('id_level', $data['id_level']);
                redirect(base_url());
            } else {
                $this->session->set_flashdata('gagal', 'Username atau password salah!');
                redirect(base_url('login'));
            }
        }
    }
}