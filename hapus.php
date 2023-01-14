<?php
require 'functions.php';

if ($_GET['jenis'] == "jenis_transaksi") {
  if (hapus_jenis_transaksi($_GET['id'])) {
    $id = $_GET['id'];
    $row = tampil("SELECT jenis_transaksi FROM jenis_transaksi WHERE id=$id")[0];
    echo "<script>
    alert('Data berhasil dihapus');
    document.location.href='jenis_transaksi.php';
    </script>";
  }
}
