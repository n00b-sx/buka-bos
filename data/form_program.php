<?php
require '../functions.php';

if (isset($_POST['tambah'])) {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <header></header>

  <main>
    <?php
    if (isset($_GET['status'])) {
      if ($_GET['status'] === 'tambah') {
    ?>
        <form action="" method="POST">
          <label>
            Uraian
            <input type="text" name="uraian">
          </label>
          <br>
          <input type="submit" value="Tambah" name="tambah" />
          <input type="button" value="Batal" onclick="document.location.href='program.php';" />
        </form>
      <?php
      } elseif ($_GET['status'] === 'ubah') {
      ?>
    <?php
      }
    }
    ?>
  </main>

  <footer></footer>
</body>

</html>