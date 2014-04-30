<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<h1>查找图书</h1>
<div>
	<form method="post" action="search_book.php">
		书名：<input type="text" name="name">
		作者：<input type="text" name="author">
		出版社：<input type="text" name="publisher">
			<input type="submit" value="确认">
	</form>
</div>
<?php 
	if(isset($_POST['name']))
		require "search_result.php";

?>
</body>
</html>
