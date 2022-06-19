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


  public function semester_1($ses_id_kelas, $id_siswa)
  {
    $this->db->select('*');
    $this->db->from('tb_mapel');
    $this->db->join('tb_kelas','tb_kelas.id_kelas = tb_mapel.id_kelas');
    $this->db->where('tb_mapel.semester',"1");
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

  // public function semester_1($ses_id_kelas, $id_siswa)
  // {
  //   $this->db->select('*');
  //   $this->db->from('tb_siswa');
  //   $this->db->join('tb_kelas','tb_kelas.id_kelas = tb_siswa.id_kelas');
  //   $this->db->join('tb_kelas','tb_kelas.id_kelas = tb_mapel.id_kelas');
  //   // $this->db->where('tb_kelas.id_kelas',$ses_id_kelas);
  //   // $this->db->where('tb_mapel.semester',"1");
  //   // $this->db->where('tb_siswa.id_siswa',$id_siswa);
  //   $query = $this->db->get()->result();
  //   return $query;
  // }

  // function semester_1($id_siswa, $ses_id_kelas){
  //   $query = $this->db->query("SELECT * FROM `tb_siswa` JOIN `tb_kelas` JOIN `tb_mapel` ON
  //     `tb_mapel`.`id_kelas` = `tb_kelas`.`id_kelas`
  //     WHERE `tb_siswa`.`id_siswa` = '$id_siswa'
  //     AND `tb_mapel`.`semester` = '1'
  //     AND `tb_mapel`.`id_kelas` = '$ses_id_kelas' ");
  //   return $query;
  // }



}

 ?>
