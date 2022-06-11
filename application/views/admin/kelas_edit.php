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

              <?= form_open('C_admin/walas_tambah_up'); ?>
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
                      <input type="text" class="form-control" id="inputEmail3" name="program_keahlian" placeholder="Program Keahlian" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kompetensi Keahlian</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="kompetensi_keahlian" placeholder="Kompetensi Keahlian" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tingkat</label>
                    <div class="col-sm-10">
                      <select name="id_kelas" class="form-control " style="width: 100%;" required>
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
                      <a href="<?= base_url() ?>C_admin" class="btn btn-sm btn-warning">Kembali</a>
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
