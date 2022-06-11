<div class="text-center mt-5">
  <h1>Halaman Kelas</h1>
</div>

<section class="content my-3">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Kelas</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <?= form_open('C_admin/kelas_tambah_up'); ?>
              <div class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Kelas</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="nama_kelas" placeholder="Nama Kelas" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Program Keahlian</label>
                      <div class="col-sm-10">
                        <select name="program_keahlian" class="form-control " style="width: 100%;" required>
                          <option value="">Pilihan</option>
                          <option value="AKUNTANSI DAN KEUANGAN">AKUNTANSI DAN KEUANGAN</option>
                          <option value="MANAJEMEN PERKANTORAN">MANAJEMEN PERKANTORAN</option>
                          <option value="TEKNIK KOMPUTER DAN INFORMATIKA">TEKNIK KOMPUTER DAN INFORMATIKA</option>
                          <option value="TEKNIK OTOMOTIF">TEKNIK OTOMOTIF</option>
                          <option value="TEKNIK PEMESINAN">TEKNIK PEMESINAN</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kompetensi Keahlian</label>
                    <div class="col-sm-10">
                        <select name="kompetensi_keahlian" class="form-control " style="width: 100%;" required>
                          <option value="">Pilihan</option>
                          <option value="AKUNTANSI DAN KEUANGAN LEMBAGA">AKUNTANSI DAN KEUANGAN LEMBAGA</option>
                          <option value="OTOMATISASI DAN TATA KELOLA PERKANTORAN">OTOMATISASI DAN TATA KELOLA PERKANTORAN</option>
                          <option value="TEKNIK KOMPUTER DAN JARINGAN">TEKNIK KOMPUTER DAN JARINGAN</option>
                          <option value="REKAYASA PERANGKAT LUNAK">REKAYASA PERANGKAT LUNAK</option>
                          <option value="TEKNIK KENDARAAN RINGAN OTOMOTIF">TEKNIK KENDARAAN RINGAN OTOMOTIF</option>
                          <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tingkat</label>
                    <div class="col-sm-10">
                      <select name="tingkat" class="form-control " style="width: 100%;" required>
                        <option value="">Pilihan</option>
                        <option value="10">Tingkat 10</option>
                        <option value="11">Tingkat 11</option>
                        <option value="12">Tingkat 12</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <input type="submit" class="btn btn-info btn-sm" value="Simpan">
                      <a href="<?= base_url() ?>C_admin/kelas_tampil" class="btn btn-sm btn-warning">Kembali</a>
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
