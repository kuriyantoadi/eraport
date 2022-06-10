<div class="text-center mt-5">
  <h1>Halaman Wali Kelas</h1>
</div>

<section class="content my-3">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Wali Kelas</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <a style="margin-bottom: 10px" class="btn btn-info btn-sm" href="<?= base_url() ?>C_admin/walas_tambah">Tambah</a>

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th><center>No</th>
                        <th><center>Nama wali kelas</th>
                        <th><center>Username</th>
                        <th><center>Kelas</th>
                        <th><center>Pilihan</th>
                    </tr>
                </thead>
                <?php
                $no=1;
                foreach ($tampil as $row) {
                ?>
                <tbody>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row->nama_guru ?>
                        <td><?= $row->username ?></td>
                        <td><?= $row->nama_kelas ?></td>
                        <td><center>
                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                </tbody>
                <?php
                } ?>
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
