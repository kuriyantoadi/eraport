<div class="text-center mt-5">
  <h2>Halaman Semester 1</h2>
</div>

<section class="content my-3">
    <div class="container">
      <?= $this->session->flashdata('msg') ?>
        <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tampil Siswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">


              <table class="table table-bordered">
                <?= form_open('C_admin/semester_1_up'); ?>
                <?php foreach ($tampil_siswa as $row) { ?>

                <tr>
                  <td width='300px'>Nama Siswa</td>
                  <input type="hidden" name="id_siswa" value="<?= $row->id_siswa ?>">
                  <td><?= $row->nama_siswa ?></td>
                </tr>
                <?php } ?>

                <?php foreach ($tampil as $row) { ?>

                <tr>
                  <td width='300px'><?= $row->nama_mapel ?></td>
                  <td>
                    <input type="text" name="id_mapel" class="form-control" id="inputPassword3" value=""  placeholder="">
                  </td>
                </tr>
              <?php } ?>

              <?= form_close(); ?>


              </table>

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
