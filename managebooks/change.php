<?php
session_start();
$_SESSION['bookname']=$_POST['changebookname'];
$success=0;

require "../commond/link.inc.php";
$sql="select * from Bookmaininfo where bookname='". $_SESSION['bookname']."';";
$result=mysql_query($sql,$link);
$rownum=mysql_num_rows($result);
if($rownum==0)
{
	echo "没有此书籍";
	$success=0;
}
else
{
	$success=1;
$row=mysql_fetch_array($result);
	echo"<table border=1>";
	echo"<tr>
			<td>书名</td><td>作者</td><td>出版社</td><td>书籍类型</td><td>存放位置</td><td>可借数目</td>
			</tr>";		
			echo "<tr>";
			echo "<td>".$row[bookname]."</td>";
			echo "<td>".$row[author]."</td>";
			echo "<td>".$row[publisher]."</td>";
			echo "<td>".$row[booktype]."</td>";
			echo "<td>".$row[addr]."</td>";
			echo "<td>".$row[sumnum]."</td>";
	echo "</tr>";
	echo"</table>";
}
?>
