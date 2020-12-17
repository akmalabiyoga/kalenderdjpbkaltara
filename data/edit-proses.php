<?php
include '../database.php';

//variable
$id = $_GET['id'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$mulai = $_POST['mulai'];
$selesai = $_POST['selesai'];
$bidang = $_POST['bidang'];


//querysqlnya
$query="UPDATE `main` SET 
`nama` = '$nama', `deskripsi` = '$deskripsi', 
`mulai` = '$mulai', `selesai` = '$selesai', `bidang` = '$bidang' WHERE `main`.`id` = '$id'";

if (mysqli_query($conn, $query)) {
  header("Location: index.php");
  } else {
  echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>
