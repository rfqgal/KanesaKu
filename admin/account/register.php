<?php
session_start();
require_once('../../config.php');

if ($_SESSION['level'] != "admin") {
  header('location:../../');
}

if (isset($_POST['register'])) {
  $name = $_POST['name'];
  $id = $_POST['id'];
  $password = md5($_POST['password']);
  $level = $_POST['level'];

  if ($name != "" && $id != "" && $password != "d41d8cd98f00b204e9800998ecf8427e" && $level != "") {
    $register = "INSERT INTO user VALUES ('$id', '$password', '$name', '$level')";
    mysqli_query($conn, $register);
  } else {
    echo "<script>alert('No null!');</script>";
  }
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KanesaKu</title>
  <link rel="stylesheet" href="../../assets/style.css">
  <style>
  </style>
</head>

<body class="flex">
  <nav class="sider-admin">
    <header class="m-16">
      <a href="index.php">
        <img class="center" src="../../assets/img/admin/Logo.svg" alt="Logo">
      </a>
    </header>
    <section class="m-16">
      <a href="#">
        <div class="nav admin flex mb-12">
          <img src="../../assets/img/admin/Presensi Kehadiran.svg" alt="Presensi">
          <p>Presensi Kehadiran</p>
        </div>
      </a>
      <a href="#">
        <div class="nav admin flex mb-12">
          <img src="../../assets/img/admin/Prakerin.svg" alt="Prakerin">
          <p>Prakerin</p>
        </div>
      </a>
      <a href="#">
        <div class="nav admin flex mb-12">
          <img src="../../assets/img/admin/Rapor Siswa.svg" alt="Rapor">
          <p>Rapor Siswa</p>
        </div>
      </a>
      <a href="#">
        <div class="nav admin active flex mb-12">
          <img src="../../assets/img/admin/Buat Akun.svg" alt="Rapor">
          <p>Manajemen Akun</p>
        </div>
      </a>
    </section>
    <div class="copyright t-center w-100">
      <p>Rifky Galuh &copy; 24, XII RPL 1</p>
    </div>
  </nav>
  <main>
    <header>
      <h1 class="t-center mt-32">Buat Akun</h1>
      <div class="account">

      </div>
    </header>
    <article class="content mt-32 center shadow-2">
      <form action="" method="POST">
        <h1 class="t-center">Form Register</h1>
        <div class="">
          <div class="col block">
            <label class="mt-32" for="name">Name</label>
            <input type="text" name="name" id="name">
            <span>*Nama lengkap pemilik akun beserta gelar</span>
            <label class="mt-32" for="id">ID</label>
            <input type="text" name="id" id="id">
            <span>*Username untuk login akun Anda</span>
            <label class="mt-32" for="password">Password</label>
            <input type="password" name="password" id="password">
            <span>*Buat dengan kombinasi huruf angka</span>
            <label class="mt-32" for="level">Level</label>
            <select name="level" id="level">
              <option value="user">User</option>
              <option value="admin">Admin</option>
            </select>
          </div>  
        </div>
        <input type="submit" value="Register" name="register">
      </form>
    </article>
  </main>
</body>

</html>