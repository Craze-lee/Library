<?php
session_start();
$_SESSION['reader'];

$_SESSION['bookname']=$_POST['bookname'];
$manager=$_POST['manager'];
$backTime=$_POST['year'].$_POST['month'].$_POST['day'];//归还时间

require "../commond/link.inc.php";
$select_bookid="select * from Bookinfo where bookname='".$_SESSION['bookname']."';";//获得图书id
$result=mysql_query($select_bookid,$link);
$row=mysql_fetch_array($result);
$bookid=$row[id];
$booksum=$row[sumnum];    //当前数目
$booksum++;

	$select_readerid="select id from Readerinfo where name='".$_SESSION['reader']."';";//获得用户id
	$readerid=mysql_fetch_array(mysql_query($select_readerid,$link))[id];

	$select_managerid="select id from Managerinfo where name='".$manager."';";//获得管理员id
	$managerid=mysql_fetch_array(mysql_query($select_managerid,$link))[id];

	$insert_Returninfo="insert into Returninfo(bookid,readerid,managerid,backTime) values(".$bookid.",".$readerid.",".$managerid.",'".$backTime."');";
	$update_Bookinfo="update Bookinfo set sumnum=$booksum where id=$bookid;";
	$update_Borrowinfo="update Borrowinfo set ifback=1 where bookid=$bookid;";
	//在Borrowinfo表中检验是否归还
	$result=mysql_query("select * from Borrowinfo where bookid=$bookid and readerid=$readerid and ifback=0;");
	$rows=mysql_num_rows($result);
	if($rows==0){
	echo "操作失败，请核实信息";
	}
	else{
		if(mysql_query($insert_Returninfo) and mysql_query($update_Borrowinfo) and mysql_query($update_Bookinfo))
			echo "归还成功";	
	}
?>
<p>
<a href="showborrowbooks.php">查看当前借阅情况</a>
</p>
