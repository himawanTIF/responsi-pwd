<?php
    include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
    <link rel="stylesheet" href="sugar.css">
</head>

<body>
    <div class="wrapper">
    <h1>Selamat Datang</h1>
        <form action="cek_login.php" method="post">
            <table>
                <tr>
                    <td>Email</td>
                    <td>: <input type="email" name="email" id="email" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>: <input type="password" name="password" id="password" required></td>
                </tr>
                <tr>
                    <td>Captcha<br><img src="captcha.php"></td>
                    <td>: <input type="text" name="captcha_code" id="captcha" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><button class="button button1" type="submit">Login</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>