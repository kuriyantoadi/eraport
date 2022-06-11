<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E Raport</title>

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/data-table/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/data-table/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/data-table/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/data-table/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/data-table/css/adminlte.min.css">

  <!-- footer -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/footer.css">


</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="" class="navbar-brand">
        <span class="brand-text font-weight-light">E-Raport</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?= base_url() ?>C_admin" class="nav-link">Wali Kelas</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>C_admin/siswa_tampil" class="nav-link">Siswa</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>C_admin/mapel_tampil" class="nav-link">Mapel</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>C_admin/kelas_tampil" class="nav-link">Kelas</a>
          </li>
        </ul>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item">
          <a href="<?= base_url() ?>C_login/admin_logout" class="nav-link">Keluar</a>
        </li>

      </ul>
    </div>
  </nav>
