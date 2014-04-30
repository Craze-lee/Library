<?php
session_start();
$_SESSION['reader'];

$_SESSION['bookname']=$_POST['bookname'];
$manager=$_POST['manager'];
$borrowTime=$_POST['year'].$_POST['month'].$_POST['day'];//借阅时间
//处理归还时间
if($_POST['month']<=10){
	$backmonth=$_POST['month']+2;
	$backyear=$_POST['year'];
}
else{
	$backmonth=$_POST['month']-10;
	$backyear=$_POST['year']+1;
}
if($backmonth<10)
	$backmonth='0'.$backmonth;
$backTime=$backyear.$backmonth.$_POST['day'];
require "../commond/link.inc.php";

$select_bookid="select * from Bookinfo where bookname='".$_SESSION['bookname']."';";//获得图书id
$result=mysql_query($select_bookid,$link);
$row=mysql_fetch_array($result);
$bookid=$row[id];
//剩余可借数目
$booksum=$row[sumnum];
if($booksum<=0)//判断是否有可借书
	echo "所有书均已外借";
else
{
	$select_readerid="select id from Readerinfo where name='".$_SESSION['reader']."';";//获得用户id
	$readerid=mysql_fetch_array(mysql_query($select_readerid,$link))[id];

	$select_managerid="select id from Managerinfo where name='".$manager."';";//获得管理员id
	$managerid=mysql_fetch_array(mysql_query($select_managerid,$link))[id];
		//插入之前判断同一个人是否借同一本书多次
	if(mysql_num_rows(mysql_query("select * from Borrowinfo where bookid=$bookid and readerid=$readerid and ifback=0"))==1)
		echo "同一个人不能借同一本书多次";
	else
	{
		$insert_Borrowinfo="insert into Borrowinfo(bookid,readerid,managerid,borrowTime,backTime,ifback) values(".$bookid.",".$readerid.",".$managerid.",'".$borrowTime."','".$backTime."',0);";
		//还需更改bookinfo信息
		$booksum--;
		$update_Bookinfo="update Bookinfo set sumnum=$booksum where id=$bookid;";
		if(mysql_query($insert_Borrowinfo) and mysql_query($update_Bookinfo))
			echo "借阅成功并归档";
	}
}
?>
<p>
<a href="showborrowbooks.php">查看已借书目</a>
</p>
