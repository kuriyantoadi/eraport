<?php

class M_admin extends CI_Model{

  function dashboard($ses_id){
    $this->db->where('id_siswa', $ses_id);
    $hasil = $this->db->get('tb_siswa')->result();
    return $hasil;
  }


//tekno
  function siswa_tekno(){
    $tampil = $this->db->get('tb_siswa_tekno')->result();
    return $tampil;
  }


  public function siswa_hapus_tekno($id_siswa)
  {
    $this->db->where($id_siswa);
    $this->db->delete('tb_siswa_tekno');
  }

  function siswa_detail_tekno($id_siswa){
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa_tekno')->result();
    return $hasil;
  }

  public function siswa_edit_tekno($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa_tekno')->result();
    return $hasil;
  }

  function siswa_edit_up_tekno($data_edit, $kode_siswa){
    $this->db->where($kode_siswa);
    $this->db->update('tb_siswa_tekno',$data_edit);
  }

  public function siswa_print_tekno($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa_tekno')->result();
    return $hasil;
  }

  public function siswa_pass_tekno($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa_tekno')->result();
    return $hasil;
  }

  function siswa_pass_up_tekno($data_edit, $kode_siswa){
    $this->db->where($kode_siswa);
    $this->db->update('tb_siswa_tekno',$data_edit);
  }
// tekno


//bismen awal
  function siswa_bismen(){
    $tampil = $this->db->get('tb_siswa_bismen')->result();
    return $tampil;
  }


  public function siswa_hapus_bismen($id_siswa)
  {
    $this->db->where($id_siswa);
    $this->db->delete('tb_siswa_bismen');
  }

  function siswa_detail_bismen($id_siswa){
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa_bismen')->result();
    return $hasil;
  }

  public function siswa_edit_bismen($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa_bismen')->result();
    return $hasil;
  }

  function siswa_edit_up_bismen($data_edit, $kode_siswa){
    $this->db->where($kode_siswa);
    $this->db->update('tb_siswa_bismen',$data_edit);
  }

  public function print_bismen($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa_bismen')->result();
    return $hasil;
  }

  public function siswa_pass_bismen($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa_bismen')->result();
    return $hasil;
  }

  function siswa_pass_up_bismen($data_edit, $kode_siswa){
    $this->db->where($kode_siswa);
    $this->db->update('tb_siswa_bismen',$data_edit);
  }
// bismen akhir

}

 ?>
