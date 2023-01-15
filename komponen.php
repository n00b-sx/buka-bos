<?php
require 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Komponen</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <ul>
      <li><a href="data.php">Data</a></li>
    </ul>
  </header>
  <main>
    <h1>Data Komponen</h1>
    <a href="tambah.php?tambah=komponen">Tambah Data</a><br>
    <table class="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama Komponen</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $rows = tampil("SELECT * FROM komponen");
        $i = 1;
        foreach ($rows as $row) :
        ?>
          <tr>
            <td><?= $i++ ?></td>
            <td><?= $row['nama_komponen']; ?></td>
            <td>
              <p>
                <a href="edit.php?jenis=komponen&id=<?= $row['id']; ?>">Edit</a> |
                <a onclick="return confirm('Apakah anda yakin ingin menghapus <?= $row['nama_komponen']; ?>')" href="hapus.php?jenis=komponen&id=<?= $row['id']; ?>">Hapus</a>
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