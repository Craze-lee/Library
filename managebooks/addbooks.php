<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>添加图书</h1>
	<form action="addbooks.php" method="post">
	*图书ID：<input type="text" name="id"><br/>
	*图书条形码:<input type="text" name="barcode"><br/>
	*图书名称：<input type="text" name="bookname"><br/>
	*  作 者  ：<input type="text" name="author"><br/>
	*图书类型：<input type="radio" name="typeid" value="1" checked>中文图书
				<input type="radio" name="typeid" value="0">外文图书<br/>
	* 出 版 社：<input type="radio" name="publisherid" value="0" >清华大学
		<input type="radio" name="publisherid" value="1" checked>广东工业大学
		<input type="radio" name="publisherid" value="2" >人民邮电
		<input type="radio" name="publisherid" value="3" >高等教育<br/>
	价    格：<input type="text" name="price"><br/>
	页码：<input type="text" name="page"><br/>
	*存放楼层：<input type="radio" name="bookcaseid" value="1"checked>第一层
				<input type="radio" name="bookcaseid" value="2">第二层
				<input type="radio" name="bookcaseid" value="3">第三层
				<input type="radio" name="bookcaseid" value="4">第四层<br/>
	*添加数量：<input type="text" name="sumnum" ><br/>
	备注：<input type="text" name="remark"><br/>
		<input type="submit" value="添加">
	</form>
<?php
if(isset($_POST['id']))   //判断是否有输入
{	
	require "add.php";
	echo "<a href='showallbooks.php'>查看所有书目</a>";
}
?>
</body>
</html>
