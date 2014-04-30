<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php  require "commond/header.php"?>
	<div>
		<form action="login.php" method="post">
		    用户 ID ：<input name="loginid" type='text' id='id'><br>
			密码PW：<input name="loginpw" type='password' id="pw">
			<input type="submit" value="登陆">
		</form>
	</div>
	<span><a href='search_book.php'>游客登陆</a></span>
	<span><a href='register.php'>用户注册</a></span>
</body>
</html>
