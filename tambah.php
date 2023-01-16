<?php
require 'functions.php';
if (isset($_POST['tambah_jenis_transaksi'])) {
  if (tambah_jenis_transaksi($_POST) > 0) {
    echo "<script>alert('Data berhasil ditambahkan');</script>";
  }
} elseif (isset($_POST['tambah_program'])) {
  if (tambah_program($_POST) > 0) {
    echo "<script>alert('Data berhasil ditambahkan');</script>";
  }
} elseif (isset($_POST['tambah_komponen'])) {
  if (tambah_komponen($_POST) > 0) {
    echo "<script>alert('Data berhasil ditambahkan');</script>";
  }
} elseif (isset($_POST['tambah_belanja'])) {
  if (tambah_belanja($_POST) > 0) {
    echo "<script>alert('Data berhasil ditambahkan');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>

  </header>
  <main>
    <?php
    if ($_GET['tambah'] == "jenis_transaksi") :
    ?>
      <form action="" method="POST">
        <span>
          <label for="jenis_transaksi">Jenis Transaksi</label>
          <input type="text" name="kode_transaksi" id="jenis_transaksi">
        </span>
        <br>
        <span>
          <label for="kode_rekening">Kode Rekening</label>
          <input type="text" name="kode_rekening" id="kode_rekening">
        </span>
        <br>
        <span>
          <label for="uraian">Uraian</label>
          <input type="text" name="jenis_transaksi" id="uraian">
        </span>
        <br>
        <input type="submit" value="Tambah" name="tambah_jenis_transaksi">
      </form>
      <br>
      <a href="jenis_transaksi.php">Lihat data jenis transaksi</a>
    <?php endif; ?>
    <?php
    if ($_GET['tambah'] == "program") :
    ?>
      <form action="" method="POST">
        <span>
          <label for="nama_program">Nama Program</label>
          <input type="text" name="nama_program" id="nama_program">
        </span>
        <br>
        <input type="submit" value="Tambah" name="tambah_program">
      </form>
      <br>
      <a href="program.php">Lihat data jenis transaksi</a>
    <?php endif; ?>
    <?php
    if ($_GET['tambah'] == "komponen") :
    ?>
      <form action="" method="POST">
        <span>
          <label for="nama_komponen">Nama Komponen</label>
          <input type="text" name="nama_komponen" id="nama_komponen">
        </span>
        <br>
        <input type="submit" value="Tambah" name="tambah_komponen">
      </form>
      <br>
      <a href="komponen.php">Lihat data jenis transaksi</a>
    <?php endif; ?>
    <?php
    if ($_GET['tambah'] == "belanja") :
    ?>
      <form action="" method="post">
        <p>Jenis Transaksi :</p>
        <input value="Tunai" type="radio" name="jenis_belanja" id="tunai">
        <label for="tunai">Tunai</label>
        <input value="Bank" type="radio" name="jenis_belanja" id="bank">
        <label for="bank">Bank</label>
        <br><br>
        <span>
          <label for="tgl_transaksi">Tanggal Transaksi</label>
          <input type="date" name="tgl_transaksi" id="tgl_transaksi">
        </span>
        <br><br>
        <span>
          <label for="nomor_bukti">Nomor Bukti</label>
          <input type="text" name="nomor_bukti" id="nomor_bukti">
        </span>
        <span>
          <label for="jenis_transaksi">Jenis Belanja</label>
          <select name="jenis_transaksi">
            <?php
            $rows = tampil("SELECT * FROM jenis_transaksi WHERE kode_transaksi = 'Belanja'");
            foreach ($rows as $row) :
            ?>
              <option value="<?= $row['id']; ?>"><?= $row['jenis_transaksi']; ?></option>
            <?php endforeach; ?>
          </select>
        </span>
        <span>
          <label for="program">Program</label>
          <select name="program">
            <?php
            $rows = tampil("SELECT * FROM program");
            foreach ($rows as $row) :
            ?>
              <option value="<?= $row['id']; ?>"><?= $row['nama_program']; ?></option>
            <?php endforeach; ?>
          </select>
        </span>
        <span>
          <label for="komponen">Komponen</label>
          <select name="komponen">
            <?php
            $rows = tampil("SELECT * FROM komponen");
            foreach ($rows as $row) :
            ?>
              <option value="<?= $row['id']; ?>"><?= $row['nama_komponen']; ?></option>
            <?php endforeach; ?>
          </select>
        </span>
        <span>
          <label for="uraian_belanja">Uraian Belanja</label><br>
          <textarea name="uraian_belanja" id="uraian_belanja" cols="100" rows="10"></textarea>
        </span>
        <br>
        <span>
          <label for="penyedia">Penyedia</label>
          <select name="penyedia" id="penyedia">
            <?Php
            $rows = tampil("SELECT * FROM penyedia");
            foreach ($rows as $row) :
            ?>
              <option value="<?= $row['id']; ?>"><?= $row['nama_penyedia']; ?></option>
            <?php endforeach; ?>
          </select>
          <a href="penyedia.php">Lihat Data Penyedia</a>
        </span>
        <br><br>
        <span>
          <label for="kredit">Keluar</label>
          <input type="number" name="kredit" id="kredit">
        </span>
        <br>
        <input type="submit" value="Tambah" name="tambah_belanja">
      </form>
      <br>
      <br>
      <a href="transaksi_belanja.php">Kembali ke data Transaksi Belanja</a>
    <?php endif; ?>
  </main>
  <footer></footer>
</body>

</html>