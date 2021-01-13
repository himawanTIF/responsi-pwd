<?php
include("koneksi.php");
require_once("auth.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Data Peminjaman Buku</title>
    <link rel="stylesheet" href="sugar.css">
</head>

<body>
    <div class="container">

        
        <a href="dashboard.php"><button class="button button1" type="submit">Halaman Admin</button></a>
        <h3>Data Peminjaman Buku</h3>

        <form action="" method="get">
            <label for="">Cari Buku (Kode): </label>
            <input type="text" name="cari" id="cari">
            <input class="button button1" type="submit" value="Cari">
        </form>
        <br>
        <?php
    if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    echo "Hasil Pencarian: ".$cari;
    }
    ?>
        <table border="1">
            <tr>
                <th>No</th>
                <th>No. Peminjaman</th>
                <th>Kode Anggota</th>
                <th>Kode Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Harus Kembali</th>
                <th>Tanggal Kembali</th>
            </tr>
            <?php
    if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];
        $sql = "SELECT * FROM peminjaman WHERE kodebk LIKE '%".$cari."%'";
        $tampil  = mysqli_query($connect, $sql);
    } else {
        $sql = "SELECT * FROM peminjaman";
        $tampil = mysqli_query($connect, $sql);
    }
    $no = 1;
    while ($r = mysqli_fetch_array($tampil)) {
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $r['nopeminjaman']; ?></td>
                <td><?php echo $r['kodeangt']; ?></td>
                <td><?php echo $r['kodebk']; ?></td>
                <td><?php echo $r['tglpinjam']; ?></td>
                <td><?php echo $r['tglhrskembali']; ?></td>
                <td><?php echo $r['tglkembali']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>