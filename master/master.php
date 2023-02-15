<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BUKA BOS | Master</title>
  <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="../asset/css/style.css">
</head>

<body>

  <!-- Disini Navbar -->
  <header>
    <div class="row mx-1 mt-1">
      <div class="col">
        <nav class="navbar bg-primary" data-bs-theme="dark">
          <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">BUKA BOS | Master</span>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <!-- Disini Content -->
  <main>
    <div class="row justify-content-center my-4 g-3">
      <div class="col-md-2">
        <div class="list-group">
          <!-- <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
            The current link item
          </a> -->
          <a href="#" class="list-group-item list-group-item-action active" aria-current="true">Home</a>
          <a href="#" class="list-group-item list-group-item-action">Program</a>
          <a href="#" class="list-group-item list-group-item-action">Jenis Transaksi</a>
          <a href="#" class="list-group-item list-group-item-action">Komponen</a>
          <a href="#" class="list-group-item list-group-item-action">Penyedia</a>
          <!-- <a class="list-group-item list-group-item-action disabled">A disabled link item</a> -->
        </div>
      </div>
      <div class="col-md-8" style="height : 500px">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-danger text-bg-dark">
                <h5>Program</h5>
              </div>
              <div class="card-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Program</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Program Satu</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-info text-bg-dark">
                <h5>Jenis Transaksi</h5>
              </div>
              <div class="card-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Kode Transaksi</th>
                      <th>Kode Rekening</th>
                      <th>jenis Transaksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    for ($i = 0; $i < 5; $i++) : ?>
                      <tr>
                        <td><?= $no += 1 ?></td>
                        <td>Kode Transaksi <?= $i ?></td>
                        <td>Kode Rekening <?= $i ?></td>
                        <td>Jenis Transaksi <?= $i ?></td>
                      </tr>
                    <?php endfor; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-warning text-bg-dark">
                <h5>Komponen</h5>
              </div>
              <div class="card-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Komponen</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Program Satu</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-success text-bg-dark">
                <h5>Penyedia</h5>
              </div>
              <div class="card-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Penyedia</th>
                      <th>Nomor Telepon</th>
                      <th>NPWP</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Program Satu</td>
                      <td>08xxxx</td>
                      <td>000.000.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
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