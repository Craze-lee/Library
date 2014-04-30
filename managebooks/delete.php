<?php
require "../commond/link.inc.php";
$bookname=$_POST['bookname'];
$result=mysql_query("select * from Bookinfo where bookname='".$bookname."';",$link);
$rownum=mysql_num_rows($result);
if($rownum==0)
	echo "删除失败，没有此书籍";
else{
$sql="delete from Bookinfo where bookname='".$bookname."';";
mysql_query($sql,$link);
	echo "删除成功";}
?>
