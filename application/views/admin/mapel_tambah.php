<div class="text-center mt-5">
  <h1>Halaman Mata Pelajaran</h1>
</div>

<section class="content my-3">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Mata Pelajaran</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <?= form_open('C_admin/mapel_tambah_up'); ?>
              <div class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Mata Pelajaran</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="nama_mapel" placeholder="Nama Mata Pelajaran" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                      <select name="id_kelas" class="form-control " style="width: 100%;" required>
                        <option value="">Pilihan</option>
                        <?php
                         foreach ($tampil_kelas as $row) {
                        ?>
                        <option value="<?= $row->id_kelas ?>"><?= $row->nama_kelas ?></option>

                        <?php } ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Semester</label>
                    <div class="col-sm-10">
                      <select name="semester" class="form-control " style="width: 100%;" required>
                        <?php
                        for ($smstr=1; $smstr <= 6; $smstr++) {
                        ?>
                        <option value="<?= $smstr ?>">Semester <?= $smstr ?></option>
                        <?php } ?>
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
