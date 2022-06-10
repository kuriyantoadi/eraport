<?php

include 'template/header-admin.php';
?>

<div class="text-center mt-5">
  <h1>Halaman Dashboard Siswa</h1>
</div>

<section class="content my-3">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Siswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NISN</th>
                        <th>Nama siswa</th>
                        <th>Kelas</th>
                        <th>Semester</th>
                        <th>Wali Kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td>X</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">Lihat</a>
                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                </tbody>
                <!-- <tfoot>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                        <th>CSS grade</th>
                    </tr>
                </tfoot> -->
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


<?php
include 'template/footer-admin.php';
?>