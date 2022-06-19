<div class="text-center mt-5">
  <h1>Halaman Siswa</h1>
</div>


<section class="content my-3">
    <div class="container">
      <?= $this->session->flashdata('msg') ?>

        <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Siswa</h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <?php foreach ($tampil as $row) { ?>
              <?= form_open('C_siswa/siswa_edit_up'); ?>
              <div class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">NIS</label>
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control" value="<?= $row->id_siswa ?>" name="id_siswa">
                      <input type="text" class="form-control" id="inputPassword3" value="<?= $row->nis ?>" name="nis" placeholder="NIS">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">NISN</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" value="<?= $row->nisn_siswa ?>" name="nisn_siswa" placeholder="NISN">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Siswa</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->nama_siswa ?>" name="nama_siswa" placeholder="Nama Siswa">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->tempat_lahir ?>" name="tempat_lahir" placeholder="Tempat Lahir">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->tgl_lahir ?>" name="tgl_lahir" placeholder="Tanggal Lahir">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Semester</label>
                    <div class="col-sm-10">
                      <select name="semester" class="form-control " style="width: 100%;" required>
                        <option value="<?= $row->semester ?>">Pilihan Awal | Semester <?= $row->semester ?></option>
                        <?php
                        for ($smstr=1; $smstr <= 6; $smstr++) {
                        ?>
                        <option value="<?= $smstr ?>">Semester <?= $smstr ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                      <select name="id_kelas" class="form-control " style="width: 100%;" required>
                        <?php
                          foreach ($tampil_kelas as $row_kls) {
                        ?>
                        <option value="<?=  $row_kls->id_kelas ?>">Pilihan Awal | <?= $row_kls->nama_kelas ?></option>
                        <option value="<?= $row_kls->id_kelas ?>"><?= $row_kls->nama_kelas ?></option>

                        <?php } ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Catatan Akademik</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->catatan_akademik ?>" name="catatan_akademik" placeholder="Catatan Akademik" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">PKL Mitra DU/DI</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->pkl_mitra_du_di ?>" name="pkl_mitra_du_di" placeholder="PKL Mitra DU/DI" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Lokasi PKL</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->pkl_lokasi ?>" name="pkl_lokasi" placeholder="Lokasi PKL" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Lamanya PKL</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->pkl_lamanya ?>" name="pkl_lamanya" placeholder="Lamanya PKL" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan PKL</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->pkl_keterangan ?>" name="pkl_keterangan" placeholder="Keterangan PKL" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Ekstrakurikurel 1</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->ekskul_1 ?>" name="ekskul_1" placeholder="Ekstrakurikurel 1" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan Ekstrakurikurel 1</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->ekskul_1_ket ?>" name="ekskul_1_ket" placeholder="Keterangan Ekstrakurikurel 1" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Ekstrakurikurel 2</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->ekskul_2 ?>" name="ekskul_2" placeholder="Ekstrakurikurel 2" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan Ekstrakurikurel 2</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->ekskul_2_ket ?>" name="ekskul_2_ket" placeholder="Keterangan Ekstrakurikurel 2" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Ekstrakurikurel 3</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->ekskul_3 ?>" name="ekskul_3" placeholder="Ekstrakurikurel 3" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan Ekstrakurikurel 3</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->ekskul_3_ket ?>" name="ekskul_3_ket" placeholder="Keterangan Ekstrakurikurel 3" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kehadiran Sakit</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputEmail3" value="<?= $row->kehadiran_sakit ?>" name="kehadiran_sakit" placeholder="Kehadiran Sakit" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kehadiran Izin</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputEmail3" value="<?= $row->kehadiran_izin ?>" name="kehadiran_izin" placeholder="Kehadiran Izin" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kehadiran Alfa</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputEmail3" value="<?= $row->kehadiran_alfa ?>" name="kehadiran_alfa" placeholder="Kehadiran Alfa" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->agama ?>" name="agama" placeholder="Agama" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Status Dalam Keluarga</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->status_dalam_keluarga ?>" name="status_dalam_keluarga" placeholder="Status Dalam Keluarga" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Anak ke</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputEmail3" value="<?= $row->anak_ke ?>" name="anak_ke" placeholder="Anak ke" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat Siswa</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->alamat_siswa ?>" name="alamat_siswa" placeholder="Alamat Siswa" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Telepon Rumah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->no_telp_rumah ?>" name="no_telp_rumah" placeholder="Nomor Telepon Rumah" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Sekolah Asal</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->sekolah_asal ?>" name="sekolah_asal" placeholder="Sekolah Asal" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Ayah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->nama_ayah ?>" name="nama_ayah" placeholder="Nama Ayah" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Ibu</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->nama_ibu ?>" name="nama_ibu" placeholder="Nama Ibu" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat Orang Tua</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->alamat_orangtua ?>" name="alamat_orangtua" placeholder="Alamat Orang Tua" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Telepon Orang Tua</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputEmail3" value="<?= $row->no_telp_orangtua ?>" name="no_telp_orangtua" placeholder="Nomor Telepon Orang Tua" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->pekerjaan_ayah ?>" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->pekerjaan_ibu ?>" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Wali Siswa</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->nama_wali_siswa ?>" name="nama_wali_siswa" placeholder="Nama Wali Siswa" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat Wali Siswa</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->alamat_wali_siswa ?>" name="alamat_wali_siswa" placeholder="Alamat Wali Siswa" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Telepon Wali Siswa</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->no_telp_wali_siswa ?>" name="no_telp_wali_siswa" placeholder="Nomor Telepon Wali Siswa" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Pekerjaan Wali Siswa</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->pekerjaan_wali_siswa ?>" name="pekerjaan_wali_siswa" placeholder="Pekerjaan Wali Siswa" required>
                    </div>
                  </div>

                <?php } ?>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <input type="submit" class="btn btn-info btn-sm" value="Simpan">
                      <a href="<?= base_url() ?>C_walas" class="btn btn-sm btn-warning">Kembali</a>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->

                <!-- /.card-footer -->
              </div>
              <?= form_close() ?>

            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
