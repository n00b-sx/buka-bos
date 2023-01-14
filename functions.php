<?php

function koneksi()
{
  $host = "localhost";
  $name = "root";
  $pass = "";
  $db = "buku_kas_2023";

  return mysqli_connect($host, $name, $pass, $db);

  // if (!mysqli_connect_errno()) {
  //   $str = "Koneksi database berhasil" . mysqli_connect_error();
  // }

  // return $str;
}

function tampil($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
