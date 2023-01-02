<?php
require 'functions.php';

if (isset($_POST['login'])) {

  $conn = koneksi();

  // Ambil variabel $_POST
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Cek username apakah cocok atau tidak
  $result = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username='$username'");

  if (mysqli_num_rows($result) == 1) {
    // Cek password apakah sama dengan yang ada di tabel tbl_user
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
      echo "<script>
            document.location.href = 'index.php';
            </script>";
    }
  }

  $error = true;
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>

<body>
  <!-- Navbar Here -->
  <header></header>

  <main>
    <div class="row">
      <?php if (isset($error)) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <p>Username dan Password yang anda masukan salah</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>
      <div class="card w-100">
        <div class="card-body">
          <h5 class="card-title">Login</h5>
          <form action="" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Username</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" required>
              <div id="emailHelp" class="form-text">Kami tidak akan membocorkan datamu 🙂.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="login">Masuk</button>
          </form>
        </div>
      </div>
    </div>
  </main>

  <footer></footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>