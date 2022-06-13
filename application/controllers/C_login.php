<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

  public function __construct()
	{
			parent::__construct();
			$this->load->model('M_login');
      $this->load->model('M_siswa');
	}

  public function index()
  {
    $this->load->view('siswa/login');
  }

  public function login_siswa()
  {
    $nisn_siswa = htmlspecialchars($this->input->post('nisn_siswa', true), ENT_QUOTES);
    $password = htmlspecialchars($this->input->post('password', true), ENT_QUOTES);

    $cek_login = $this->M_login->login_siswa($nisn_siswa, $password);

    if ($cek_login->num_rows() > 0) {
      $data = $cek_login->row_array();

      if ($data['status']=='akl') {
        $this->session->set_userdata('siswa', true);
        $this->session->set_userdata('ses_id', $data['id_siswa']);
        $this->session->set_userdata('ses_nisn', $data['nisn_siswa']);
        redirect('C_siswa/dashboard');

      }elseif ($data['status']=='otkp') {
        $this->session->set_userdata('siswa', true);
        $this->session->set_userdata('ses_id', $data['id_siswa']);
        $this->session->set_userdata('ses_username', $data['nisn_siswa']);
        redirect('C_siswa/dashboard');

      }elseif ($data['status']=='tkj') {
        $this->session->set_userdata('siswa', true);
        $this->session->set_userdata('ses_id', $data['id_siswa']);
        $this->session->set_userdata('ses_username', $data['nisn_siswa']);
        redirect('C_siswa/dashboard');

      }elseif ($data['status']=='rpl') {
        $this->session->set_userdata('siswa', true);
        $this->session->set_userdata('ses_id', $data['id_siswa']);
        $this->session->set_userdata('ses_username', $data['nisn_siswa']);
        redirect('C_siswa/dashboard');

      }elseif ($data['status']=='tkr') {
        $this->session->set_userdata('siswa', true);
        $this->session->set_userdata('ses_id', $data['id_siswa']);
        $this->session->set_userdata('ses_username', $data['nisn_siswa']);
        redirect('C_siswa/dashboard');

      }elseif ($data['status']=='tpm') {
        $this->session->set_userdata('siswa', true);
        $this->session->set_userdata('ses_id', $data['id_siswa']);
        $this->session->set_userdata('ses_username', $data['nisn_siswa']);
        redirect('C_siswa/dashboard');

      }else {
        $url = base_url('C_login');
        echo $this->session->set_flashdata('msg', '

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          NISN atau Password Salah<br> Silahkan Login Kembali
        </div>
        ');
        redirect($url);
      }

    }

    $this->session->set_flashdata('msg', '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      NISN atau Password Salah<br> Silahkan Login Kembali
    </div>
    ');
    $url = base_url('C_login');
    redirect($url);
  }


// Login Admin

  public function fa()
  {
    // $this->load->view('admin/template/header-admin');
    $this->load->view('admin/login');
    // $this->load->view('admin/template/footer-admin');
  }

  public function login_admin()
  {
    $username = htmlspecialchars($this->input->post('username', true), ENT_QUOTES);
    $password = htmlspecialchars($this->input->post('password', true), ENT_QUOTES);

    $cek_login = $this->M_login->login_admin($username, $password);

    if ($cek_login->num_rows() > 0) {
      $data = $cek_login->row_array();

      if ($data['status']=='wali_kelas') {
        $this->session->set_userdata('wali_kelas', true);
        $this->session->set_userdata('ses_id', $data['id_admin']);
        $this->session->set_userdata('ses_user', $data['username']);
        $this->session->set_userdata('ses_id_kelas', $data['id_kelas']);
        redirect('C_walas');

      }elseif ($data['status']=='admin') {
        $this->session->set_userdata('admin', true);
        $this->session->set_userdata('ses_id', $data['id_admin']);
        $this->session->set_userdata('ses_user', $data['username']);
        redirect('C_admin/home');

      }else {
        $url = base_url('C_login/fa');
        echo $this->session->set_flashdata('msg', '

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          Username atau Password Salah<br> Silahkan Login Kembali
        </div>
        ');
        redirect($url);
      }

    }

    $this->session->set_flashdata('msg', '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      Username atau Password Salah<br> Silahkan Login Kembali
    </div>
    ');
    $url = base_url('C_login/fa');
    redirect($url);
  }

  public function siswa_logout()
  {
    $this->session->sess_destroy();
    $url = base_url();
    redirect('C_siswa');
  }

  public function admin_logout()
  {
    $this->session->sess_destroy();
    $url = base_url();
    redirect('C_login/fa');
  }

}
