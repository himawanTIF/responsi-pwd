<?php
$host       = "localhost";
$username   = "root";
$password   = "";
$database   = "perpustakaan";
$connect    = mysqli_connect($host,$username,$password,$database);

if (!$connect) {
    echo "Koneksi mengalami galat!" . mysql_connect_error();
    exit();
}
?>