<?php
require 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Belanja</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <ul>
      <li><a href="transaksi.php">Transaksi</a></li>
    </ul>
  </header>
  <main>
    <h1>Data Belanja</h1>
    <a href="tambah.php?tambah=belanja">Tambah Data</a><br>
    <table class="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Tanggal Transaksi</th>
          <th>Kode Rekening</th>
          <th>Nomor Bukti</th>
          <th>Uraian Belanja</th>
          <th>Debit</th>
          <th>Kredit</th>
          <th>Saldo</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $jenis_belanja = tampil("SELECT * FROM jenis_transaksi WHERE kode_transaksi = 'belanja'");
        $rows = [];
        foreach ($jenis_belanja as $row) {
          $rows[] = $row['id'];
        }
        $id_jenis_transaksi = implode(", ", $rows);
        $transaksi = tampil("SELECT * FROM transaksi WHERE id_jenis_transaksi IN ($id_jenis_transaksi)");
        $i = 1;
        foreach ($transaksi as $row) :
          $id_jenis_transaksi = $row['id_jenis_transaksi'];
          $kode_rekening = tampil("SELECT * FROM jenis_transaksi WHERE id=$id_jenis_transaksi")[0];
        ?>
          <tr>
            <td><?= $i++ ?></td>
            <td><?= $row['tgl_transaksi']; ?></td>
            <td><?= $kode_rekening['kode_rekening']; ?></td>
            <td><?= $row['nomor_bukti']; ?></td>
            <td><?= $row['uraian_belanja']; ?></td>
            <td><?= $row['saldo_masuk']; ?></td>
            <td><?= $row['saldo_keluar']; ?></td>
            <td><?= $row['saldo_akhir']; ?></td>
            <td>
              <p>
                <a href="edit.php?jenis=belanja&id=<?= $row['id']; ?>">Edit</a> |
                <a onclick="return confirm('Apakah anda yakin ingin menghapus <?= $row['uraian_belanja']; ?>')" href="hapus.php?jenis=transaksi_belanja&id=<?= $row['id']; ?>">Hapus</a>
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