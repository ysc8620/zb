<?php
header("content-type:image/jpeg");
mb_internal_encoding("UTF-8");
$name = $_GET['name']?$_GET['name']:"亿酷网络科技bjlm123.taobao.com";
$jb = $_GET['jb']?$_GET['jb']:"亿酷网络科技bjlm123.taobao.com";
$uname = $_GET['uname']?$_GET['uname']:"亿酷网络科技bjlm123.taobao.com";
$im = imagecreatetruecolor(853, 640);
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,853,640);
imagedestroy($bg);
$black = imagecolorallocate($im, 0, 0, 0);
$text = $name;
$font = '../font/xjl.ttf';
imagettftext($im, 32, 0, 349, 284, $black, $font, $text);

imagettftext($im, 25, 0, 123, 343, $black, $font, $jb);
imagettftext($im, 32, 0, 349, 543, $black, $font, $uname);
$showtime=date("Y.m.d");

imagettftext($im, 30, 0, 529, 574, $black, $font, $showtime);

imagejpeg($im);
imagedestroy($im);
?>