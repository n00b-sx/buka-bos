<?php
require_once('../function/umum.php');

if (isset($_GET)) {
  if ($_GET['halaman'] == 'program') {
    $page = 'program';
  } else if ($_GET['halaman'] == 'jenis_transaksi') {
    $page = 'jenis_transaksi';
  } else if ($_GET['halaman'] == 'komponen') {
    $page = 'komponen';
  } else if ($_GET['halaman'] == 'penyedia') {
    $page = 'penyedia';
  } else if ($_GET['halaman'] == 'master') {
    $page = 'master';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BUKA BOS | Master</title>
  <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
</head>

<body>

  <!-- Disini Navbar -->
  <header>
    <div class="row mx-1 mt-1">
      <div class="col">
        <nav class="navbar bg-primary" data-bs-theme="dark">
          <div class="container-fluid">
            <a href="../index.php" class="navbar-brand mb-0 h1">BUKA BOS | Master</a>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <!-- Disini Content -->
  <main>
    <div class="row justify-content-center my-4 g-3">
      <!-- Side Menu -->
      <div class="col-md-2">
        <div class="list-group">
          <!-- <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
            The current link item
          </a> -->
          <a href="index.php?halaman=master" class="list-group-item list-group-item-action <?= $page == 'master' ? 'active' : ''; ?>" aria-current="true">Home</a>
          <a href="index.php?halaman=program" class="list-group-item list-group-item-action <?= $page == 'program' ? 'active' : ''; ?>">Program</a>
          <a href="index.php?halaman=jenis_transaksi" class="list-group-item list-group-item-action <?= $page == 'jenis_transaksi' ? 'active' : ''; ?>">Jenis Transaksi</a>
          <a href="index.php?halaman=komponen" class="list-group-item list-group-item-action <?= $page == 'komponen' ? 'active' : ''; ?>">Komponen</a>
          <a href="index.php?halaman=penyedia" class="list-group-item list-group-item-action <?= $page == 'penyedia' ? 'active' : ''; ?>">Penyedia</a>
          <!-- <a class="list-group-item list-group-item-action disabled">A disabled link item</a> -->
        </div>
      </div>
      <?php
      if (isset($_GET)) {
        if ($_GET['halaman'] == 'master') {
          include('master.php');
        } else if ($_GET['halaman'] == 'program') {
          include('program.php');
        } else if ($_GET['halaman'] == 'jenis_transaksi') {
          include('jenis_transaksi.php');
        } else if ($_GET['halaman'] == 'komponen') {
          include('komponen.php');
        } else if ($_GET['halaman'] == 'penyedia') {
          include('penyedia.php');
        }
      }
      ?>
    </div>
  </main>

  <!-- Disini Footer -->
  <footer class="tengah">
    <div class="row">
      <div class="col-md-10 offset-md-1 mt-3">
        <div class="card">
          <div class="card-body">
            Contact Me : Moh. Syahrul Noor
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>