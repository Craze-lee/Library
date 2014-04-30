
<div>
	<?php
include_once "commond/link.inc.php";
    $name=$_POST['name'];
	$author=$_POST['author'];
	$publisher=$_POST['publisher'];
//	if(isset($name) and !isset( $author))
		$sql="select * from Bookmaininfo where bookname like '%".$name."%' and author like '%".$author."%' and publisher like '%".$publisher."%' ;";//正则查找 非常出色
	$result=mysql_query($sql,$link);	
	$num_rows=mysql_num_rows($result);
	if($num_rows==0)
	{
		echo "没有找到相关书籍";
	}
	else{
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
	}
?>
</div>
