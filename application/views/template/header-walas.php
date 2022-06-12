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
            <a href="<?= base_url() ?>C_walas" class="nav-link">Siswa</a>
          </li>
          <!-- <li class="nav-item">
            <a href="<?= base_url() ?>C_admin/mapel_tampil" class="nav-link">Data Siswa</a>
          </li> -->

          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Rapor</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item">Cover </a></li>
              <li><a href="#" class="dropdown-item">Semester 1 </a></li>
              <li><a href="#" class="dropdown-item">Semester 2 </a></li>
              <li><a href="#" class="dropdown-item">Semester 3 </a></li>
              <li><a href="#" class="dropdown-item">Semester 4 </a></li>
              <li><a href="#" class="dropdown-item">Semester 5 </a></li>
              <li><a href="#" class="dropdown-item">Semester 6 </a></li>

            </ul>
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
