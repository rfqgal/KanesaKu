<?php
require_once('../../config.php');
$id = $_GET['id'];
$delete = "DELETE FROM user WHERE id = '$id'";
if (mysqli_query($conn, $delete)) {
  echo "<script>alert('Account Deleted!');</script>";
  header('location:index.php');
} else {
  echo "<script>alert('Error: Account Not Deleted!');</script>";
  header('location:index.php');
}
?>