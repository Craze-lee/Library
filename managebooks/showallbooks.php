<h1>图书馆馆藏的所有书籍</h1>
<div>
<?php
require "../commond/link.inc.php";
$sql="select * from Bookmaininfo";
$result=mysql_query($sql,$link);
	echo"<table border=1>";
	echo"<tr>
			<td>书名</td><td>作者</td><td>出版社</td><td>书籍类型</td><td>存放位置</td><td>可借数目</td>
			</tr>";		
		while($row=mysql_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row[bookname]."</td>";
			echo "<td>".$row[author]."</td>";
			echo "<td>".$row[publisher]."</td>";
			echo "<td>".$row[booktype]."</td>";
			echo "<td>".$row[addr]."</td>";
			echo "<td>".$row[sumnum]."</td>";
			echo "</tr>";
		}
	echo"</table>";

echo "<a href='../manager.php'>返回主界面</a>";
?>
</div>
