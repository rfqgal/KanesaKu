<?php
  session_start();
  include('config.php');
  
  if (isset($_POST['login'])) {
    $id = $_POST['id'];

    $query = "SELECT * FROM user WHERE id='$id'";
    $sql = mysqli_query($conn, $query);
    $check = mysqli_num_rows($sql);

    if ($check == 1) {
      while ($row = mysqli_fetch_assoc($sql)) {
        if (md5($_POST['password'] == $row['password'])) {
          $_SESSION['name'] = $row['name'];
          $_SESSION['level'] = $row['level'];
          if ($_SESSION['level'] == 'admin') {
            header('location:./admin/');
          }
          if ($_SESSION['level'] == 'user') {
            header('location:./user/');
          }
        }
      }
    }
  }
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | KanesaKu</title>
  <link rel="stylesheet" href="./assets/style.css">
</head>
<body class="flex login">
  <div class="flex-basis-60">
    <h1 class="subtitle">Welcome to</h1>
    <h1 class="title">KanesaKu</h1>
    <footer>
      <p>Rifky Galuh &copy; 24, XII RPL 1</p>
    </footer>
  </div>
  <main class="flex-basis-40">
    <h1 class="saira" style="font-size: 36px;">Login</h1>
    <form class="form-login" action="" method="POST">
      <p>ID</p>
      <input type="text" name="id" id="id">
      <p>Password</p>
      <input type="password" name="password" id="password">
      <input type="submit" value="Login" name="login">
    </form>
    <a href="#">Tidak bisa login?</a>
  </main>
</body>
</html>