<?php
session_start();
$_SESSION['reader'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php  require "commond/header.php"?>

	<h1>读者<span><font size='5pt' color="red"> <?php echo $_SESSION['reader']; ?></font></span></h1>
	<table>
		<tr>
			<td><a href="search_book.php">查找图书</a></td>
			<td><a href="reader_opr/borrowbooks.php">借阅图书</a></td>
			<td><a href="reader_opr/returnbooks.php">归还图书</a></td>
			<td><a href="reader_opr/showborrowbooks.php">查看已借书目</a></td>
			<td><a href="reader_opr/showinfo.php">查看个人信息</a></td>
			<td><a href="">修改个人信息</a></td>
		</tr>
	</table>
<br/><br/>
<a href='index.php'><button>退出登陆</button></a>

</body>
</html>
