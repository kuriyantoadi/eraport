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

}
