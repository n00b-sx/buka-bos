<?php
require 'functions.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <!-- Navbar disini -->
  <header>
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">BUKA BOS</span>
        <div class="d-flex navbar-nav flex-row-reverse">
          <a class="nav-link p-2" href="">Login</a>
          <a class="nav-link active p-2" href="">Registrasi</a>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="container p-5">
      <?php
      if (isset($_POST['daftar'])) {
        $registrasi = regsitrasi($_POST);
        if ($registrasi['notif'] == "sukes") { ?>
          <div class="row p-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <h4 class="alert-heading">Berhasil!</h4>
              <p><?= $registrasi['pesan']; ?></p>
              <hr>
              <a class="alert link" href="login.php">Ke halaman login</a>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        <?php } elseif ($registrasi['notif'] == "error") { ?>
          <div class="row p-3">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?= $registrasi['pesan']; ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
      <?php };
      } ?>
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="asset/img/data/jenis_transaksi.jpg" class="d-block w-100 rounded" alt="Jenis Transaksi">
                  </div>
                  <div class="carousel-item">
                    <img src="asset/img/data/komponen.jpg" class="d-block w-100 rounded" alt="Komponen">
                  </div>
                  <div class="carousel-item">
                    <img src="asset/img/data/penyedia.jpg" class="d-block w-100 rounded" alt="Penyedia">
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <h3>Registrasi Akun Baru!</h3>
              <form action="" method="POST">
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" id="username" name="username" class="form-control" />
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" id="password" name="password" class="form-control" />
                </div>
                <div class="mb-3">
                  <label for="password_confirm" class="form-label">Konfirmasi Password Anda</label>
                  <input type="password" id="password_confirm" name="password_confirm" class="form-control" />
                </div>
                <div class="mb-3">
                  <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer>

  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>