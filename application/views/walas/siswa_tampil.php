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

                <table id="example1" class="table table-bordered">
                <thead>
                    <tr>
                        <th><center>No</th>
                        <th><center>NISN</th>
                        <th><center>Nama Siswa</th>
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
                        <td><?= $row->nisn_siswa ?>
                        <td><?= $row->nama_siswa ?>
                        <td><?= $row->nama_kelas ?></td>
                        <td><center>
                            <!-- <a href="<?= site_url('C_walas/semester_1/'.$row->id_siswa); ?>" class="btn btn-sm btn-primary">Semester 1</a> -->
                            <!-- <a href="<?= site_url('C_walas/siswa_lihat/'.$row->id_siswa); ?>" class="btn btn-sm btn-primary">Lihat</a> -->
                            <a href="<?= site_url('C_walas/siswa_edit/'.$row->id_siswa); ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="<?= site_url('C_walas/siswa_pass/'.$row->id_siswa); ?>" class="btn btn-sm btn-warning">Password</a>
                            <a href="<?= site_url('C_walas/siswa_hapus/'.$row->id_siswa); ?>" class="btn btn-sm btn-danger"
                              onclick="return confirm('Anda yakin menghapus data <?= $row->nama_siswa ?> ?')">Hapus</a>
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
