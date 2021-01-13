<?php
session_start();

$random_alpha = md5(rand());
$captcha_code = substr($random_alpha, 0, 6);
$_SESSION["captcha_code"] = $captcha_code;
$target_layer = imagecreatetruecolor(95, 50);
$bg_captcha = imagecolorallocate($target_layer, 24, 9, 74);
imagefill($target_layer, 0, 0, $bg_captcha);
$captcha_text_color = imagecolorallocate($target_layer, 255, 255, 255);
imagestring($target_layer, 10, 20, 15, $captcha_code, $captcha_text_color);
header("Content-type: image/jpeg");
imagejpeg($target_layer);

?>