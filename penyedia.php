<?php
require 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Penyedia</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <ul>
      <li><a href="edit.php?jenis=belanja&id=<?= $_GET['id']; ?>">Transaksi Belanja</a></li>
    </ul>
  </header>
  <main>
    <h1>Data Penyedia</h1>
    <a href="tambah.php?tambah=penyedia">Tambah Data</a><br>
    <table class="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama Penyedia</th>
          <th>Alamat</th>
          <th>Telepon/Hp</th>
          <th>NPWP</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $rows = tampil("SELECT * FROM penyedia");
        $i = 1;
        foreach ($rows as $row) :
        ?>
          <tr>
            <td><?= $i++ ?></td>
            <td><?= $row['nama_penyedia']; ?></td>
            <td><?= $row['alamat_penyedia']; ?></td>
            <td><?php if ($row['telepon_hp'] == NULL) {
                  echo "-";
                } else {
                  echo $row['telepon_hp'];
                } ?></td>
            <td><?php if ($row['npwp_penyedia'] == NULL) {
                  echo "-";
                } else {
                  echo $row['npwp_penyedia'];
                } ?></td>
            <td>
              <p>
                <a href="edit.php?jenis=penyedia&id=<?= $row['id']; ?>">Edit</a>
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