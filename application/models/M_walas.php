<?php

class M_walas extends CI_Model{

  // dicoba menampilkan 1 data siswa
  public function kelas_tampil($ses_id_kelas)
  {
    $this->db->select('*');
    $this->db->from('tb_siswa');
    $this->db->join('tb_kelas','tb_siswa.id_kelas = tb_kelas.id_kelas');
    $this->db->where('tb_siswa.id_kelas',$ses_id_kelas);
    $query = $this->db->get()->result();
    return $query;
  }

  public function siswa_lihat($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa')->result();
    return $hasil;
  }


}

 ?>
