<?php
$servername = "localhost:3370";
$username = "root";
$password = "";
$dbname="pickles";

// Create connection
$connection = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "";
?>
