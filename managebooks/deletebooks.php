<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>删除图书</h1>
	<form action="deletebooks.php" method="post">
		输入要删除图书的书名 : <input type="text" name="bookname">
		<input type="submit" value="删除">
	</form>
	<?php
		if(isset($_POST['bookname']))
			require "delete.php";
	?>
</body>
</html>
