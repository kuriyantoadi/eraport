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
		$this->load->view('template/footer-walas');
  }

	public function siswa_lihat($id_siswa)
	{
		// $ses_id_kelas = $this->session->userdata('ses_id_kelas');
		$data['tampil'] = $this->M_walas->siswa_lihat($id_siswa);

		$this->load->view('template/header-walas');
    $this->load->view('walas/siswa_lihat',$data);
		$this->load->view('template/footer-walas');
  }

	public function siswa_pass($id_siswa)
	{
		$data['tampil'] = $this->M_walas->siswa_edit($id_siswa);

		$this->load->view('template/header-walas');
		$this->load->view('walas/siswa_pass', $data);
		$this->load->view('template/footer-walas');
	}

	public function siswa_pass_up()
	{
		$id_siswa = $this->input->post('id_siswa');
		$password = $this->input->post('password');

		$data_edit = array(
			'password' => sha1($password),
		);

		$this->M_walas->siswa_edit_up($data_edit, $id_siswa);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
							<strong>Edit data berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>'
					);
		redirect ('C_walas');
	}

	public function semester_1($id_siswa)
	{
		$ses_id_kelas = $this->session->userdata('ses_id_kelas');
		$data['tampil'] = $this->M_walas->semester_1($id_siswa, $ses_id_kelas);
		$data['tampil_siswa'] = $this->M_walas->siswa_lihat($id_siswa);


		$this->load->view('template/header-walas');
		$this->load->view('walas/semester_1', $data);
		$this->load->view('template/footer-walas');
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
