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

// halaman guru awal
public function index()
{
	$data['tampil'] = $this->M_admin->walas_tampil();

	$this->load->view('template/header-admin');
	$this->load->view('admin/walas_tampil',$data);
	$this->load->view('template/footer-admin');
}


public function home()
{
	$this->load->view('template/header-admin');
	$this->load->view('admin/home');
	$this->load->view('template/footer-admin');
}

	public function walas_tambah()
	{
		$data['tampil_kelas'] = $this->M_admin->kelas_tampil();

		$this->load->view('template/header-admin');
		$this->load->view('admin/walas_tambah',$data);
		$this->load->view('template/footer-admin');
	}

	public function walas_tambah_up()
	{
		$nama_guru = $this->input->post('nama_guru');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$id_kelas = $this->input->post('id_kelas');

		$data_tambah = array(
			'nama_guru' => $nama_guru,
			'username' => $username,
			'id_kelas' => $id_kelas,
			'password' => sha1($password),
		);

		$this->M_admin->walas_tambah_up($data_tambah);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-info alert-dismissible fade show" role="alert">
							<strong>Edit data berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>');
		redirect ('C_admin');
	}

	public function walas_edit($id_admin)
	{
		$data['tampil'] = $this->M_admin->walas_edit($id_admin);
		$data['tampil_kelas'] = $this->M_admin->kelas_tampil();

		$this->load->view('template/header-admin');
		$this->load->view('admin/walas_edit', $data);
		$this->load->view('template/footer-admin');
	}

	public function walas_edit_up()
	{
		$id_admin = $this->input->post('id_admin');
		$nama_guru = $this->input->post('nama_guru');
		$username = $this->input->post('username');
		$id_kelas = $this->input->post('id_kelas');

		$data_edit = array(
			'nama_guru' => $nama_guru,
			'username' => $username,
			'id_kelas' => $id_kelas
		);

		$this->M_admin->walas_edit_up($data_edit, $id_admin);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-primary alert-dismissible fade show" role="alert">
							<strong>Edit data berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>');
		redirect ('C_admin/walas_edit/'.$id_admin);
	}


	public function walas_hapus($id_admin)
	{
		$id_admin = array('id_admin' => $id_admin);

		$success = $this->M_admin->walas_hapus($id_admin);
		$this->session->set_flashdata('msg', '
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>Hapus Data Berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>');
		redirect ('C_admin');
	}

	public function walas_pass($id_admin)
	{
		$data['tampil'] = $this->M_admin->walas_edit($id_admin);

		$this->load->view('template/header-admin');
		$this->load->view('admin/walas_pass', $data);
		$this->load->view('template/footer-admin');
	}

	public function walas_pass_up()
	{
		$id_admin = $this->input->post('id_admin');
		$password = $this->input->post('password');

		$data_edit = array(
			'password' => sha1($password),
		);

		$this->M_admin->walas_edit_up($data_edit, $id_admin);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
							<strong>Edit data berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>'
					);
		redirect ('C_admin');
	}

	// halaman guru akhir


	// halaman siswa awal
	public function siswa_tampil()
	{
		$data['tampil'] = $this->M_admin->siswa_tampil();

		$this->load->view('template/header-admin');
    $this->load->view('admin/siswa_tampil',$data);
		$this->load->view('template/footer-admin');

  }

	public function siswa_edit($id_siswa)
	{
		$data['tampil'] = $this->M_admin->siswa_edit($id_siswa);
		$data['tampil_kelas'] = $this->M_admin->kelas_tampil();

		$this->load->view('template/header-admin');
		$this->load->view('admin/siswa_edit', $data);
		$this->load->view('template/footer-admin');
	}

	public function siswa_edit_up()
	{
		$id_siswa = $this->input->post('id_siswa');
		$nis = $this->input->post('nis');
		$nisn = $this->input->post('nisn');
		$nama_siswa = $this->input->post('nama_siswa');
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
			'nisn' => $nisn,
			'nama_siswa' => $nama_siswa,
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
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>Hapus Data Berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>');
		redirect ('C_admin/siswa_tampil');
	}


	public function siswa_pass($id_siswa)
	{
		$data['tampil'] = $this->M_admin->siswa_edit($id_siswa);

		$this->load->view('template/header-admin');
		$this->load->view('admin/siswa_pass', $data);
		$this->load->view('template/footer-admin');
	}

	public function siswa_pass_up()
	{
		$id_siswa = $this->input->post('id_siswa');
		$nis = $this->input->post('nis');
		$nisn = $this->input->post('nisn');
		$nama_siswa = $this->input->post('nama_siswa');
		$id_kelas = $this->input->post('id_kelas');
		$semester = $this->input->post('semester');

		$data_edit = array(
			'nis' => $nis,
			'nisn' => $nisn,
			'nama_siswa' => $nama_siswa,
			'id_kelas' => $id_kelas,
			'semester' => $semester,
		);

		$this->M_admin->siswa_edit_up($data_edit, $id_siswa);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
							<strong>Edit data berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>'
					);
		redirect ('C_admin/siswa_tampil');
	}

	public function siswa_tambah()
	{
		$data['tampil_kelas'] = $this->M_admin->kelas_tampil();

		$this->load->view('template/header-admin');
		$this->load->view('admin/siswa_tambah',$data);
		$this->load->view('template/footer-admin');
	}

	public function siswa_tambah_up()
	{
		$nis = $this->input->post('nis');
		$nisn = $this->input->post('nisn');
		$password = $this->input->post('password');
		$nama_siswa = $this->input->post('nama_siswa');
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

		$data_tambah = array(
			'nis' => $nis,
			'nisn' => $nisn,
			'nama_siswa' => $nama_siswa,
			'semester' => $semester,
			'password' => sha1($password),
			'id_kelas' => $id_kelas,
			'status' => 'siswa',
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

		$this->M_admin->siswa_tambah_up($data_tambah);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-info alert-dismissible fade show" role="alert">
							<strong>Edit data berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>');
		redirect ('C_admin/siswa_tampil');
	}

	// halaman siswa akhir


	// halaman kelas awal
		public function kelas_tampil()
		{
			$data['tampil'] = $this->M_admin->kelas_tampil();
			$this->load->view('template/header-admin');
	    $this->load->view('admin/kelas_tampil', $data);
			$this->load->view('template/footer-admin');
	  }

		public function kelas_tambah()
		{
			$this->load->view('template/header-admin');
			$this->load->view('admin/kelas_tambah');
			$this->load->view('template/footer-admin');
		}

		public function kelas_tambah_up()
		{
			$tingkat = $this->input->post('tingkat');
			$nama_kelas = $this->input->post('nama_kelas');
			$kompetensi_keahlian = $this->input->post('kompetensi_keahlian');
			$program_keahlian = $this->input->post('program_keahlian');

			$data_tambah = array(
				'nama_kelas' => $nama_kelas,
				'tingkat' => $tingkat,
				'kompetensi_keahlian' => $kompetensi_keahlian,
				'program_keahlian' => $program_keahlian
			);

			$this->M_admin->kelas_tambah_up($data_tambah);

			$this->session->set_flashdata('msg', '
							<div class="alert alert-info alert-dismissible fade show" role="alert">
								<strong>Edit data berhasil</strong>

								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>');
			redirect ('C_admin/kelas_tampil');
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
			$kompetensi_keahlian = $this->input->post('kompetensi_keahlian');
			$program_keahlian = $this->input->post('program_keahlian');


			$data_edit = array(
				'nama_kelas' => $nama_kelas,
				'tingkat' => $tingkat,
				'kompetensi_keahlian' => $kompetensi_keahlian,
				'program_keahlian' => $program_keahlian
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

			$success = $this->M_admin->kelas_hapus($id_kelas);
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

		//mapel awal
		public function mapel_tampil()
		{
			$data['tampil'] = $this->M_admin->mapel_tampil();

			$this->load->view('template/header-admin');
			$this->load->view('admin/mapel_tampil',$data);
			$this->load->view('template/footer-admin');
		}

		public function mapel_tambah()
		{
			$data['tampil_kelas'] = $this->M_admin->kelas_tampil();

			$this->load->view('template/header-admin');
			$this->load->view('admin/mapel_tambah',$data);
			$this->load->view('template/footer-admin');
		}

		public function mapel_tambah_up()
		{
			$nama_mapel = $this->input->post('nama_mapel');
			$id_kelas = $this->input->post('id_kelas');
			$semester = $this->input->post('semester');

			$data_tambah = array(
				'nama_mapel' => $nama_mapel,
				'id_kelas' => $id_kelas,
				'semester' => $semester
			);

			$this->M_admin->mapel_tambah_up($data_tambah);

			$this->session->set_flashdata('msg', '
							<div class="alert alert-info alert-dismissible fade show" role="alert">
								<strong>Edit data berhasil</strong>

								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>');
			redirect ('C_admin/mapel_tampil');
		}

		public function mapel_edit($id_mapel)
		{
			$data['tampil'] = $this->M_admin->mapel_edit($id_mapel);
			$data['tampil_kelas'] = $this->M_admin->kelas_tampil();

			$this->load->view('template/header-admin');
			$this->load->view('admin/mapel_edit', $data);
			$this->load->view('template/footer-admin');
		}

		public function mapel_edit_up()
		{
			$id_mapel = $this->input->post('id_mapel');
			$nama_mapel = $this->input->post('nama_mapel');
			$id_kelas = $this->input->post('id_kelas');
			$semester = $this->input->post('semester');

			$data_edit = array(
				'nama_mapel' => $nama_mapel,
				'id_kelas' => $id_kelas,
				'semester' => $semester
			);

			$this->M_admin->mapel_edit_up($data_edit, $id_mapel);

			$this->session->set_flashdata('msg', '
							<div class="alert alert-primary alert-dismissible fade show" role="alert">
								<strong>Edit data berhasil</strong>

								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>');
			redirect ('C_admin/mapel_tampil/');
		}


		public function mapel_hapus($id_mapel)
		{
			$id_mapel = array('id_mapel' => $id_mapel);

			$success = $this->M_admin->mapel_hapus($id_mapel);
			$this->session->set_flashdata('msg', '
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>Hapus Data Berhasil</strong>

								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>');
			redirect ('C_admin/mapel_tampil');
		}

		//mapel awal

}
