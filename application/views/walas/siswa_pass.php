<div class="text-center mt-5">
  <h2>Halaman Siswa</h2>
</div>

<section class="content my-3">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Ganti Password Siswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php foreach ($tampil as $row) { ?>
              <?= form_open('C_walas/siswa_pass_up'); ?>
              <div class="form-horizontal">
                <div class="card-body">
                  <?= $this->session->flashdata('msg') ?>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Siswa</label>
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control" value="<?= $row->id_siswa ?>" name="id_siswa">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->nama_siswa ?>" name="nama_siswa" placeholder="Nama Siswa" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">NISN</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" value="<?= $row->nisn_siswa ?>" name="nisn_siswa" placeholder="nisn" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password Baru</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" value="" name="password" placeholder="Password">
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
