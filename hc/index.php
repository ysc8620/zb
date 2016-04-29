<?php
error_reporting(0);
$from_title = include('../mc.php');
$share_title = '豪车订单生成器';
$name = htmlspecialchars(trim($_GET['name']));
$share_title = ($name)?"【{$name}】的豪车订单":"豪车订单生成器,由{$from_title}提供";
$share_link = "http://{$_SERVER[HTTP_HOST]}".'/hc/?name='.$name.'&id='.$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/> 
<title>豪车订单生成器</title>
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
	<img src="toutu<?=$_GET['id']?>.php?name=<?=$_GET['name']?>" width="100%"/>
</div>
<?php }else{ ?>
<div class="wrapper">
	<img src="icon.jpg" width="50%" style="margin:30px 25% 30px 25%;"/>
	<div class="ui-form">
    	<form action="">
        	<div class="ui-form-item ui-border-b">
            	<label for="#">姓名</label>
            	<input type="text" name="name" placeholder="输入你的姓名"/>
        	</div>
			<div class="ui-form-item ui-border-b">
            	<label>车型</label>
            	<div class="ui-select">
                	<select name="id">
                    	<option value ="1">法拉利</option>
                    	<option value ="2">保时捷</option>
						<option value ="3">奔驰</option>
                	</select>
            	</div>
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