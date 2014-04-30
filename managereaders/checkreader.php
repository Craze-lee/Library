<?php
require "../commond/link.inc.php";
$select=$_POST['submit'];
$typeid=0;
if($select=="确认")
{
	$readername=$_POST['readername'];
	$sql="select * from Readerinfo where name='".$readername."';";
}
elseif($select=="查看所有读者信息")
{
	$sql="select * from Readerinfo;";
}
else
{
	$sql="select * from Managerinfo;";
	$typeid=1;

}
$result=mysql_query($sql,$link);
$num=mysql_num_rows($result);
if($num==0)
{
	echo "没有该用户";
}
else{
	echo "<table border='1'>";
	if($typeid==0)
	{
		echo "<tr>";
		echo "<td>读者id</td><td>姓名</td><td>性别</td><td>职业</td><td>电话</td><td>邮件</td><td>证件类型</td><td>证件号码</td><td>备注</td>";
		echo "</tr>";
		while($row=mysql_fetch_array($result))
		{
			echo  "<tr>";
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
		}
	}//if
	else
	{
		echo "<tr>";
		echo "<td>管理员id</td><td>姓名</td><td>性别</td><td>电话</td><td>邮件</td><td>备注</td>";
		echo "</tr>";
		while($row=mysql_fetch_array($result))
		{
			echo  "<tr>";
			echo  "<td>".$row[id]."</td>";
			echo  "<td>".$row[name]."</td>";
			echo  "<td>".$row[sex]."</td>";
			echo  "<td>".$row[tel]."</td>";
			echo  "<td>".$row[email]."</td>";
			echo  "<td>".$row[remark]."</td>";
			echo "</tr>";
		}
	}
echo "</table>";
}
?>
