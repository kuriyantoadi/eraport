<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_walas extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('M_walas');

			// session login
			if ($this->session->userdata('wali_kelas') != true) {
				$url = base_url('C_login/fa');
				redirect($url);
			}
	}

	public function index()
	{
		$ses_id_kelas = $this->session->userdata('ses_id_kelas');
		$data['tampil'] = $this->M_walas->kelas_tampil($ses_id_kelas);

		$this->load->view('template/header-walas');
    $this->load->view('walas/siswa_tampil',$data);
		$this->load->view('template/footer-admin');
  }

	public function siswa_lihat($id_siswa)
	{
		// $ses_id_kelas = $this->session->userdata('ses_id_kelas');
		$data['tampil'] = $this->M_walas->siswa_lihat($id_siswa);

		$this->load->view('template/header-walas');
    $this->load->view('walas/siswa_lihat',$data);
		$this->load->view('template/footer-admin');
  }

	public function semester_1($id_siswa)
	{
		$ses_id_kelas = $this->session->userdata('ses_id_kelas');
		$data['tampil'] = $this->M_walas->semester_1($id_siswa, $ses_id_kelas);
		$data['tampil_siswa'] = $this->M_walas->siswa_lihat($id_siswa);


		$this->load->view('template/header-walas');
		$this->load->view('walas/semester_1', $data);
		$this->load->view('template/footer-admin');
	}

	public function semester_1_up()
	{
		$id_siswa = $this->input->post('id_siswa');


		$data_tambah = array(
			'nama_guru' => $nama_guru,
			'username' => $username,
			'id_kelas' => $id_kelas,
			'password' => sha1($password)
		);
	}


}
