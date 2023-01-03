<?php
require '../functions.php';

if (isset($_POST['tambah'])) {
  $simpan = simpan($_POST);

  if ($simpan > 0) {
    echo "<script>
    alert('Data berhasil ditambahkan');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo "<script>
    alert('Data gagal ditambahkan');
    document.location.href = 'index.php';
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
  <title>Kas Awal | Tambah Data</title>
</head>

<body>
  <header></header>
  <main>
    <form action="" method="POST">
      <label for="bulan">
        <Select name='bulan'>
          <?php
          $months = tampil("SELECT * FROM bulan");
          foreach ($months as $month) :
          ?>
            <option><?= $month['nama']; ?></option>
          <?php
          endforeach;
          ?>
        </Select>
      </label>
      <br>
      <label>
        Saldo Bank
        <input type="text" name="saldo_bank">
      </label>
      <br>
      <label>
        Saldo Tunai
        <input type="text" name="saldo_tunai">
      </label>
      <br>
      <label>
        Saldo PPH21
        <input type="text" name="saldo_awl_pph21">
      </label>
      <br>
      <label>
        Saldo PPH22
        <input type="text" name="saldo_awl_pph22">
      </label>
      <br>
      <label>
        Saldo PB1
        <input type="text" name="saldo_awl_pb1">
      </label>
      <br>
      <label>
        Saldo PPN
        <input type="text" name="saldo_awl_ppn">
      </label>
      <br>
      <input type="submit" value="Tambah" name="tambah">
      <input type="button" value="Batal" onclick="document.location.href='index.php';">
    </form>
  </main>
  <footer></footer>
</body>

</html>