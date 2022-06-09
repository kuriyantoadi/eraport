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

  public function dashboard_x_akl()
	{
		$ses_id = $this->session->userdata('ses_id');
		$data['tampil'] = $this->M_siswa->dashboard_x_akl($ses_id);

    $this->load->view('siswa/dashboard_x_akl',$data);
  }

	public function cetak_xi_akl()
	{
		$ses_id = $this->session->userdata('ses_id');
		$data['tampil'] = $this->M_siswa->dashboard_x_akl($ses_id);

		$this->load->view('siswa/cetak_x_akl',$data);
	}

  public function dashboard_x_otkp()
	{
    $this->load->view('C_admin/f');
  }

  public function dashboard_x_tkj()
  {
    $this->load->view('C_admin/f');
  }

  public function dashboard_x_rpl()
	{
    $this->load->view('C_admin/f');
  }

  public function dashboard_x_tkr()
	{
    $this->load->view('C_admin/f');
  }

  public function dashboard_x_tpm()
  {
    $this->load->view('C_admin/f');
  }

  // dashboard nilai kelas XI

    public function dashboard_xi_akl()
  	{
      $this->load->view('C_admin/f');
    }

    public function dashboard_xi_otkp()
  	{
      $this->load->view('C_admin/f');
    }

    public function dashboard_xi_tkj()
    {
      $this->load->view('C_admin/f');
    }

    public function dashboard_xi_rpl()
  	{
      $this->load->view('C_admin/f');
    }

    public function dashboard_xi_tkr()
  	{
      $this->load->view('C_admin/f');
    }

    public function dashboard_xi_tpm()
    {
      $this->load->view('C_admin/f');
    }

  // cetak raport kelas X

  public function cetak_x_akl()
	{
    $this->load->view('C_admin/f');
  }

  public function cetak_x_otkp()
	{
    $this->load->view('C_admin/f');
  }

  public function cetak_x_tkj()
  {
    $this->load->view('C_admin/f');
  }

  public function cetak_x_rpl()
	{
    $this->load->view('C_admin/f');
  }

  public function cetak_x_tkr()
	{
    $this->load->view('C_admin/f');
  }

  public function cetak_x_tpm()
  {
    $this->load->view('C_admin/f');
  }

  // cetak raport kelas XI




    public function cetak_xi_otkp()
  	{
      $this->load->view('C_admin/f');
    }

    public function cetak_xi_tkj()
    {
      $this->load->view('C_admin/f');
    }

    public function cetak_xi_rpl()
  	{
      $this->load->view('C_admin/f');
    }

    public function cetak_xi_tkr()
  	{
      $this->load->view('C_admin/f');
    }

    public function cetak_xi_tpm()
    {
      $this->load->view('C_admin/f');
    }

  //

}
