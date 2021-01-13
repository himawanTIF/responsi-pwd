<?php
include("koneksi.php");
require_once("auth.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota Perpustakaan</title>
    <link rel="stylesheet" href="sugar.css">
</head>

<body>
    <div class="container">
    <a href="dashboard.php"><button class="button button1" type="submit">Halaman Admin</button></a>
        <div class="wrapper">
            <h3 style="text-align: center">Tambah Anggota Perpustakaan</h3>
            <form action="proses_tambah_member.php" method="post" enctype="multipart/form-data">
                <table width="25%" border="0">
                    <tr>
                        <td>Kode Anggota</td>
                        <td>: <input type="number" name="kode" id="kode"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>: <input type="text" name="nama" id="nama"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: <input type="text" name="alamat" id="alamat"></td>
                    </tr>
                    <tr>
                        <td>NO. HP</td>
                        <td>: <input type="number" name="nohp" id="nohp"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: <input type="email" name="email" id="email"></td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td><input type="file" name="foto" id="foto"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Tambah" name=""></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>