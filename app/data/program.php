<?php
require '../../functions.php';
require 'functions/functions_program.php';

if (isset($_POST['tambah'])) {
  if (tambah_program($_POST) > 0) {
    echo "<script>onload='toastSuccess()'</script>";
    // header('location:../program.php?status=sukses');
  } else {
    // header('location:../program.php?status=error');
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Program | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Beranda</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Tentang Saya</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">BUKA BOS</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alula</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table-columns"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-database"></i>
                <p>
                  Data Master
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="data/program.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Program</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Komponen</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/layout/boxed.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Penyedia</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jenis Transaksi</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-money-bill"></i>
                <p>
                  Transaksi
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Input Saldo Awal</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Belanja</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/inline.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pajak</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-receipt"></i>
                <p>
                  Laporan
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/UI/general.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Buku Kas Umum</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/UI/icons.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Buku Kas Bank</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/UI/buttons.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Buku Kas Pajak</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/UI/sliders.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Buku Kas Tunai</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/UI/modals.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>K7A</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">Utilities</li>
            <li class="nav-item">
              <a href="pages/calendar.html" class="nav-link">
                <i class="nav-icon fas fa-solid fa-person-running"></i>
                <p>
                  Log Out
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Program</h1>
            </div><!-- /.col -->
            <!-- <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div>.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <!-- Form Tambah Data -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-5">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Input Data Program</h3>
                </div>
                <form action="" method="POST">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="nama_program">Nama Program</label>
                      <input type="text" class="form-control" id="nama_program" placeholder="Masukan nama program" name="nama_program">
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
                  </div>
                </form>
              </div>
            </div>

            <!-- Tabel Data -->
            <div class="col-7">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Daftar Program</h3>
                </div>
                <div class="card-body table-responsive p-0" style="height: 500px;">
                  <table class="table table-head-fixed text-nowrap table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Program</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $nomor = 1;
                      $dataProgram = tampil("SELECT * FROM program");
                      foreach ($dataProgram as $program) :
                      ?>
                        <tr>
                          <td><?= $nomor++ ?></td>
                          <td><?= $program['nama_program']; ?></td>
                          <td>
                            <div class="btn-group">
                              <a class="btn btn-info" data-toggle="modal" data-target="#modal-default<?= $program['id']; ?>">
                                <i class="fas fa-light fa-pencil"></i>
                              </a>

                              <!-- modal -->
                              <div class="modal fade" id="modal-default<?= $program['id']; ?>">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Edit Data <?= $program['nama_program']; ?></h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="" method="POST">
                                        <div class="form-group">
                                          <label for="nama_program">Nama Program</label>
                                          <input type="text" class="form-control" id="nama_program" placeholder="Masukan nama program" name="nama_program" value="<?= $program['nama_program']; ?>">
                                        </div>
                                        <input type="hidden" name="id" value="<?= $program['id']; ?>">
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary" name="edit">Submit</button>
                                      </form>
                                    </div>
                                  </div>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                              </div>
                              <!-- /.modal -->

                              <a class="btn btn-danger">
                                <i class="fas fa-light fa-trash-can"></i>
                              </a>
                            </div>
                            <!-- <a class="btn btn-app bg-info">
                              <i class="fas fa-light fa-pencil"></i> Edit
                            </a>
                            <a class="btn btn-app bg-info">
                              <i class="fas fa-light fa-trash-can"></i> Hapus
                            </a> -->
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.js"></script>
  <!-- Toastr -->
  <script src="plugins/toastr/toastr.min.js"></script>
  <script>
    var toastSuccess = function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Toast Title',
        autohide: true,
        delay: 1000,
        icon: 'fas fa-solid fa-check fa-lg',
        body: 'Data baru berhasil ditambahkan.'
      })
    }
  </script>

</body>

</html>