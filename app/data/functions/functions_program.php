<?php
// Fungsi Menambah Data
function tambah_program($post)
{
  $conn = koneksi();

  $nama_program = $post['nama_program'];

  $sql = "INSERT INTO program VALUES (NULL, '$nama_program')";
  mysqli_query($conn, $sql);

  return mysqli_affected_rows($conn);
}

// Fungsi Mengubah Data
function edit_program($post)
{
  $conn = koneksi();

  $id = $post['id'];
  $nama_program = $post['nama_program'];

  $sql = "UPDATE program SET nama_program='$nama_program' WHERE id=$id";
  mysqli_query($conn, $sql);

  return mysqli_affected_rows($conn);
}

// Fungsi Menghapus Data
function hapus_program($id)
{
  $conn = koneksi();

  $sql = "DELETE FROM program WHERE id=$id";
  mysqli_query($conn, $sql);

  return mysqli_affected_rows($conn);
}

// if (isset($_POST['tambah'])) {
//   if (tambah_program($_POST) > 0) {
//     header('location:../program.php?status=sukses');
//   } else {
//     header('location:../program.php?status=error');
//   }
// }

if (isset($_POST['edit'])) {
  if (edit_program($_POST) > 0) {
    header('location:program.php');
    echo "<script>toastr.success('Data berhasil diubah');</script>";
  } else {
    echo "<script>toastr.error('Data gagal diubah');</script>";
  }
}
