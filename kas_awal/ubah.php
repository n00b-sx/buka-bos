<?php
require '../functions.php';

if (isset($_POST['ubah'])) {
  $ubah = ubah($_POST);

  if ($ubah > 0) {
    echo "<script>alert('Data berhasil diubah'); document.location.href='index.php';</script>";
  } else {
    echo "<script>alert('Data gagal diubah'); document.location.href='index.php';</script>";
  }
}

$id = $_GET['id'];

$conn = koneksi();
$data = tampil("SELECT * FROM saldo_awal WHERE id=$id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kas Awal | Ubah</title>
</head>

<body>
  <header>
  </header>
  <main>
    <form action="" method="POST">
      <label for="bulan">
        <Select name='bulan'>
          <?php
          $months = tampil("SELECT * FROM bulan");
          foreach ($months as $month) :
          ?>
            <option value="<?= $month['nama']; ?>" <?php if ($month['nama'] == $data['bulan']) {
                                                      echo "selected";
                                                    } ?>><?= $month['nama']; ?></option>
          <?php
          endforeach;
          ?>
        </Select>
      </label>
      <br>
      <label>
        Saldo Bank
        <input type="text" name="saldo_bank" value="<?= $data['saldo_bank']; ?>">
      </label>
      <br>
      <label>
        Saldo Tunai
        <input type="text" name="saldo_tunai" value="<?= $data['saldo_tunai']; ?>">
      </label>
      <br>
      <label>
        Saldo PPH21
        <input type="text" name="saldo_awl_pph21" value="<?= $data['saldo_awl_pph21']; ?>">
      </label>
      <br>
      <label>
        Saldo PPH22
        <input type="text" name="saldo_awl_pph22" value="<?= $data['saldo_awl_pph22']; ?>">
      </label>
      <br>
      <label>
        Saldo PB1
        <input type="text" name="saldo_awl_pb1" value="<?= $data['saldo_awl_pb1']; ?>">
      </label>
      <br>
      <label>
        Saldo PPN
        <input type="text" name="saldo_awl_ppn" value="<?= $data['saldo_awl_ppn']; ?>">
      </label>
      <br>
      <input type="hidden" name="id" value="<?= $data['id']; ?>">
      <input type="submit" value="Ubah" name="ubah">
      <input type="button" value="Batal" onclick="document.location.href='index.php';">
    </form>
  </main>
  <footer></footer>
</body>

</html>