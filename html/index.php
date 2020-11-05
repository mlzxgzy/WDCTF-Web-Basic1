<?php
if(isset($_POST['user'])&&isset($_POST['password'])){ //获取登陆信息
	if($_POST['user']=='test'&&$_POST['password']=='test'){
	setcookie("user", "test", time()+300);
	print <<<html
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Basic-1</title>
<style>
body{ font-family: "Microsoft Yahei","Trebuchet MS",  Helvetica, sans-serif;  margin:0; padding:0; line-height:24px;  background:#fff;}

.clear{ clear:both; margin:0; padding:0; height:0; border:0; line-height:0; font-size:0;}

ul,ol,input,select,dl,dt,dd,div,table,tr,td{ margin:0; padding:0;}

ul{ list-style:none;}

input,select{ vertical-align:middle;}

img{ vertical-align:top; border:none;}

a{ text-decoration:none;  cursor:pointer; color:#000;  }

h1,h2,h3,h4,h5,h6{ margin:0; padding:0; font-size:12px; font-weight:normal;}

</style>

</head>
<body>
<div style="margin:200px auto; padding:10px; border:7px double #B2B2B2; width:230px; height:auto; overflow:hidden;">
<div style="border-bottom:1px solid #b2b2b2; padding:0 0 10px 0; font-size: 24px;">不合理的验证方式。</div><br>
当前登陆用户：test<br>
所有用户： admin、test<br>
试用账号：test<br>
试用密码：test<br><br>
<form action="index.php" method="post">
Username: <input type="text" name="user" style="width:200px; height:30px; line-height:30px; margin:5px 0;"><br>
Password: <input type="text" name="password" style="width:200px; height:30px; line-height:30px; margin:5px 0;"><br>
<input type="submit" value="登陆" style="border:none; width:80px; height:30px; line-height:30px; text-align:center; margin:10px 0; cursor:pointer;" >
</form>
</div>
</body>
<html>


html;
	exit();
	}
}
if(isset($_COOKIE["user"])){	//管理员
	if($_COOKIE["user"]=="admin"){
		print <<<html
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Basic-1</title>
<style>
body{ font-family: "Microsoft Yahei","Trebuchet MS",  Helvetica, sans-serif;  margin:0; padding:0; line-height:24px;  background:#fff;}

.clear{ clear:both; margin:0; padding:0; height:0; border:0; line-height:0; font-size:0;}

ul,ol,input,select,dl,dt,dd,div,table,tr,td{ margin:0; padding:0;}

ul{ list-style:none;}

input,select{ vertical-align:middle;}

img{ vertical-align:top; border:none;}

a{ text-decoration:none;  cursor:pointer; color:#000;  }

h1,h2,h3,h4,h5,h6{ margin:0; padding:0; font-size:12px; font-weight:normal;}

</style>

</head>
<body>
<div style="margin:200px auto; padding:10px; border:7px double #B2B2B2; width:200px; height:auto;">
当前登陆用户：admin<br><br>
Key:{put_flag_here}
</div>
</body>
<html>


html;

	}else{	//非管理员
		print <<<html
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Basic-1</title>
<style>
body{ font-family: "Microsoft Yahei","Trebuchet MS",  Helvetica, sans-serif;  margin:0; padding:0; line-height:24px;  background:#fff;}

.clear{ clear:both; margin:0; padding:0; height:0; border:0; line-height:0; font-size:0;}

ul,ol,input,select,dl,dt,dd,div,table,tr,td{ margin:0; padding:0;}

ul{ list-style:none;}

input,select{ vertical-align:middle;}

img{ vertical-align:top; border:none;}

a{ text-decoration:none;  cursor:pointer; color:#000;  }

h1,h2,h3,h4,h5,h6{ margin:0; padding:0; font-size:12px; font-weight:normal;}

</style>

</head>
<body>
<div style="margin:200px auto; padding:10px; border:7px double #B2B2B2; width:230px; height:auto; overflow:hidden;">
<div style="border-bottom:1px solid #b2b2b2; padding:0 0 10px 0; font-size: 24px;">不合理的验证方式。</div><br>
当前登陆用户：{$_COOKIE["user"]}<br>
所有用户： admin、test<br>
试用账号：test<br>
试用密码：test<br><br>
<form action="index.php" method="post">
Username: <input type="text" name="user" style="width:200px; height:30px; line-height:30px; margin:5px 0;"><br>
Password: <input type="text" name="password" style="width:200px; height:30px; line-height:30px; margin:5px 0;"><br>
<input type="submit" value="登陆" style="border:none; width:80px; height:30px; line-height:30px; text-align:center; margin:10px 0; cursor:pointer;" >
</form>
</div>
</body>
<html>

html;
	}
	
}else{	//未登陆
	print <<<html
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Basic-1</title>
<style>
body{ font-family: "Microsoft Yahei","Trebuchet MS",  Helvetica, sans-serif;  margin:0; padding:0; line-height:24px;  background:#fff;}

.clear{ clear:both; margin:0; padding:0; height:0; border:0; line-height:0; font-size:0;}

ul,ol,input,select,dl,dt,dd,div,table,tr,td{ margin:0; padding:0;}

ul{ list-style:none;}

input,select{ vertical-align:middle;}

img{ vertical-align:top; border:none;}

a{ text-decoration:none;  cursor:pointer; color:#000;  }

h1,h2,h3,h4,h5,h6{ margin:0; padding:0; font-size:12px; font-weight:normal;}

</style>

</head>
<body>
<div style="margin:200px auto; padding:10px; border:7px double #B2B2B2; width:230px; height:auto; overflow:hidden;">
<div style="border-bottom:1px solid #b2b2b2; padding:0 0 10px 0; font-size: 24px;">不合理的验证方式。</div><br>
所有用户： admin、test<br>
试用账号：test<br>
试用密码：test<br><br>
<form action="index.php" method="post">
Username: <input type="text" name="user" style="width:200px; height:30px; line-height:30px; margin:5px 0;"><br>
Password: <input type="text" name="password" style="width:200px; height:30px; line-height:30px; margin:5px 0;"><br>
<input type="submit" value="登陆" style="border:none; width:80px; height:30px; line-height:30px; text-align:center; margin:10px 0; cursor:pointer;" >
</form>
</div>
</body>
<html>


html;
}
?>
