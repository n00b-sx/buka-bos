<?php
require 'functions.php';
if (isset($_POST['edit_jenis_transaksi'])) {
  if (edit_jenis_transaksi($_POST) > 0) {
    echo "<script>alert('Data berhasil diubah');
    document.location.href='jenis_transaksi.php';
    </script>";
  }
} elseif (isset($_POST['edit_program'])) {
  if (edit_program($_POST) > 0) {
    echo "<script>alert('Data berhasil diubah');
    document.location.href='program.php';
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>

  </header>
  <main>
    <?php
    if ($_GET['jenis'] == "jenis_transaksi") :
      $id = $_GET['id'];
      $row = tampil("SELECT * FROM jenis_transaksi WHERE id='$id'")[0];
    ?>
      <form action="" method="POST">
        <span>
          <label for="jenis_transaksi">Jenis Transaksi</label>
          <input type="text" name="kode_transaksi" id="jenis_transaksi" value="<?= $row['kode_transaksi']; ?>">
        </span>
        <br>
        <span>
          <label for="kode_rekening">Kode Rekening</label>
          <input type="text" name="kode_rekening" id="kode_rekening" value="<?= $row['kode_rekening']; ?>">
        </span>
        <br>
        <span>
          <label for="uraian">Uraian</label>
          <input type="text" name="jenis_transaksi" id="uraian" value="<?= $row['jenis_transaksi']; ?>">
        </span>
        <br>
        <input type="hidden" name="id" value="<?= $row['id']; ?>">
        <input type="submit" value="Simpan" name="edit_jenis_transaksi">
      </form>
      <br>
      <a href="jenis_transaksi.php">Lihat data jenis transaksi</a>
    <?php endif; ?>
    <?php
    if ($_GET['jenis'] == "program") :
      $id = $_GET['id'];
      $row = tampil("SELECT * FROM program WHERE id='$id'")[0];
    ?>
      <form action="" method="POST">
        <span>
          <label for="nama_program">Nama Program</label>
          <input type="text" name="nama_program" id="nama_program" value="<?= $row['nama_program']; ?>">
        </span>
        <br>
        <input type="hidden" name="id" value="<?= $row['id']; ?>">
        <input type="submit" value="Simpan" name="edit_program">
      </form>
      <br>
      <a href="program.php">Lihat data program</a>
    <?php endif; ?>
  </main>
  <footer></footer>
</body>

</html>