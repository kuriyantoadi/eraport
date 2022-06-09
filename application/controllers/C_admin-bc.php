<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('M_admin');

			// session login
			if ($this->session->userdata('aktif') != true) {
				$url = base_url('C_login/f');
				redirect($url);
			}
	}

	public function index()
	{
    $this->load->view('C_admin/f');
  }


// tekno awal
	public function siswa_tekno()
	{
		// $ses_id_umkm = $this->session->userdata('ses_id');
		$data['tampil'] = $this->M_admin->siswa_tekno();
		$this->load->view('template/header-admin');
		$this->load->view('admin/siswa_tekno', $data);
	}

	public function siswa_hapus_tekno($id_siswa)
  {
    $id_siswa = array('id_siswa' => $id_siswa);

    $success = $this->M_admin->siswa_hapus_tekno($id_siswa);
    $this->session->set_flashdata('msg', '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Hapus Data Berhasil</strong>

              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
    redirect ('C_admin/siswa_tekno');
  }

	public function siswa_detail_tekno($id_siswa)
	{
		$data['tampil'] = $this->M_admin->siswa_detail_tekno($id_siswa);

		$this->load->view('template/header-admin');
		$this->load->view('admin/siswa_detail_tekno', $data);
		$this->load->view('template/footer-admin');

	}

	public function siswa_edit_tekno($id_siswa)
	{
		// $kode_masyarakat = array('id_masyarakat' => $id_masyarakat);
		$data['tampil'] = $this->M_admin->siswa_edit_tekno($id_siswa);

		$this->load->view('template/header-admin');
		$this->load->view('admin/siswa_edit_tekno', $data);
		$this->load->view('template/footer-admin');
	}

	public function siswa_print_tekno($id_siswa)
	{
		$data['tampil'] = $this->M_admin->siswa_print_tekno($id_siswa);
		$this->load->view('admin/print_tekno', $data);
	}

	public function siswa_edit_up_tekno()
	{
		$id_siswa = $this->input->post('id_siswa');
		$nis_siswa = $this->input->post('nis_siswa');
		$nisn_siswa = $this->input->post('nisn_siswa');
		$nama_siswa = $this->input->post('nama_siswa');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$nama_org_tua = $this->input->post('nama_org_tua');
		$program_keahlian = $this->input->post('program_keahlian');
		$paket_keahlian = $this->input->post('paket_keahlian');
		$status_kelulusan = $this->input->post('status_kelulusan');
		$pai = $this->input->post('pai');
		$pkn = $this->input->post('pkn');
		$b_ind = $this->input->post('b_ind');
		$mtk = $this->input->post('mtk');
		$b_ing = $this->input->post('b_ing');
		$senbud = $this->input->post('senbud');
		$sejindo = $this->input->post('sejindo');
		$pjok = $this->input->post('pjok');
		$simdig = $this->input->post('simdig');
		$kimia = $this->input->post('kimia');
		$fisika = $this->input->post('fisika');
		$produktif = $this->input->post('produktif');
		$rata_rata = $this->input->post('rata_rata');

		$kode_siswa= array('id_siswa' => $id_siswa);

		$data_edit = array(
			'nama_siswa' => $nama_siswa,
			'nis_siswa' => $nis_siswa,
			'nisn_siswa' => $nisn_siswa,
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' => $tgl_lahir,
			'nama_org_tua' => $nama_org_tua,
			'program_keahlian' => $program_keahlian,
			'paket_keahlian' => $paket_keahlian,
			'status_kelulusan' => $status_kelulusan,
			'pai' => $pai,
			'pkn' => $pkn,
			'b_ind' => $b_ind,
			'mtk' => $mtk,
			'b_ing' => $b_ing,
			'senbud' => $senbud,
			'sejindo' => $sejindo,
			'pjok' => $pjok,
			'simdig' => $simdig,
			'kimia' => $kimia,
			'fisika' => $fisika,
			'produktif' => $produktif,
			'rata_rata' => $rata_rata

		);

		$this->M_admin->siswa_edit_up_tekno($data_edit, $kode_siswa);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-primary alert-dismissible fade show" role="alert">
							<strong>Edit data berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>');
		redirect ('C_admin/siswa_tekno/'.$id_siswa);
	}

	public function siswa_pass_tekno($id_siswa)
	{
		$data['tampil'] = $this->M_admin->siswa_pass_tekno($id_siswa);

		$this->load->view('template/header-admin', $data);
		$this->load->view('admin/siswa_pass_tekno', $data);
		$this->load->view('template/footer-admin', $data);
	}

	public function siswa_pass_up_tekno()
	{
		$id_siswa = $this->input->post('id_siswa');
		$pass = $this->input->post('password');
		$password = md5($pass);

		$kode_siswa= array('id_siswa' => $id_siswa);

		$data_edit = array(
			'password' => $password
		);

		$this->M_admin->siswa_pass_up_tekno($data_edit, $kode_siswa);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-primary alert-dismissible fade show" role="alert">
							<strong>Password update berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>');
		redirect ('C_admin/siswa_tekno/'.$id_siswa);
	}

	// tekno akhir



	// bismen awal
		public function siswa_bismen()
		{
			// $ses_id_umkm = $this->session->userdata('ses_id');
			$data['tampil_siswa'] = $this->M_admin->siswa_bismen();

			$this->load->view('template/header-admin');
			$this->load->view('admin/siswa_bismen', $data);
		}

		public function siswa_tambah()
		{
			$this->load->view('template/header-admin');
			$this->load->view('admin/siswa_bismen', $data);
		}

		public function siswa_tambah_up()
		{
			$id_siswa = $this->input->post('id_siswa');
			$nis_siswa = $this->input->post('nis_siswa');
			$nisn_siswa = $this->input->post('nisn_siswa');
			$nama_siswa = $this->input->post('nama_siswa');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tgl_lahir = $this->input->post('tgl_lahir');
			$nama_org_tua = $this->input->post('nama_org_tua');
			$program_keahlian = $this->input->post('program_keahlian');
			$paket_keahlian = $this->input->post('paket_keahlian');
			$status_kelulusan = $this->input->post('status_kelulusan');
			$pai = $this->input->post('pai');
			$pkn = $this->input->post('pkn');
			$b_ind = $this->input->post('b_ind');
			$mtk = $this->input->post('mtk');
			$b_ing = $this->input->post('b_ing');
			$senbud = $this->input->post('senbud');
			$sejindo = $this->input->post('sejindo');
			$pjok = $this->input->post('pjok');
			$simdig = $this->input->post('simdig');
			$ipa = $this->input->post('ipa');
			$produktif = $this->input->post('produktif');
			$rata_rata = $this->input->post('rata_rata');

			$kode_siswa= array('id_siswa' => $id_siswa);

			$data_edit = array(
				'nama_siswa' => $nama_siswa,
				'nis_siswa' => $nis_siswa,
				'nisn_siswa' => $nisn_siswa,
				'tempat_lahir' => $tempat_lahir,
				'tgl_lahir' => $tgl_lahir,
				'nama_org_tua' => $nama_org_tua,
				'program_keahlian' => $program_keahlian,
				'paket_keahlian' => $paket_keahlian,
				'status_kelulusan' => $status_kelulusan,
				'pai' => $pai,
				'pkn' => $pkn,
				'b_ind' => $b_ind,
				'mtk' => $mtk,
				'b_ing' => $b_ing,
				'senbud' => $senbud,
				'sejindo' => $sejindo,
				'pjok' => $pjok,
				'simdig' => $simdig,
				'ipa' => $ipa,
				'produktif' => $produktif,
				'rata_rata' => $rata_rata

			);

			$this->M_admin->siswa_edit_up_bismen($data_edit, $kode_siswa);

			$this->session->set_flashdata('msg', '
							<div class="alert alert-primary alert-dismissible fade show" role="alert">
								<strong>Edit data berhasil</strong>

								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>');
			redirect ('C_admin/siswa_bismen/'.$id_siswa);
		}

		public function siswa_hapus_bismen($id_siswa)
	  {
	    $id_siswa = array('id_siswa' => $id_siswa);

	    $success = $this->M_admin->siswa_hapus_bismen($id_siswa);
	    $this->session->set_flashdata('msg', '
	            <div class="alert alert-warning alert-dismissible fade show" role="alert">
	              <strong>Hapus Data Berhasil</strong>

	              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	              </button>
	            </div>');
	    redirect ('C_admin/siswa_bismen');
	  }

		public function siswa_detail_bismen($id_siswa)
		{
			$data['tampil'] = $this->M_admin->siswa_detail_bismen($id_siswa);

			$this->load->view('template/header-admin');
			$this->load->view('admin/siswa_detail_bismen', $data);
			$this->load->view('template/footer-admin');

		}

		public function siswa_edit_bismen($id_siswa)
		{
			// $kode_masyarakat = array('id_masyarakat' => $id_masyarakat);
			$data['tampil'] = $this->M_admin->siswa_edit_bismen($id_siswa);

			$this->load->view('template/header-admin');
			$this->load->view('admin/siswa_edit_bismen', $data);
			$this->load->view('template/footer-admin');
		}

		public function siswa_print_bismen($id_siswa)
		{
			$data['tampil'] = $this->M_admin->print_bismen($id_siswa);
			$this->load->view('admin/print_bismen', $data);
		}

		public function siswa_edit_up_bismen()
		{
			$id_siswa = $this->input->post('id_siswa');
			$nis_siswa = $this->input->post('nis_siswa');
			$nisn_siswa = $this->input->post('nisn_siswa');
			$nama_siswa = $this->input->post('nama_siswa');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tgl_lahir = $this->input->post('tgl_lahir');
			$nama_org_tua = $this->input->post('nama_org_tua');
			$program_keahlian = $this->input->post('program_keahlian');
			$paket_keahlian = $this->input->post('paket_keahlian');
			$status_kelulusan = $this->input->post('status_kelulusan');
			$pai = $this->input->post('pai');
			$pkn = $this->input->post('pkn');
			$b_ind = $this->input->post('b_ind');
			$mtk = $this->input->post('mtk');
			$b_ing = $this->input->post('b_ing');
			$senbud = $this->input->post('senbud');
			$sejindo = $this->input->post('sejindo');
			$pjok = $this->input->post('pjok');
			$simdig = $this->input->post('simdig');
			$ipa = $this->input->post('ipa');
			$produktif = $this->input->post('produktif');
			$rata_rata = $this->input->post('rata_rata');

			$kode_siswa= array('id_siswa' => $id_siswa);

			$data_edit = array(
				'nama_siswa' => $nama_siswa,
				'nis_siswa' => $nis_siswa,
				'nisn_siswa' => $nisn_siswa,
				'tempat_lahir' => $tempat_lahir,
				'tgl_lahir' => $tgl_lahir,
				'nama_org_tua' => $nama_org_tua,
				'program_keahlian' => $program_keahlian,
				'paket_keahlian' => $paket_keahlian,
				'status_kelulusan' => $status_kelulusan,
				'pai' => $pai,
				'pkn' => $pkn,
				'b_ind' => $b_ind,
				'mtk' => $mtk,
				'b_ing' => $b_ing,
				'senbud' => $senbud,
				'sejindo' => $sejindo,
				'pjok' => $pjok,
				'simdig' => $simdig,
				'ipa' => $ipa,
				'produktif' => $produktif,
				'rata_rata' => $rata_rata

			);

			$this->M_admin->siswa_edit_up_bismen($data_edit, $kode_siswa);

			$this->session->set_flashdata('msg', '
							<div class="alert alert-primary alert-dismissible fade show" role="alert">
								<strong>Edit data berhasil</strong>

								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>');
			redirect ('C_admin/siswa_bismen/'.$id_siswa);
		}

		public function siswa_pass_bismen($id_siswa)
		{
			$data['tampil'] = $this->M_admin->siswa_pass_bismen($id_siswa);

			$this->load->view('template/header-admin', $data);
			$this->load->view('admin/siswa_pass_bismen', $data);
			$this->load->view('template/footer-admin', $data);
		}

		public function siswa_pass_up_bismen()
		{
			$id_siswa = $this->input->post('id_siswa');
			$pass = $this->input->post('password');
			$password = md5($pass);

			$kode_siswa= array('id_siswa' => $id_siswa);

			$data_edit = array(
				'password' => $password
			);

			$this->M_admin->siswa_pass_up_bismen($data_edit, $kode_siswa);

			$this->session->set_flashdata('msg', '
							<div class="alert alert-primary alert-dismissible fade show" role="alert">
								<strong>Password update berhasil</strong>

								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>');
			redirect ('C_admin/siswa_bismen/'.$id_siswa);
		}

		// bismen

}
