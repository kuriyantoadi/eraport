<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_siswa extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('M_siswa');

			// session login
			if ($this->session->userdata('siswa') != true) {
				$url = base_url('C_login');
				redirect($url);
			}
	}

	public function index()
	{
    $this->load->view('C_login');
  }


// dashboard nilai kelas X

	public function dashboard()
	{
		$ses_id = $this->session->userdata('ses_id');
		$data['tampil'] = $this->M_siswa->dashboard($ses_id);

		$this->load->view('template/header-siswa');
		$this->load->view('siswa/dashboard',$data);
		$this->load->view('template/footer-siswa');

	}

	public function profil()
	{
		$ses_id = $this->session->userdata('ses_id');
		$data['tampil'] = $this->M_siswa->dashboard($ses_id);

		$this->load->view('template/header-siswa');
		$this->load->view('siswa/profil',$data);
		$this->load->view('template/footer-siswa');

	}

  public function print_x_akl()
	{
		$ses_id = $this->session->userdata('ses_id');
		$data['tampil'] = $this->M_siswa->print_x_akl($ses_id);

    $this->load->view('siswa/print_x_akl',$data);
  }

	public function password()
	{
		$id_siswa = $this->session->userdata('ses_id');
		$data['tampil'] = $this->M_siswa->siswa_edit($id_siswa);

		$this->load->view('template/header-siswa');
		$this->load->view('siswa/password', $data);
		$this->load->view('template/footer-siswa');
	}

	public function siswa_pass_up()
	{
		$id_siswa = $this->input->post('id_siswa');
		$password = $this->input->post('password');

		$data_edit = array(
			'password' => sha1($password),
		);

		$this->M_siswa->siswa_edit_up($data_edit, $id_siswa);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
							<strong>Edit data berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>'
					);
		redirect ('C_siswa/password');
	}

	public function siswa_edit($id_siswa)
	{
		$data['tampil'] = $this->M_walas->siswa_edit($id_siswa);
		$data['tampil_kelas'] = $this->M_walas->kelas_tampil();

		$this->load->view('template/header-walas');
		$this->load->view('walas/siswa_edit', $data);
		$this->load->view('template/footer-walas');
	}

	public function siswa_edit_up()
	{
		$id_siswa = $this->input->post('id_siswa');
		$nis = $this->input->post('nis');
		$nisn_siswa = $this->input->post('nisn_siswa');
		$nama_siswa = $this->input->post('nama_siswa');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');

		$id_kelas = $this->input->post('id_kelas');
		$semester = $this->input->post('semester');
		$catatan_akademik = $this->input->post('catatan_akademik');
		$pkl_mitra_du_di = $this->input->post('pkl_mitra_du_di');
		$pkl_lokasi = $this->input->post('pkl_lokasi');
		$pkl_lamanya = $this->input->post('pkl_lamanya');
		$pkl_keterangan = $this->input->post('pkl_keterangan');
		$ekskul_1 = $this->input->post('ekskul_1');
		$ekskul_1_ket = $this->input->post('ekskul_1_ket');
		$ekskul_2 = $this->input->post('ekskul_2');
		$ekskul_2_ket = $this->input->post('ekskul_2_ket');
		$ekskul_3 = $this->input->post('ekskul_3');
		$ekskul_3_ket = $this->input->post('ekskul_3_ket');
		$kehadiran_sakit = $this->input->post('kehadiran_sakit');
		$kehadiran_izin = $this->input->post('kehadiran_izin');
		$kehadiran_alfa = $this->input->post('kehadiran_alfa');
		$agama = $this->input->post('agama');
		$status_dalam_keluarga = $this->input->post('status_dalam_keluarga');
		$anak_ke = $this->input->post('anak_ke');
		$alamat_siswa = $this->input->post('alamat_siswa');
		$no_telp_rumah = $this->input->post('no_telp_rumah');
		$sekolah_asal = $this->input->post('sekolah_asal');
		$nama_ayah = $this->input->post('nama_ayah');
		$nama_ibu = $this->input->post('nama_ibu');
		$alamat_orangtua = $this->input->post('alamat_orangtua');
		$no_telp_orangtua = $this->input->post('no_telp_orangtua');
		$pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
		$pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
		$nama_wali_siswa = $this->input->post('nama_wali_siswa');
		$alamat_wali_siswa = $this->input->post('alamat_wali_siswa');
		$no_telp_wali_siswa = $this->input->post('no_telp_wali_siswa');
		$pekerjaan_wali_siswa = $this->input->post('pekerjaan_wali_siswa');

		$data_edit = array(
			'nis' => $nis,
			'nisn_siswa' => $nisn_siswa,
			'nama_siswa' => $nama_siswa,
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' => $tgl_lahir,
			'id_kelas' => $id_kelas,
			'semester' => $semester,
			'catatan_akademik' => $catatan_akademik,
			'pkl_mitra_du_di' => $pkl_mitra_du_di,
			'pkl_lokasi' => $pkl_lokasi,
			'pkl_lamanya' => $pkl_lamanya,
			'pkl_keterangan' => $pkl_keterangan,
			'ekskul_1' => $ekskul_1,
			'ekskul_1_ket' => $ekskul_1_ket,
			'ekskul_2' => $ekskul_2,
			'ekskul_2_ket' => $ekskul_2_ket,
			'ekskul_3' => $ekskul_3,
			'ekskul_3_ket' => $ekskul_3_ket,
			'kehadiran_sakit' => $kehadiran_sakit,
			'kehadiran_izin' => $kehadiran_izin,
			'kehadiran_alfa' => $kehadiran_alfa,
			'agama' => $agama,
			'status_dalam_keluarga' => $status_dalam_keluarga,
			'anak_ke' => $anak_ke,
			'alamat_siswa' => $alamat_siswa,
			'no_telp_rumah' => $no_telp_rumah,
			'sekolah_asal' => $sekolah_asal,
			'nama_ayah' => $nama_ayah,
			'nama_ibu' => $nama_ibu,
			'alamat_orangtua' => $alamat_orangtua,
			'no_telp_orangtua' => $no_telp_orangtua,
			'pekerjaan_ayah' => $pekerjaan_ayah,
			'pekerjaan_ibu' => $pekerjaan_ibu,
			'nama_wali_siswa' => $nama_wali_siswa,
			'alamat_wali_siswa' => $alamat_wali_siswa,
			'no_telp_wali_siswa' => $no_telp_wali_siswa,
			'pekerjaan_wali_siswa' => $pekerjaan_wali_siswa,
		);

		$this->M_walas->siswa_edit_up($data_edit, $id_siswa);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-primary alert-dismissible fade show" role="alert">
							<strong>Edit data berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>');
		redirect ('C_walas');
	}


}
