<?php
function koneksi()
{
  $host = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'buku_kas_2023';

  return mysqli_connect($host, $username, $password, $database);
}

function load($tabel)
{
  $koneksi = koneksi();

  $query = "SELECT * FROM " . $tabel;
  $sql = mysqli_query($koneksi, $query);

  if (mysqli_num_rows($sql) > 0) {
    $rows = [];
    while ($row = mysqli_fetch_assoc($sql)) {
      $rows[] = $row;
    }
  } else {
    return mysqli_error($koneksi);
  }

  return $rows;

  // Tutup database
  mysqli_close($koneksi);
}
