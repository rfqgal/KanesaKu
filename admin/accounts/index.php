<?php
session_start();
if ($_SESSION['level'] != "admin") {
  header('location:../../');
}
require_once('../../config.php');
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
      <h1>Manajemen Akun</h1>
      <div class="account">

      </div>
    </header>
    <article class="content shadow-2">
      <div class="account-header">
        <h1>Daftar Akun</h1>
        <a href="./register.php">Tambahkan Akun</a>
      </div>
      <table class="account">
        <tr>
          <th class="index">ID</th>
          <th>Nama</th>
          <th class="level">Level</th>
          <th class="action">Action</th>
        </tr>
        <?php
        $read = mysqli_query($conn, "SELECT * FROM user");
        while ($row = mysqli_fetch_assoc($read)) {
        ?>
          <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['level'] ?></td>
            <td class="action">
              <a href="update.php">
                <button class="warning">
                  <img src="../../assets/img/Edit.svg" alt="Edit">
                </button>
              </a>
              <a href="./delete.php?id=<?= $row['id'] ?>">
                <button class="danger">
                  <img src="../../assets/img/Delete.svg" alt="Delete">
                </button>
              </a>
            </td>
          </tr>
        <?php
        }
        ?>
      </table>
    </article>
  </main>
</body>

</html>