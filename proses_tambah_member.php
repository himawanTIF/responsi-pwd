<?php
include("koneksi.php");
$kode   = $_POST['kode'];
$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp   = $_POST['nohp'];
$email  = $_POST['email'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:tampil_member.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'foto/'.$rand.'_'.$filename);
        mysqli_query($connect, "INSERT INTO member VALUES('$kode','$nama','$alamat','$nohp','$email','$xx')");
        header("location:tampil_member.php?alert=berhasil");
	}else{
		header("location:tampil_member.php?alert=gagal_ukuran");
    }
}
?>