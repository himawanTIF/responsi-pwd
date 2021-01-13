<?php
// Menyisipkan library FPDF
require('fpdf/fpdf.php');
// instance objek dan mengatur halaman PDF
$pdf = new FPDF('l','mm','A4');
// Membuat halaman baru
$pdf->AddPage();
// Atur jenis font yang digunakan
$pdf->SetFont('Arial','B',16);
// Mencetak string
$pdf->Cell(270,7,'Perpustakaan',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(270,7,'Data Anggota Perpustakaan',0,1,'C');

// Memberikan jarak kebawah agar tidak terlalu rapat 
$pdf->Cell(10,7,'',0,1);
// Membuat Tabel
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,6,'Kode Anggota',1,0);
$pdf->Cell(50,6,'Nama',1,0);
$pdf->Cell(25,6,'Alamat',1,0);
$pdf->Cell(30,6,'No. HP',1,0);
$pdf->Cell(50,6,'Email',1,0);
$pdf->Cell(80,6,'Foto',1,1);

$pdf->SetFont('Arial','',10);
// Menampilkan isi tabel
include 'koneksi.php';
$member = mysqli_query($connect, "SELECT * FROM member");
while ($row = mysqli_fetch_array($member)) {
    $pdf->Cell(30,6,$row['kode'],1,0);
    $pdf->Cell(50,6,$row['nama'],1,0);
    $pdf->Cell(25,6,$row['alamat'],1,0);
    $pdf->Cell(30,6,$row['nohp'],1,0);
    $pdf->Cell(50,6,$row['email'],1,0);
    $pdf->Cell(80,6,$row['foto'],1,1);
}
// Fungsi untuk mencetak halaman
$pdf->Output();
?>