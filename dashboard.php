<?php
require_once("auth.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="sugar.css">
</head>

<body>
    <div class="wrapper">
        <h3>Selamat datang di Website Perpustakaan</h3>
        <p>Anda sudah berhasil login di halaman Admin</p>

        <p><a href="tampil_buku.php">Lihat Koleksi Buku</a></p>
        <p><a href="tampil_member.php">Lihat Data Member</a></p>

        <p>Apabila ingin Keluar bisa klik tombol di bawah ini<br>
            <a href="logout.php">Logout</a>
        </p>
    </div>
</body>

</html>