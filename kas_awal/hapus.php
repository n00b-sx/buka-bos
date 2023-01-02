<?php
require '../functions.php';

if (isset($_GET['id'])) {

  $id = $_GET['id'];

  $result = hapus($id);

  if ($result > 0) {
    echo "<script>
    alert('data berhasil di hapus');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo "<script>
    alert('data gagal dihapus');
    document.location.href = 'index.php';
    </script>";
  }
}
