<?php
session_start();
session_destroy();
echo "<script>alert('Berhasil Logout!');history.go(-1);</script>";
?>