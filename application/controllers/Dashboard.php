<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
    }
	
	public function index()
	{
		$this->load->model('m_gardu');
		
		$data['koor'] 	= $this->m_gardu->tampil_koor_gardu();
		$data['ttr'] 	= $this->m_gardu->tampil_koor_ttr();
		$data['jtr'] 	= $this->m_gardu->tampil_koor_jtr();
		$data['tm'] 	= $this->m_gardu->tampil_koor_tm();
		$data['tr'] 	= $this->m_gardu->tampil_koor_tr();
		$data['app'] 	= $this->m_gardu->tampil_koor_app();
		$data['kapp'] 	= $this->m_gardu->tampil_koor_ktk_app();
		$data['kwh'] 	= $this->m_gardu->tampil_koor_kwh();
		$data['mcb'] 	= $this->m_gardu->tampil_koor_mcb();
		$data['ct'] 	= $this->m_gardu->tampil_koor_ct();
		$data['pt'] 	= $this->m_gardu->tampil_koor_pt();
		$data['up3'] 	= $this->m_gardu->tampil_koor_up3();
		$data['ulp'] 	= $this->m_gardu->tampil_koor_ulp();

		$this->load->view('./dashboard/v_navbar');
		$this->load->view('./dashboard/v_dashboard', $data);
	}
}