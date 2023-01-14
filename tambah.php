<?php
require 'functions.php';
if (isset($_POST['tambah_jenis_transaksi'])) {
  if (tambah_jenis_transaksi($_POST) > 0) {
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
  <title>Document</title>
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
  </main>
  <footer></footer>
</body>

</html>