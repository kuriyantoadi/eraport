<?php

class M_admin extends CI_Model{

// guru awal

  public function guru_tampil()
  {
    $this->db->where('status', 'guru');
    $hasil = $this->db->get('tb_admin')->result();
    return $hasil;
  }

  public function guru_edit($id_admin)
  {
    $this->db->where('id_admin', $id_admin);
    $hasil = $this->db->get('tb_admin')->result();
    return $hasil;
  }

  function guru_edit_up($data_edit, $id_admin){
    $this->db->where($id_admin);
    $this->db->update('tb_admin',$data_edit);
  }

  public function guru_hapus($id_guru)
  {
    $this->db->where($id_guru);
    $this->db->delete('tb_admin');
  }
// guru akhir


// siswa awal
  function siswa_tampil(){
    $tampil = $this->db->get('tb_siswa')->result();
    return $tampil;
  }
// siswa akhir


// kelas awal
  function kelas_tampil(){
    $tampil = $this->db->get('tb_kelas')->result();
    return $tampil;
  }
// kelas akhir

}

 ?>
