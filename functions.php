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

function tambah_jenis_transaksi($post)
{
  $conn = koneksi();


  $kode_transaksi = $post['kode_transaksi'];
  $kode_rekening = $post['kode_rekening'];
  $jenis_transaksi = $post['jenis_transaksi'];

  $sql = "INSERT INTO jenis_transaksi VALUES (NULL,'$kode_transaksi','$kode_rekening','$jenis_transaksi')";
  mysqli_query($conn, $sql);

  return mysqli_affected_rows($conn);
}

function edit_jenis_transaksi($post)
{
  $conn = koneksi();

  $id = $post['id'];
  $kode_transaksi = $post['kode_transaksi'];
  $kode_rekening = $post['kode_rekening'];
  $jenis_transaksi = $post['jenis_transaksi'];

  $sql = "UPDATE jenis_transaksi SET kode_transaksi='$kode_transaksi', kode_rekening='$kode_rekening', jenis_transaksi='$jenis_transaksi' WHERE id=$id";
  mysqli_query($conn, $sql);

  return mysqli_affected_rows($conn);
}

function hapus_jenis_transaksi($id)
{
  $conn = koneksi();

  $sql = "DELETE FROM jenis_transaksi WHERE id=$id";
  mysqli_query($conn, $sql);

  return mysqli_affected_rows($conn);
}

function tambah_program($post)
{
  $conn = koneksi();


  $nama_program = $post['nama_program'];

  $sql = "INSERT INTO program VALUES (NULL,'$nama_program')";
  mysqli_query($conn, $sql);

  return mysqli_affected_rows($conn);
}

function edit_program($post)
{
  $conn = koneksi();

  $id = $post['id'];
  $nama_program = $post['nama_program'];

  $sql = "UPDATE program SET nama_program='$nama_program' WHERE id=$id";
  mysqli_query($conn, $sql);

  return mysqli_affected_rows($conn);
}

function hapus_program($id)
{
  $conn = koneksi();

  $sql = "DELETE FROM program WHERE id=$id";
  mysqli_query($conn, $sql);

  return mysqli_affected_rows($conn);
}

// Fungsi Komponen
function tambah_komponen($post)
{
  $conn = koneksi();


  $nama_komponen = $post['nama_komponen'];

  $sql = "INSERT INTO komponen VALUES (NULL,'$nama_komponen')";
  mysqli_query($conn, $sql);

  return mysqli_affected_rows($conn);
}

function edit_komponen($post)
{
  $conn = koneksi();

  $id = $post['id'];
  $nama_komponen = $post['nama_komponen'];

  $sql = "UPDATE komponen SET nama_komponen='$nama_komponen' WHERE id=$id";
  mysqli_query($conn, $sql);

  return mysqli_affected_rows($conn);
}

function hapus_komponen($id)
{
  $conn = koneksi();

  $sql = "DELETE FROM komponen WHERE id=$id";
  mysqli_query($conn, $sql);

  return mysqli_affected_rows($conn);
}
// Tutup Fungsi Komponen

// Mulai Fungsi Belanja
function tambah_belanja($post)
{
  $conn = koneksi();

  $tgl_transaksi = $post['tgl_transaksi'];
  $jenis_belanja = $post['jenis_belanja'];
  $id_jenis_transaksi = $post['jenis_transaksi'];
  $nomor_bukti = $post['nomor_bukti'];
  $id_program = $post['program'];
  $id_komponen = $post['komponen'];
  $uraian_belanja = $post['uraian_belanja'];
  $id_penyedia = $post['penyedia'];
  $saldo_keluar = $post['kredit'];

  $saldo_akhir = 1000000 - $saldo_keluar;

  $sql = "INSERT INTO transaksi VALUES (NULL,'$tgl_transaksi','$jenis_belanja','$id_jenis_transaksi','$nomor_bukti','$id_program','$id_komponen','$uraian_belanja','$id_penyedia',NULL,'$saldo_keluar','$saldo_akhir')";
  mysqli_query($conn, $sql);

  return mysqli_affected_rows($conn);
}

function edit_belanja($post)
{
}
// Tutup Fungsi Belanja

// Mulai Fungsi Penyedia
function tambah_penyedia($post)
{
  $conn = koneksi();

  $nama_penyedia = $post['nama_penyedia'];
  $alamat_penyedia = $post['alamat_penyedia'];
  $telepon_hp = $post['telepon_hp'];
  $npwp_penyedia = $post['npwp_penyedia'];

  $query = "INSERT INTO penyedia VALUES (NULL, $nama_penyedia, $alamat_penyedia, $telepon_hp, $npwp_penyedia)";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function edit_penyedia($post)
{
  $conn = koneksi();

  $id = $post['id'];
  $nama_penyedia = $post['nama_penyedia'];
  $alamat_penyedia = $post['alamat_penyedia'];
  $telepon_hp = $post['telepon_hp'];
  $npwp_penyedia = $post['npwp_penyedia'];

  $query = "UPDATE penyedia SET nama_penyedia = '$nama_penyedia', alamat_penyedia = '$alamat_penyedia', telepon_hp = '$telepon_hp', npwp_penyedia = '$npwp_penyedia' WHERE id=$id";
  mysqli_query($conn, $query);

  mysqli_affected_rows($conn);
}
// Tutup Fungsi Penyedia