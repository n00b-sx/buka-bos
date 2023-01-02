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

  if (mysqli_num_rows($result) > 0) {
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
    return $rows;
  } else {
    echo mysqli_error($conn);
  }
}

function hapus($id)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM saldo_awal WHERE id=$id");

  return mysqli_affected_rows($conn);
}

function ubah($id)
{
  $conn = koneksi();

  $id_saldo_awl = $id['id'];
  $bulan = $id['bulan'];
  $saldo_bank = $id['saldo_bank'];
  $saldo_tunai = $id['saldo_tunai'];
  $saldo_awl_pph21 = $id['saldo_awl_pph21'];
  $saldo_awl_pph22 = $id['saldo_awl_pph22'];
  $saldo_awl_pb1 = $id['saldo_awl_pb1'];
  $saldo_awl_ppn = $id['saldo_awl_ppn'];

  $query = "UPDATE saldo_awal SET bulan='$bulan', saldo_bank = '$saldo_bank', saldo_tunai = '$saldo_tunai', saldo_awl_pph21 = '$saldo_awl_pph21', saldo_awl_pph22 = '$saldo_awl_pph22', saldo_awl_pb1 = '$saldo_awl_pb1', saldo_awl_ppn = '$saldo_awl_ppn' WHERE id = $id_saldo_awl";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn) or die(mysqli_error($conn));
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
