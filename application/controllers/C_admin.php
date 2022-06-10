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

	public function guru_edit($id_admin)
	{
		$data['tampil'] = $this->M_admin->guru_edit($id_admin);

		$this->load->view('template/header-admin');
		$this->load->view('admin/siswa_edit_tekno', $data);
		$this->load->view('template/footer-admin');
	}

	public function guru_edit_up()
	{
		$id_admin = $this->input->post('id_admin');
		$nama_guru = $this->input->post('nama_guru');
		$username = $this->input->post('username');
		$id_kelas = $this->input->post('id_kelas');

		$data_edit = array(
			'nama_siswa' => $nama_siswa,
			'username' => $username,
			'id_kelas' => $id_kelas
		);

		$this->M_admin->guru_edit_up($data_edit, $id_admin);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-primary alert-dismissible fade show" role="alert">
							<strong>Edit data berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>');
		redirect ('C_admin/guru_edit/'.$id_siswa);
	}


	public function guru_hapus($id_admin)
	{
		$id_admin = array('id_guru' => $id_admin);

		$success = $this->M_admin->guru_hapus($id_admin);
		$this->session->set_flashdata('msg', '
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
							<strong>Hapus Data Berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>');
		redirect ('C_admin/siswa_tekno');
	}

	public function guru_pass($id_admin)
	{
		$data['tampil'] = $this->M_admin->guru_pass($id_admin);

		$this->load->view('template/header-admin');
		$this->load->view('admin/guru_pass', $data);
		$this->load->view('template/footer-admin');
	}

	public function guru_pass_up()
	{
		$id_admin = $this->input->post('id_admin');
		$pass = $this->input->post('password');
		$password = sha1($pass);

		$data_edit = array(
			'password' => $password,
		);

		$this->M_admin->guru_edit_up($data_edit, $id_admin);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-primary alert-dismissible fade show" role="alert">
							<strong>Edit data berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>');
		redirect ('C_admin/guru_edit/'.$id_admin);
	}

	// halaman guru akhir


	// halaman siswa awal
	public function siswa_tampil()
	{
		$data['tampil'] = $this->M_admin->siswa_tampil();

    $this->load->view('admin/siswa_tampil');
  }

	public function siswa_edit($id_siswa)
	{
		$data['tampil'] = $this->M_admin->siswa_edit($id_siswa);

		$this->load->view('template/header-admin');
		$this->load->view('admin/siswa_edit', $data);
		$this->load->view('template/footer-admin');
	}

	public function siswa_edit_up()
	{
		$id_siswa = $this->input->post('$id_siswa');
		$nis = $this->input->post('nis');
		$nisn = $this->input->post('nisn');
		$nama_siswa = $this->input->post('nama_siswa');
		$prog = $this->input->post('prog');
		$kompetensi = $this->input->post('kompetensi');
		$semester = $this->input->post('$semester');
		$walas = $this->input->post('walas');
		$nip = $this->input->post('nip');

		$data_edit = array(
			'nis' => $nis,
			'nisn' => $nisn,
			'nama_siswa' => $nama_siswa,
			'prog' => $prog,
			'kompetensi' => $kompetensi,
			'semester' => $semester,
			'walas' => $walas,
			'nip' => $nip
		);

		$this->M_admin->siswa_edit_up($data_edit, $id_siswa);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-primary alert-dismissible fade show" role="alert">
							<strong>Edit data berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>');
		redirect ('C_admin/siswa_edit/'.$id_siswa);
	}


	public function siswa_hapus($id_siswa)
	{
		$id_siswa = array('id_siswa' => $id_siswa);

		$success = $this->M_admin->siswa_hapus($id_siswa);
		$this->session->set_flashdata('msg', '
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
							<strong>Hapus Data Berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>');
		redirect ('C_admin/siswa_tampil');
	}

	// halaman siswa akhir


	// halaman kelas awal
		public function tampil_kelas()
		{
			$data['tampil'] = $this->M_admin->tampil_kelas();
	    $this->load->view('admin/tampil_kelas');
	  }


		public function kelas_edit($id_kelas)
		{
			$data['tampil'] = $this->M_admin->kelas_edit($id_kelas);

			$this->load->view('template/header-admin');
			$this->load->view('admin/kelas_edit', $data);
			$this->load->view('template/footer-admin');
		}

		public function kelas_edit_up()
		{
			$id_kelas = $this->input->post('id_kelas');
			$tingkat = $this->input->post('tingkat');
			$nama_kelas = $this->input->post('nama_kelas');

			$data_edit = array(
				'nama_kelas' => $nama_kelas,
				'tingkat' => $tingkat
			);

			$this->M_admin->kelas_edit_up($data_edit, $id_kelas);

			$this->session->set_flashdata('msg', '
							<div class="alert alert-primary alert-dismissible fade show" role="alert">
								<strong>Edit data berhasil</strong>

								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>');
			redirect ('C_admin/kelas_edit/'.$id_kelas);
		}


		public function kelas_hapus($id_kelas)
		{
			$id_kelas = array('id_kelas' => $id_kelas);

			$success = $this->M_admin->guru_hapus($id_kelas);
			$this->session->set_flashdata('msg', '
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<strong>Hapus Data Berhasil</strong>

								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>');
			redirect ('C_admin/kelas_tampil');
		}


		// halaman kelas akhir



}
