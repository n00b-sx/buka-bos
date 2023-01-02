<?php
require '../functions.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Kas Awal</title>
  <link rel="stylesheet" href="../asset/style.css" />
</head>

<body>

  <header>
    <ul>
      <li>Beranda</li>
      <li>Transaksi</li>
      <li>Laporan</li>
    </ul>
  </header>

  <main>
    <div class="row">
      <table border="1">
        <thead>
          <tr>
            <th>No</th>
            <th>Bulan</th>
            <th>Kas Bank</th>
            <th>Kas Tunai</th>
            <th>PPh21</th>
            <th>PPh22</th>
            <th>PB1</th>
            <th>PPn</th>
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
              <td><?= $i++; ?></td>
              <td><?= $data['bulan']; ?></td>
              <td><?= $data['saldo_bank']; ?></td>
              <td><?= $data['saldo_tunai']; ?></td>
              <td><?= $data['saldo_awl_pph21']; ?></td>
              <td><?= $data['saldo_awl_pph22']; ?></td>
              <td><?= $data['saldo_awl_pb1']; ?></td>
              <td><?= $data['saldo_awl_ppn']; ?></td>
              <td>
                <a href="ubah.php?id=<?= $data['id']; ?>">Ubah</a> |
                <a onclick="return confirm('Apakah anda yakin untuk menghapus ?');" href="hapus.php?id=<?= $data['id']; ?>">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </main>

  <footer></footer>

</body>

</html>