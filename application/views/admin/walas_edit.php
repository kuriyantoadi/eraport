<div class="text-center mt-5">
  <h1>Halaman Wali Kelas</h1>
</div>


<section class="content my-3">
    <div class="container">
      <?= $this->session->flashdata('msg') ?>

        <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Wali Kelas</h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <?php foreach ($tampil as $row) { ?>
              <?= form_open('C_admin/walas_edit_up'); ?>
              <div class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Guru</label>
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control" value="<?= $row->id_admin ?>" name="id_admin">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $row->nama_guru ?>" name="nama_guru" placeholder="Nama Guru">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" value="<?= $row->username ?>" name="username" placeholder="Username">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                      <select name="id_kelas" class="form-control " style="width: 100%;" required>
                        <!-- <option value="<?=  $row->id_kelas ?>">Pilihan Awal | <?= $row->nama_kelas ?></option> -->
                        <?php
                         foreach ($tampil_kelas as $row1) {
                        ?>
                        <option value="<?= $row1->id_kelas ?>"><?= $row1->nama_kelas ?></option>

                        <?php } ?>
                      </select>
                    </div>
                  </div>
                <?php } ?>
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
