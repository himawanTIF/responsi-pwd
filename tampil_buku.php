<?php
include("koneksi.php");
require_once("auth.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Koleksi Buku</title>
    <link rel="stylesheet" href="sugar.css">
</head>

<body>
    <div class="container">
        
        <a href="dashboard.php"><button class="button button1" type="submit">Halaman Admin</button></a>
        <a href="peminjaman.php"><button class="button button1" type="submit">Data Peminjaman</button></a>
        <a href="buku_xml.php"><button class="button button1" type="submit">Lihat Koleksi Buku (XML Data)</button></a>
        <a href="buku_json.php"><button class="button button1" type="submit">Lihat Koleksi Buku(JSON Data)</button></a>

        <h2>Daftar Koleksi Buku</h2>
        <form action="" method="get">
            <label for="">Cari Buku (Judul): </label>
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
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
            </tr>
            <?php
    if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];
        $sql = "SELECT * FROM buku WHERE judul LIKE '%".$cari."%'";
        $tampil  = mysqli_query($connect, $sql);
    } else {
        $sql = "SELECT * FROM buku";
        $tampil = mysqli_query($connect, $sql);
    }
    $no = 1;
    while ($r = mysqli_fetch_array($tampil)) {
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $r['judul']; ?></td>
                <td><?php echo $r['pengarang']; ?></td>
                <td><?php echo $r['penerbit']; ?></td>
                <td><?php echo $r['thnterbit']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>