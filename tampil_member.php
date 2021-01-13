<?php
include("koneksi.php");
require_once("auth.php");

$result = mysqli_query($connect, "SELECT * FROM member");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota Perpustakaan</title>
    <link rel="stylesheet" href="sugar.css">
</head>

<body>
    <div class="container">

        <a href="dashboard.php"><button class="button button1" type="submit">Halaman Admin</button></a>
        
        <h3>Data Anggota Perpustakaan</h3>
        <a href="tambah_member.php"><button class="button button1" type="submit">Tambah Anggota Baru</button></a>
        <a href="export_data_pdf.php"><button class="button button1" type="submit">Export PDF</button></a>
        <a target="_blank" href="export_data_excel.php"><button class="button button1" type="submit">Export Excel</button></a>
        <br>
        <table width="80%" border="1">
            <tr>
                <th>Kode Anggota</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. HP</th>
                <th>Email</th>
                <th>Foto</th>
            </tr>
            <?php
            while ($member_data = mysqli_fetch_array($result)) {
                ?>
            <tr>
                <td><?php echo $member_data['kode']; ?></td>
                <td><?php echo $member_data['nama']; ?></td>
                <td><?php echo $member_data['alamat']; ?></td>
                <td><?php echo $member_data['nohp']; ?></td>
                <td><?php echo $member_data['email']; ?></td>
                <td><img src="foto/<?php echo $member_data['foto'] ?>" width="35" height="40"></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>