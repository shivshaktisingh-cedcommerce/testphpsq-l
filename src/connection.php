<?php
$servername = "mysql-server";
$username = "root";
$password = "secret";



$conn = mysqli_connect($servername, $username, $password, 'test1');


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>