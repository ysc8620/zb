<?php
header("content-type:image/jpeg");
mb_internal_encoding("UTF-8");
$name = $_GET['name']?$_GET['name']:"亿酷网络科技bjlm123.taobao.com";
$namea = $_GET['namea']?$_GET['namea']:"亿酷网络科技bjlm123.taobao.com";
$im = imagecreatetruecolor(550, 776);
$bg = imagecreatefrompng('bjlm123.taobao.com.png');
imagecopy($im,$bg,0,0,0,0,550,776);
imagedestroy($bg);
$black = imagecolorallocate($im, 10, 10, 10);
$text = $name;
$font = '../font/wz.ttf';
imagettftext($im, 24, 0, 30, 65, $black, $font, $text);
imagettftext($im, 24, 0, 240, 385, $black, $font, $namea);

imagejpeg($im);
imagedestroy($im);
?>