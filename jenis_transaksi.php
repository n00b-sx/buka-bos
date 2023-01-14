<?php
require 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Jenis Transaksi</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <ul>
      <li><a href="jenis_belanja.php">Jenis Belanja</a></li>
    </ul>
  </header>
  <main>
    <h1>Input Data Jenis Transaksi</h1>
    <a href="tambah.php?tambah=jenis_transaksi">Tambah Data</a><br>
    <table class="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Jenis Transaksi</th>
          <th>Kode Rekening</th>
          <th>Keterangan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $rows = tampil("SELECT * FROM jenis_transaksi");
        $i = 1;
        foreach ($rows as $row) :
        ?>
          <tr>
            <td><?= $i++ ?></td>
            <td><?= $row['kode_transaksi']; ?></td>
            <td><?= $row['kode_rekening']; ?></td>
            <td><?= $row['jenis_transaksi']; ?></td>
            <td>
              <p>
                <a href="edit.php?jenis=jenis_transaksi&id=<?= $row['id']; ?>">Edit</a> |
                <a onclick="return confirm('Apakah anda yakin ingin menghapus <?= $row['jenis_transaksi']; ?>')" href="hapus.php?jenis=jenis_transaksi&id=<?= $row['id']; ?>">Hapus</a>
              </p>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <a href="data.php">Kembali ke data</a>
  </main>
  <footer></footer>
</body>

</html>