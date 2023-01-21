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
} elseif (isset($_POST['edit_komponen'])) {
  if (edit_komponen($_POST) > 0) {
    echo "<script>alert('Data berhasil diubah');
    document.location.href='komponen.php';
    </script>";
  }
} elseif (isset($_POST['edit_belanja'])) {
  if (edit_belanja($_POST) > 0) {
    echo "<script>alert('Data berhasil diubah');
    document.location.href='transaksi_belanja.php';
    </script>";
  }
} elseif (isset($_POST['edit_penyedia'])) {
  if (edit_penyedia($_POST) > 0) {
    echo "<script>alert('Data berhasil diubah');
    document.location.href='penyedia.php';
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
    <?php
    if ($_GET['jenis'] == "komponen") :
      $id = $_GET['id'];
      $row = tampil("SELECT * FROM komponen WHERE id='$id'")[0];
    ?>
      <form action="" method="POST">
        <span>
          <label for="nama_komponen">Nama Komponen</label>
          <input type="text" name="nama_komponen" id="nama_komponen" value="<?= $row['nama_komponen']; ?>">
        </span>
        <br>
        <input type="hidden" name="id" value="<?= $row['id']; ?>">
        <input type="submit" value="Simpan" name="edit_komponen">
      </form>
      <br>
      <a href="komponen.php">Lihat data komponen</a>
    <?php endif; ?>
    <?php
    if ($_GET['jenis'] == "belanja") :
      $id = $_GET['id'];
      $row = tampil("SELECT * FROM transaksi WHERE id=$id")[0];
    ?>
      <form action="" method="post">
        <p>Jenis Transaksi :</p>
        <input type="radio" name="jenis_belanja" id="tunai" <?php if ($row['jenis_belanja'] == 'Tunai') {
                                                              echo 'checked';
                                                            } ?>>
        <label for="tunai">Tunai</label>
        <input type="radio" name="jenis_belanja" id="bank" <?php if ($row['jenis_belanja'] == 'Bank') {
                                                              echo 'checked';
                                                            } ?>>
        <label for="bank">Bank</label>
        <br><br>
        <span>
          <label for="tgl_transaksi">Tanggal Transaksi</label>
          <input value="<?= $row['tgl_transaksi']; ?>" type="date" name="tgl_transaksi" id="tgl_transaksi">
        </span>
        <br><br>
        <span>
          <label for="nomor_bukti">Nomor Bukti</label>
          <input value="<?= $row['nomor_bukti']; ?>" type="text" name="nomor_bukti" id="nomor_bukti">
        </span>
        <span>
          <label for="jenis_transaksi">Jenis Belanja</label>
          <select name="jenis_transaksi">
            <?php
            $id_jenis_transaksi = $row['id_jenis_transaksi'];
            $rows = tampil("SELECT * FROM jenis_transaksi WHERE kode_transaksi = 'Belanja'");
            foreach ($rows as $a) :
            ?>
              <option <?php if ($a['id'] == $id_jenis_transaksi) {
                        echo "Selected";
                      } ?> value="<?= $a['id']; ?>"><?= $a['jenis_transaksi']; ?></option>
            <?php endforeach; ?>
          </select>
        </span>
        <span>
          <?php
          $idProgram = $row['id_program'];
          $rows = tampil("SELECT * FROM program");
          ?>
          <label for="program">Program</label>
          <select name="program">
            <?php foreach ($rows as $b) : ?>
              <option <?php if ($b['id'] == $idProgram) {
                        echo "Selected";
                      } ?> value="<?= $b['id']; ?>"><?= $b['nama_program']; ?></option>
            <?php endforeach; ?>
          </select>
        </span>
        <span>
          <label for="komponen">Komponen</label>
          <select name="komponen">
            <?php
            $idKomponen = $row['id_komponen'];
            $rows = tampil("SELECT * FROM komponen");
            foreach ($rows as $c) :
            ?>
              <option <?php if ($c['id'] == $idKomponen) {
                        echo "Selected";
                      } ?> value="<?= $c['id']; ?>"><?= $c['nama_komponen']; ?></option>
            <?php endforeach; ?>
          </select>
        </span>
        <span>
          <label for="uraian_belanja">Uraian Belanja</label><br>
          <textarea name="uraian_belanja" id="uraian_belanja" cols="100" rows="10"><?= $row['uraian_belanja']; ?></textarea>
        </span>
        <br>
        <span>
          <label for="penyedia">Penyedia</label>
          <select name="penyedia" id="penyedia">
            <?Php
            $idPenyedia = $row['id_penyedia'];
            $rows = tampil("SELECT * FROM penyedia");
            foreach ($rows as $d) :
            ?>
              <option <?php if ($d['id'] == $idPenyedia) {
                        echo "Selected";
                      } ?> value="<?= $d['id']; ?>"><?= $d['nama_penyedia']; ?></option>
            <?php endforeach; ?>
          </select>
          <a href="penyedia.php?id=<?= $row['id']; ?>">Lihat Data Penyedia</a>
        </span>
        <br><br>
        <span>
          <label for="kredit">Keluar</label>
          <input type="number" name="kredit" id="kredit" value="<?= $row['saldo_keluar']; ?>">
        </span>
        <br>
        <input type="hidden" name="id" value="<?= $row['id']; ?>">
        <input type="submit" value="Simpan" name="edit_belanja">
      </form>
      <br>
      <br>
      <a href="transaksi_belanja.php">Kembali ke data Transaksi Belanja</a>
    <?php endif; ?>
    <?php if ($_GET['jenis'] == "penyedia") :
      $id = $_GET['id'];
      $row = tampil("SELECT * FROM penyedia  WHERE id=$id")[0];
    ?>
      <form action="" method="POST">
        <div>
          <label for="nama_penyedia">Nama Penyedia</label>
          <input type="text" name="nama_penyedia" id="nama_penyedia" value="<?= $row['nama_penyedia']; ?>">
        </div>
        <div>
          <label for="alamat">Alamat</label>
          <br>
          <textarea name="alamat_penyedia" id="alamat" cols="30" rows="10"><?= $row['alamat_penyedia']; ?></textarea>
        </div>
        <div>
          <label for="telepon_hp">No. Telepon/Hp</label>
          <input type="text" name="telepon_hp" id="telepon_hp" value="<?= $row['telepon_hp']; ?>">
        </div>
        <div>
          <label for="npwp_penyedia">NPWP</label>
          <input type="text" name="npwp_penyedia" id="npwp_penyedia" value="<?= $row['npwp_penyedia']; ?>">
        </div>
        <div>
          <input type="hidden" name="id" value="<?= $row['id']; ?>">
          <input type="submit" value="Simpan" name="edit_penyedia">
        </div>
      </form>
    <?php endif; ?>
  </main>
  <footer></footer>
</body>

</html>