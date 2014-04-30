<?php
session_start();
$_SESSION['bookname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>修改图书信息</h1>
	<form action="changebooksinfo.php" method="post">
		要修改的书籍名称：<input type="text" name="changebookname"> <input type="submit" value="查询">
<?php
	if(isset($_POST['changebookname']))
	{	
		require "change.php";
		if($success==1)
			require "change2form.php";
	}		
?>
	</body>
</html>
