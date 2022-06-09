<?php

class M_admin extends CI_Model{

// guru awal

  public function guru_tampil()
  {
    $this->db->where('status', 'guru');
    $hasil = $this->db->get('tb_admin')->result();
    return $hasil;
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
