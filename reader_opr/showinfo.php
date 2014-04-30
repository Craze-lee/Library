<?php
session_start();
$_SESSION['reader'];

echo "<h1>个人详细信息</h1>";
require "../commond/link.inc.php";

$readername=$_SESSION['reader'];
$sql="select * from Readerinfo where name='".$readername."';";

$result=mysql_query($sql,$link);
$row=mysql_fetch_array($result);
echo "<table border='1'>";
echo "<tr>";
echo "<td>读者id</td><td>姓名</td><td>性别</td><td>职业</td><td>电话</td><td>邮件</td><td>证件类型</td><td>证件号码</td><td>备注</td>";
echo "</tr>";
	echo "<tr>";
	echo  "<td>".$row[id]."</td>";
	echo  "<td>".$row[name]."</td>";
	echo  "<td>".$row[sex]."</td>";
	echo  "<td>".$row[vocation]."</td>";
	echo  "<td>".$row[tel]."</td>";
	echo  "<td>".$row[email]."</td>";
	echo  "<td>".$row[papetype]."</td>";
	echo  "<td>".$row[papeNo]."</td>";
	echo  "<td>".$row[remark]."</td>";
	echo "</tr>";
	
echo "</table>";

?>
