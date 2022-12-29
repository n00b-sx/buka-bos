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

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  $tampil = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $tampil);
  if (mysqli_num_rows($result) == 1) {
    echo "<script>document.location.href = 'index.php';</script>";
  } else {
    return [
      "error" => true,
      "pesan" => "Maaf, Password dan Username yang anda masukan salah"
    ];
  }
}
