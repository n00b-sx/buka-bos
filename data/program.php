<?php
require '../functions.php';
$tampil = tampil("SELECT * FROM program");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data | Program</title>
  <style>
    table,
    th,
    td {
      border: 1px solid black;
    }

    table.center {
      margin-right: auto;
      margin-left: auto;
    }

    th,
    td {
      text-align: center;
      padding: 10px;
    }
  </style>
</head>

<body>
  <header></header>

  <main>
    <a href="form_program.php?status=tambah">Tambah Data</a>
    <table class="center">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama program</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($tampil <= 0) {
        ?>
          <tr>
            <td colspan="3">Data Kosong</td>
          </tr>
          <?php
        } else {
          $i = 1;
          foreach ($tampil as $data) { ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $data['uraian']; ?></td>
              <td>
                <a href="ubah.php?status=ubah">Ubah</a> |
                <a href="hapus.php?id=<?= $data['id']; ?>">Hapus</a>
              </td>
            </tr>
        <?php }
        }
        ?>
      </tbody>
    </table>
  </main>

  <footer></footer>
</body>

</html>