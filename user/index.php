<?php
  session_start();
  if($_SESSION['level'] != "user") {
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
  <nav class="sider">
    <header class="m-16">
      <a href="index.php">
        <img class="center" src="../assets/img/user/Logo.svg" alt="Logo">
      </a>
    </header>
    <section class="m-16">
      <a href="#">
        <div class="nav flex mb-12">
          <img src="../assets/img/user/Presensi Kehadiran.svg" alt="Presensi">
          <p>Presensi Kehadiran</p>
        </div>
      </a>
      <a href="#">
        <div class="nav flex mb-12">
          <img src="../assets/img/user/Prakerin.svg" alt="Prakerin">
          <p>Prakerin</p>
        </div>
      </a>
      <a href="#">
        <div class="nav flex mb-12">
          <img src="../assets/img/user/Rapor Siswa.svg" alt="Rapor">
          <p>Rapor Siswa</p>
        </div>
      </a>
    </section>
    <div class="copyright t-center w-100">
      <p>Rifky Galuh &copy; 24, XII RPL 1</p>
    </div>
  </nav>
  <main>
    <header>
      <h1>Dashboard</h1>
      <div class="account">

      </div>
    </header>
    <article class="shadow-2">
    </article>
  </main>
</body>

</html>