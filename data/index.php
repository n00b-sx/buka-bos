<?php
require '../functions.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    img {
      height: 30%;
    }
  </style>
</head>

<body>
  <!-Navbar disini- -->
    <header>
      <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Buka BOS</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="laporan.php">Laporan</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="transaksi" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Transaksi</a>
              <div class="dropdown-menu" aria-labelledby="transaksi">
                <a class="dropdown-item" href="kas_awal/index.php">Kas Awal</a>
                <a class="dropdown-item" href="saldo_keluar.php">Saldo Keluar</a>
                <a class="dropdown-item" href="saldo_masuk.php">Saldo Masuk</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main>
      <div class="container-fluid p-3">
        <div class="row">
          <div class="col">
            <div class="card">
              <img src="../asset/img/data/jenis_transaksi.jpg" class="card-img-top" alt="Jenis Transaksi">
              <div class="card-body">
                <h5 class="card-title">Jenis Transaksi</h5>
                <a href="#" class="btn btn-primary">Lihat Data</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="../asset/img/data/penyedia.jpg" class="card-img-top" alt="Penyedia">
              <div class="card-body">
                <h5 class="card-title">Penyedia</h5>
                <a href="#" class="btn btn-primary">Lihat Data</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="../asset/img/data/komponen.jpg" class="card-img-top" alt="Komponen">
              <div class="card-body">
                <h5 class="card-title">Komponen</h5>
                <a href="#" class="btn btn-primary">Lihat Data</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="../asset/img/data/program.jpg" class="card-img-top" alt="Program">
              <div class="card-body">
                <h5 class="card-title">Program</h5>
                <a href="#" class="btn btn-primary">Lihat Data</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>