﻿<?php
error_reporting(0);
$share_title = '喝酒认怂书生成器';
$name = htmlspecialchars(trim($_GET['name']));
$namea = htmlspecialchars(trim($_GET['namea']));
$share_title = ($name && $namea)?"【{$name}】因喝酒喝不过向【{$namea}】认怂":'喝酒认怂书生成器,由仁怀早晚报提供';
$share_link = "http://{$_SERVER[HTTP_HOST]}".'/hjrss/?name='.$name.'&namea='.$namea;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/> 
<title>喝酒认怂书生成器-<?php echo $share_title;?></title>
<link type="text/css" rel="stylesheet" href="frozen.css" />
<style>
body{color:#a6a6a6; font-size:16px; padding-top:45px;}
body b{color: #00A5E3}
body>a{display:none;}
h2.title {line-height: 45px;font-size: 20px;color: #FF0000;position: fixed;top: 0;height: 45px;-webkit-box-sizing: border-box;width: 100%;z-index: 99;background-color: #f8f9fa;text-align:center;}
.pr5{padding-bottom:45px;}
.pr5 p{margin-bottom:5px;}
.ui-list{background-color:#f8f9fa;padding-bottom:5px}
#mcover{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.7);display:none;z-index:20000;}
#mcover img{position:fixed;right: 18px;top:5px;width:260px;height:180px;z-index:20001;}
</style>
</head>
<body ontouchstart="">
<?php if($_GET['name']){?>
	<header class="ui-header ui-header-positive ui-border-b">
	<h1>长按下方图片点选保存图片</h1>
</header>
<div class="wrapper">
	<img src="rs.php?name=<?php echo$name;?>&namea=<?php echo $namea;?>" width="100%"/>
</div>
<?php }else{ ?>
<div class="wrapper">
	<img src="icon.jpg" width="50%" style="margin:30px 25% 30px 25%;"/>
	<div class="ui-form">
    	<form action="">
        	<div class="ui-form-item ui-border-b">
            	<label for="#">本人</label>
            	<input type="text" name="name" placeholder="输入本人姓名"/>
        	</div>
<div class="ui-form-item ui-border-b">
            	<label for="#">认怂对象</label>
            	<input type="text" name="namea" placeholder="输入认怂对象姓名"/>
        	</div>
			<div class="ui-btn-wrap">
    			<button class="ui-btn-lg ui-btn-danger">确定</button>
			</div>
    	</form>
	</div>

</div>
<style>
.follow{font-size:20px;line-height:30px;color:#fff;text-align:center;padding-top:30%;z-index:2000;position:fixed;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.9);display:none;}
.follow span{font-size:40px;position:absolute;top:10px;left:10px;}
.follow img{width:180px;margin-top:10px;}
</style>

<div style="display:none;"><?php include('../tongji.php');?></div>
<?php } ?>
<?php include('../share.php');?>
</body>
</html>