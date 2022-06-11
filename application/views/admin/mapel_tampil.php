<div class="text-center mt-5">
  <h2>Halaman Mata Pelajaran</h2>
</div>

<section class="content my-3">
    <div class="container">
      <?= $this->session->flashdata('msg') ?>
        <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tampil Mata Pelajaran</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <a style="margin-bottom: 10px" class="btn btn-info btn-sm" href="<?= base_url() ?>C_admin/mapel_tambah">Tambah</a>

                <table id="example1" class="table table-bordered">
                <thead>
                    <tr>
                        <th><center>No</th>
                        <th><center>Nama Mapel</th>
                        <th><center>Nama Kelas</th>
                        <th><center>Semester</th>
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
                        <td><?= $row->nama_mapel ?>
                        <td><?= $row->nama_kelas ?></td>
                        <td><center><?= $row->semester ?></td>
                        <td><center>
                            <a href="<?= site_url('C_admin/mapel_edit/'.$row->id_kelas); ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="<?= site_url('C_admin/mapel_hapus/'.$row->id_kelas); ?>" class="btn btn-sm btn-danger"
                              onclick="return confirm('Anda yakin menghapus data <?= $row->nama_mapel ?> ?')">Hapus</a>
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
