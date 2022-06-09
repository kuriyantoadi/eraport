<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('M_admin');

			// session login
			if ($this->session->userdata('admin') != true) {
				$url = base_url('C_login/fa');
				redirect($url);
			}
	}

	public function index()
	{
    $this->load->view('C_admin/fa');
  }

// halaman guru awal
	public function guru_tampil()
	{
		$data['tampil'] = $this->M_admin->guru_tampil();

    $this->load->view('admin/guru_tampil');
  }

	// halaman guru akhir


	// halaman siswa awal
		public function siswa_tampil()
		{
			$data['tampil'] = $this->M_admin->siswa_tampil();

	    $this->load->view('admin/siswa_tampil');
	  }

		// halaman siswa akhir


	// halaman kelas awal
		public function siswa_kelas()
		{
			$data['tampil'] = $this->M_admin->siswa_kelas();

	    $this->load->view('admin/siswa_kelas');
	  }

		// halaman kelas akhir



}
