<?php
session_start();
$_SESSION['reader'];
echo "<h1>已借书目</h1>";
require "../commond/link.inc.php";
	$sql="select * from Borrowinfo B,Readerinfo R ,Bookinfo Bo
			where R.name='".$_SESSION['reader']."' and B.ifback=0 and B.readerid=R.id and B.bookid=Bo.id;";//连接查找
	$result=mysql_query($sql,$link);	
	$num_rows=mysql_num_rows($result);
	if($num_rows==0)
	{
		echo "没有在借书目";
	}
	else{
	echo"<table border=1>";
	echo"<tr>
			<td>书名</td><td>借阅日期</td><td>应还日期</td>
			</tr>";		
		while($row=mysql_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row[bookname]."</td>";
			echo "<td>".$row[borrowTime]."</td>";
			echo "<td>".$row[backTime]."</td>";
			echo "</tr>";
		}
	echo"</table>";
	}

?>
<a href="../reader.php">返回</a>
