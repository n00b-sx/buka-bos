<?php
require 'fungsi_kas_awal.php';
?>
<!doctype html>
<html lang="en">

<head>
  <title>Kas Awal</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    h3 {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Buka BOS</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="laporan.php">Laporan</a>
        </li>
        <li class="nav-item dropdown active">
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
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center g-2">
      <div class="col-md-8 mt-3 me-auto">
        <h3>Buku Kas Awal</h3>
      </div>
    </div>
    <div class="row justify-content-center align-items-center g-2">
      <div class="col-md-10 mt-3 me-auto">
        <!-- Disini Tabel -->
        <table class="table table-hover">
          <thead class="thead-default">
            <tr>
              <th>No</th>
              <th>Bulan</th>
              <th>Saldo Bank</th>
              <th>Saldo Tunai</th>
              <th>Saldo Pajak Pph21</th>
              <th>Saldo Pajak Pph22</th>
              <th>Saldo Pajak Pb1</th>
              <th>Saldo Pajak PPn</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $datas = tampil("SELECT * FROM saldo_awal");
            $i = 1;
            foreach ($datas as $data) :
            ?>
              <tr>
                <td scope="row"><?= $i++; ?></td>
                <td><?= $data['bulan']; ?></td>
                <td><?= $data['saldo_bank']; ?></td>
                <td><?= $data['saldo_tunai']; ?></td>
                <td><?= $data['saldo_awl_pph21']; ?></td>
                <td><?= $data['saldo_awl_pph22']; ?></td>
                <td><?= $data['saldo_awl_pb1']; ?></td>
                <td><?= $data['saldo_awl_ppn']; ?></td>
                <td>
                  <a href="ubah.php" class="badge badge-info mr-1">Ubah</a>
                  <!-- Button trigger modal -->
                  <a href="#" class="badge badge-danger" data-toggle="modal" data-target="#modelId">Hapus</a>

                  <!-- Modal -->
                  <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Peringatan!</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="container-fluid">
                            Apakah anda yakin ingin menghapus data ini ?
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                          <button type="button" class="btn btn-primary">Ya</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <script>
                    $('#exampleModal').on('show.bs.modal', event => {
                      var button = $(event.relatedTarget);
                      var modal = $(this);
                      // Use above variables to manipulate the DOM

                    });
                  </script>
                </td>
              <?php
            endforeach;
              ?>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>