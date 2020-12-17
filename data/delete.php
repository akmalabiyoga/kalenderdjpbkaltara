<?php
include '../database.php';
//variable
 $id = $_GET['id'];

//querysqlnya
$query="DELETE from main WHERE id=$id";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>