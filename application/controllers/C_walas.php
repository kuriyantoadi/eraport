<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_walas extends CI_Controller {

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
    $this->load->view('C_admin/f');
  }


}
