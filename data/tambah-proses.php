<?php
include '../database.php';

//variable
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$mulai = $_POST['mulai'];
$selesai = $_POST['selesai'];
$bidang = $_POST['bidang'];


//querysqlnya
$query="INSERT INTO `main` (`nama`, `deskripsi`, `mulai`, `selesai`, `bidang`) 
VALUES ('$nama', '$deskripsi', '$mulai', '$selesai', '$bidang')";

if (mysqli_query($conn, $query)) {
  header("Location: index.php");
  } else {
  echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>
