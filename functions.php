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

function regsitrasi($data)
{
  $conn = koneksi();

  // Mengambil variabel yang dikirimkan dari form registrasi
  $username = strtolower(stripslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);
  $password_confirm = mysqli_real_escape_string($conn, $data['password_confirm']);

  // Mengecek username sudah ada di dalam tabel atau belum
  $result = mysqli_query($conn, "SELECT username FROM tbl_user WHERE username='$username'");
  if (mysqli_fetch_assoc($result)) {
    return [
      "notif" => "error",
      "pesan" => "Username sudah digunakan"
    ];
  }

  //Mengecek kembali password 1 dan 2
  if ($password !== $password_confirm) {
    return [
      "notif" => "error",
      "pesan" => "Password yang dimasukan tidak sesuai"
    ];
  }

  // Mengenkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // Menyimpan user ke database
  mysqli_query($conn, "INSERT INTO tbl_user VALUES (null, '$username', '$password','')");
  if (mysqli_affected_rows($conn) > 0) {
    return [
      "notif" => "sukes",
      "pesan" => "User baru berhasil ditambahkan"
    ];
  }
}
