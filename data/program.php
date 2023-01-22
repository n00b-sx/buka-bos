<?php
require '../functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Program</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <ul>
      <li><a href="data.php">Data</a></li>
    </ul>
  </header>
  <main>
    <h1>Data Program</h1>
    <a href="tambah.php?tambah=program">Tambah Data</a><br>
    <table class="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama Program</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $rows = tampil("SELECT * FROM program");
        $i = 1;
        foreach ($rows as $row) :
        ?>
          <tr>
            <td><?= $i++ ?></td>
            <td><?= $row['nama_program']; ?></td>
            <td>
              <p>
                <a href="edit.php?jenis=program&id=<?= $row['id']; ?>">Edit</a> |
                <a onclick="return confirm('Apakah anda yakin ingin menghapus <?= $row['nama_program']; ?>')" href="hapus.php?jenis=program&id=<?= $row['id']; ?>">Hapus</a>
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