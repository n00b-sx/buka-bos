<?php
require 'functions.php';

if ($_GET['jenis'] == "jenis_transaksi") {
  if (hapus_jenis_transaksi($_GET['id']) > 0) {
    echo "<script>
    alert('Data berhasil dihapus');
    document.location.href='jenis_transaksi.php';
    </script>";
  }
} elseif ($_GET['jenis'] == "program") {
  if (hapus_program($_GET['id']) > 0) {
    echo "<script>
    alert('Data berhasil dihapus');
    document.location.href='program.php';
    </script>";
  }
} elseif ($_GET['jenis'] == "komponen") {
  if (hapus_komponen($_GET['id']) > 0) {
    echo "<script>
    alert('Data berhasil dihapus');
    document.location.href='komponen.php';
    </script>";
  }
}
