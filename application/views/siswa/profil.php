<div class="text-center mt-5">
  <h1>Halaman Siswa</h1>
</div>


<section class="content my-3">
    <div class="container">
      <?= $this->session->flashdata('msg') ?>

        <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Profil Siswa</h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <?php foreach ($tampil as $row) { ?>
              <?= form_open('C_admin/siswa_edit_up'); ?>

              <div class="alert alert-primary alert-dismissible fade show" role="alert">
  							<strong>Hanya admin dan wali kelas yang bisa menganti data Siswa </strong>

  							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  								<span aria-hidden="true">&times;</span>
  							</button>
  						</div>

                <table class="table table-bordered">
                    <tr>
                        <td>Nama Siswa</td>
                        <td>: <?= $row->nama_siswa ?></td>
                    </tr>
                    <tr>
                        <td>Nomor Induk/NISN</td>
                        <td>: <?= $row->nisn_siswa ?></td>
                    </tr>
                    <tr>
                        <td>Tempat, Tanggal Lahir</td>
                        <td>: <?= $row->tempat_lahir ?>,  <?= $row->tgl_lahir ?></td>
                    </tr>
                    <tr>
                        <td> Jenis Kelamin</td>
                        <td>:  <?= $row->jenis_kelamin ?></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:  <?= $row->agama ?></td>
                    </tr>
                    <tr>
                        <td>Status dalam Keluarga</td>
                        <td>: <?= $row->status_dalam_keluarga ?></td>
                    </tr>
                    <tr>
                        <td>Anak ke</td>
                        <td>: <?= $row->anak_ke ?></td>
                    </tr>
                    <tr>
                        <td>Alamat Siswa</td>
                        <td>: <?= $row->alamat_siswa ?></td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon Rumah</td>
                        <td>: <?= $row->no_telp_rumah ?></td>
                    </tr>
                    <tr>
                        <td>Sekolah Asal</td>
                        <td>: <?= $row->sekolah_asal ?></td>
                    </tr>
                    <tr>
                        <th colspan="2">Diterima di sekolah ini</th>
                    </tr>
                    <tr>
                        <td>Di kelas</td>
                        <td>: <?= $row->nama_kelas ?> (cek ulang)</td>
                    </tr>
                    <tr>
                        <td>Pada tanggal</td>
                        <td>: 13 Juli 2020</td>
                    </tr>
                    <tr>
                        <td>Nama Orang Tua</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>a. Ayah</td>
                        <td>: <?= $row->nama_ayah ?></td>
                    </tr>
                    <tr>
                        <td>b. Ibu</td>
                        <td>: <?= $row->nama_ibu ?></td>
                    </tr>
                    <tr>
                        <td>Alamat Orang Tua</td>
                        <td>: <?= $row->no_telp_orangtua ?></td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon Rumah</td>
                        <td>: <?= $row->alamat_orangtua ?></td>
                    </tr>
                    <tr>
                        <th colspan="2">Pekerjaan Orang Tua</th>
                    </tr>
                    <tr>
                        <td>a. Ayah</td>
                        <td>: Wiraswasta</td>
                    </tr>
                    <tr>
                        <td>b. Ibu</td>
                        <td>: Ibu Rumah Tangga</td>
                    </tr>
                    <tr>
                        <td>Nama Wali Siswa</td>
                        <td>: -</td>
                    </tr>
                    <tr>
                        <td>Alamat Wali Siswa</td>
                        <td>: -</td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon Rumah</td>
                        <td>: -</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Wali Siswa</td>
                        <td>: -</td>
                    </tr>
                </table>

              <?php } ?>
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
