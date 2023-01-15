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
