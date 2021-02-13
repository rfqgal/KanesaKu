<?php
  session_start();
  if($_SESSION['level'] != "admin") {
    header('location:../index.php');
  }
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KanesaKu</title>
  <link rel="stylesheet" href="../assets/style.css">
  <style>
  </style>
</head>

<body class="flex">
  <nav class="sider-admin">
    <header class="m-16">
      <a href="index.php">
        <img class="center" src="../assets/img/admin/Logo.svg" alt="Logo">
      </a>
    </header>
    <section class="m-16">
      <a href="#">
        <div class="nav admin flex mb-12">
          <img src="../assets/img/admin/Presensi Kehadiran.svg" alt="Presensi">
          <p>Presensi Kehadiran</p>
        </div>
      </a>
      <a href="#">
        <div class="nav admin flex mb-12">
          <img src="../assets/img/admin/Prakerin.svg" alt="Prakerin">
          <p>Prakerin</p>
        </div>
      </a>
      <a href="#">
        <div class="nav admin flex mb-12">
          <img src="../assets/img/admin/Rapor Siswa.svg" alt="Rapor">
          <p>Rapor Siswa</p>
        </div>
      </a>
      <a href="./accounts/">
        <div class="nav admin flex mb-12">
          <img src="../assets/img/admin/Buat Akun.svg" alt="Rapor">
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
      <h1>KanesaKu</h1>
      <div class="account">

      </div>
    </header>
    <article class="dashboard mt-32">
      <h1>Selamat Datang, <?= $_SESSION['name'] ?>!</h1>
    </article>
  </main>
</body>

</html>