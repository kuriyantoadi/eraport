<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Guru</title>

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


</head>
<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item mx-2 fw-bold fs-5">
            <a class="nav-link" href="dashboard-guru.php">Guru</a>
          </li>
          <li class="nav-item mx-2 fw-bold fs-5">
            <a class="nav-link" href="dashboard-walas.php">Wali Kelas</a>
          </li>
          <li class="nav-item mx-2 fw-bold fs-5">
            <a class="nav-link" href="dashboard-siswa.php">Siswa</a>
          </li>
          <li class="nav-item dropdown mx-2 fw-bold fs-5">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kelas
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">X AKL</a></li>
              <li><a class="dropdown-item" href="#">X OTKP</a></li>
              <li><a class="dropdown-item" href="#">X RPL</a></li>
              <li><a class="dropdown-item" href="#">X TKJ</a></li>
              <li><a class="dropdown-item" href="#">X TKR</a></li>
              <li><a class="dropdown-item" href="#">X TPM</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">XI AKL</a></li>
              <li><a class="dropdown-item" href="#">XI OTKP</a></li>
              <li><a class="dropdown-item" href="#">XI RPL</a></li>
              <li><a class="dropdown-item" href="#">XI TKJ</a></li>
              <li><a class="dropdown-item" href="#">XI TKR</a></li>
              <li><a class="dropdown-item" href="#">XI TPM</a></li>
            </ul>
          </li>
        </ul>
        <!-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
      </div>
    </div>
  </nav>
