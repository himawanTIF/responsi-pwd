<?php
session_start();

include "koneksi.php";

$email      = $_POST['email'];
$password   = md5($_POST['password']);
$sql        = "SELECT * FROM  admin WHERE email='$email' AND password='$password'";

if ($_POST['captcha_code'] == $_SESSION['captcha_code']) {

    $login = mysqli_query($connect, $sql);

    $ketemu = mysqli_num_rows($login);
    $r = mysqli_fetch_array($login);
    if ($ketemu > 0) {
        $_SESSION['email'] = $r['email'];
        $_SESSION['passowrd'] = $r['password'];

        header("location: dashboard.php");
    } else {
        echo "Login Gagal! Email dan Password Salah!";
        echo "<a href=index.php><b>Login Lagi</b></a>";
    }
    mysqli_close($connect);
}else {
    echo "Login Gagal! Captcha tidak sesuai";
    echo "<a href=index.php><b>Login Lagi</b></a>";
}

?>