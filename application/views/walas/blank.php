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
              <a style="margin-bottom: 10px" class="btn btn-info btn-sm" href="<?= base_url() ?>C_admin/siswa_tambah">Tambah</a>


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
