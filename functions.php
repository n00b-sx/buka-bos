<?php
function koneksi()
{
  $host = "localhost";
  $username = "root";
  $password = "";
  $db = "buku_kas_2023";

  return mysqli_connect($host, $username, $password, $db);
}

function tampil($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  } else {
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
  }
  echo mysqli_error($conn);
  return $rows;
}
