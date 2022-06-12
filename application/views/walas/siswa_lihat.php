<div class="text-center mt-5">
  <h2>Halaman Siswa</h2>
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

              <?php foreach ($tampil as $row) { ?>

              <table class="table table-bordered">
                <tr>
                  <td width='300px'>Nama Siswa</td>
                  <td><?= $row->nama_siswa ?></td>
                </tr>
                <tr>
                  <td width='300px'>Nama Siswa</td>
                  <td><?= $row->nama_siswa ?></td>
                </tr>
              </table>

            <?php } ?>
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
