<?php
require '../functions.php';
$datas = tampil("SELECT * FROM saldo_awal");
?>
<!DOCTYPE html>
<html>

<head>
  <title>Kas Awal</title>
  <link rel="stylesheet" href="../asset/style.css" />
  <style>
    table,
    th,
    td {
      border: 1px solid black;
    }

    th,
    td {
      padding: 10px;
      text-align: center;
    }

    table.center {
      margin-left: auto;
      margin-right: auto;
    }
  </style>
</head>

<body>

  <header>
    <ul>
      <li><a href="../index.php">Beranda</a></li>
      <li><a href="">Transaksi</a></li>
      <li><a href="../laporan/index.php">Laporan</a></li>
    </ul>
  </header>

  <main>
    <?php
    if ($datas <= 0) :
    ?>
      <a href="tambah.php">Tambah Data</a>
    <?php
    endif;
    ?>
    <table class="center">
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
        if ($datas <= 0) { ?>
          <tr>
            <td colspan="9">Data Kosong</td>
          </tr>
          <?php } else {
          $i = 1;
          foreach ($datas as $data) :
          ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $data['bulan']; ?></td>
              <td><?= number_format($data['saldo_bank']); ?></td>
              <td><?= number_format($data['saldo_tunai']); ?></td>
              <td><?= number_format($data['saldo_awl_pph21']); ?></td>
              <td><?= number_format($data['saldo_awl_pph22']); ?></td>
              <td><?= number_format($data['saldo_awl_pb1']); ?></td>
              <td><?= number_format($data['saldo_awl_ppn']); ?></td>
              <td>
                <a href="ubah.php?id=<?= $data['id']; ?>">Ubah</a> |
                <a onclick="return confirm('Apakah anda yakin untuk menghapus ?');" href="hapus.php?id=<?= $data['id']; ?>">Hapus</a>
              </td>
            </tr>
        <?php endforeach;
        } ?>
      </tbody>
    </table>
  </main>

  <footer></footer>

</body>

</html>