<?php
// used to connect to the database
$servername = "localhost";
$dbname = "fc";
$username = "root";
$password = "";
  
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}
?>