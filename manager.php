<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php  require "commond/header.php"?>

<h1>管理员<span><font size='5pt' color="red"> <?php echo $_SESSION['manager']; ?></font></span></h1>
	<table >	
	<tr><td><strong>管理图书</strong></td></tr>
	<tr>
		<td><a href="managebooks/addbooks.php">添加图书</a></td>
		<td><a href="managebooks/deletebooks.php">删除图书</a></td>
		<td><a href="managebooks/changebooksinfo.php">修改图书</a></td>
		<td><a href="managebooks/showallbooks.php">查看图书</a></td>
		<td><a href="search_book.php">查找图书</a></td>

	</tr>
	<tr><td><br/></td></tr>
	<tr><td><strong>管理用户</strong></td></tr>
	<tr>
		<td><a href="">修改读者信息</a></td>
		<td><a href="">删除读者信息</a></td>
		<td><a href="managereaders/checkreaderinfo.php">查看用户个人信息</a></td>
		<td><a href="">查看读者借阅信息</a></td>
	</tr>
	<tr><td><br/></td></tr>
	<tr><td><strong>管理个人信息</strong></td></tr>
	<tr>
		<td><a href="">查看个人信息</a></td>
		<td><a href="">修改个人信息</a></td>
	<tr>
</table>
<br/><br/>

<a href='index.php'><button>退出登陆</button></a>

</body>
</html>
