<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BUKA BOS | Master-Program</title>
  <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="../asset/css/fontawesome.min.css">
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
          <a href="master.php" class="list-group-item list-group-item-action">Home</a>
          <a href="#" class="list-group-item list-group-item-action active" aria-current="true">Program</a>
          <a href="jenis_transaksi.php" class="list-group-item list-group-item-action">Jenis Transaksi</a>
          <a href="komponen.php" class="list-group-item list-group-item-action">Komponen</a>
          <a href="penyedia.php" class="list-group-item list-group-item-action">Penyedia</a>
          <!-- <a class="list-group-item list-group-item-action disabled">A disabled link item</a> -->
        </div>
      </div>
      <div class="col-md-8" style="height : 500px">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header bg-danger text-bg-dark">
                <h5>Data Program</h5>
              </div>
              <div class="card-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Program</th>
                      <th>aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Program Satu</td>
                      <td>
                        <div class="d-grid gap-1 d-md-block">
                          <a href="#" class="btn btn-success btn-sm" type="button">Edit</a>
                          <a href="#" class="btn btn-danger btn-sm" type="button">Hapus</a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header bg-danger text-bg-dark">
                <h5>Tambah Data Program</h5>
              </div>
              <form action="POST">
                <div class="card-body">
                  <label for="namaProgram" class="form-label">Nama Program</label>
                  <input type="text" class="form-control" id="namaProgram" aria-describedby="namaProgramHelp">
                  <div id="namaProgramHelp" class="form-text">Masukan nama program.</div>
                </div>
                <div class="card-footer">
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-secondary me-md-2" type="reset">Batal</button>
                    <button class="btn btn-primary" type="button">Simpan</button>
                  </div>
                </div>
              </form>
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

  <script src="../asset/js/fontawesome.min.js"></script>
</body>

</html>