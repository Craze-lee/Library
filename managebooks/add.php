<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php
include_once "../commond/link.inc.php";
$id=$_POST['id'];
$barcode=$_POST['barcode'];
$bookname=$_POST['bookname'];
$author=$_POST['author'];
$typeid=$_POST['typeid'];
$publisherid=$_POST['publisherid'];
$price=$_POST['price'];
$page=$_POST['page'];
$bookcaseid=$_POST['bookcaseid'];
$sumnum=$_POST['sumnum'];
$remark=$_POST['remark'];
$sql="insert into Bookinfo values(".$id.",".$barcode.",'".$bookname."',".$typeid.",'".$author."',".$publisherid.",".$price.",".$page.",".$bookcaseid.",".$sumnum.",'".$remark."')";
if(mysql_query($sql))
	echo "添加书籍成功";
else
	echo "添加失败，请仔细核实信息";
?>
</body>
</html>
