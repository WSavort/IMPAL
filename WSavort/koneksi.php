<?php
$hostname = "localhost";
$database = "wsavort";
$username = "root";
$password = "";

$connect  = mysqli_connect($hostname, $username, $password, $database) or die("koneksi error!!!");
mysqli_select_db($connect, $database) or die("koneksi error!!!");
?>