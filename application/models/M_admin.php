<?php

class M_admin extends CI_Model{

// guru awal

  public function walas_tampil()
  {
    $this->db->select('*');
    $this->db->from('tb_admin');
    $this->db->join('tb_kelas','tb_admin.id_kelas = tb_kelas.id_kelas');
    $query = $this->db->get()->result();
    return $query;
  }

  function walas_tambah_up($data_tambah){
    $this->db->insert('tb_admin',$data_tambah);
  }

  public function walas_edit($id_admin)
  {
    $this->db->where('id_admin', $id_admin);
    $hasil = $this->db->get('tb_admin')->result();
    return $hasil;
  }

  function walas_edit_up($data_edit, $id_admin){
    $this->db->where('id_admin',$id_admin);
    $this->db->update('tb_admin',$data_edit);
  }

  public function walas_hapus($id_guru)
  {
    $this->db->where($id_guru);
    $this->db->delete('tb_admin');
  }
// guru akhir


// siswa awal
  function siswa_tampil(){
    $this->db->select('*');
    $this->db->from('tb_siswa');
    $this->db->join('tb_kelas','tb_siswa.id_kelas = tb_kelas.id_kelas');
    $query = $this->db->get()->result();
    return $query;
  }

  function siswa_edit($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa')->result();
    return $hasil;
  }

  function siswa_edit_up($data_edit, $id_siswa){
    $this->db->where('id_siswa',$id_siswa);
    $this->db->update('tb_siswa',$data_edit);
  }

  function siswa_hapus($id_siswa)
  {
    $this->db->where($id_siswa);
    $this->db->delete('tb_siswa');
  }

  function siswa_tambah_up($data_tambah){
    $this->db->insert('tb_siswa',$data_tambah);
  }
// siswa akhir


// kelas awal
  function kelas_tampil(){
    $tampil = $this->db->get('tb_kelas')->result();
    return $tampil;
  }

  public function kelas_edit($id_kelas)
  {
    $this->db->where('id_kelas', $id_kelas);
    $hasil = $this->db->get('tb_kelas')->result();
    return $hasil;
  }

  function kelas_tambah_up($data_tambah){
    $this->db->insert('tb_kelas',$data_tambah);
  }

  function kelas_edit_up($data_edit, $id_kelas){
    $this->db->where('id_kelas',$id_kelas);
    $this->db->update('tb_kelas',$data_edit);
  }
// kelas akhir

// mapel awal
function mapel_tampil(){
  $this->db->select('*');
  $this->db->from('tb_mapel');
  $this->db->join('tb_kelas','tb_mapel.id_kelas = tb_kelas.id_kelas');
  $query = $this->db->get()->result();
  return $query;
}

public function mapel_edit($id_mapel)
{
  $this->db->where('id_mapel', $id_mapel);
  $hasil = $this->db->get('tb_mapel')->result();
  return $hasil;
}

function mapel_tambah_up($data_tambah){
  $this->db->insert('tb_mapel',$data_tambah);
}

function mapel_edit_up($data_edit, $id_mapel){
  $this->db->where('id_mapel',$id_mapel);
  $this->db->update('tb_mapel',$data_edit);
}

public function mapel_hapus($id_mapel)
{
  $this->db->where($id_mapel);
  $this->db->delete('tb_mapel');
}
// mapel akhir

}

 ?>
