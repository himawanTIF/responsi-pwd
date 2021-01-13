<?php
include("koneksi.php");

$sql = "SELECT * FROM buku ORDER BY kodebk";
$tampil = mysqli_query($connect, $sql);
if (mysqli_num_rows($tampil) > 0) {
    $no = 1;
    $response = array();
    $response["data"] = array();
    while ($r = mysqli_fetch_array($tampil)) {
        $h['kode buku'] = $r['kodebk'];
        $h['judul'] = $r['judul'];
        $h['pengarang'] = $r['pengarang'];
        $h['penerbit'] = $r['penerbit'];
        $h['tahun terbit'] = $r['thnterbit'];
        array_push($response["data"], $h);
    }
    echo json_encode($response);
} else {
    $response["message"]="tidak ada data";
    echo json_encode($response);   
}
?>