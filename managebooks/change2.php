<?php
session_start();
$select=$_POST['select'];
require "../commond/link.inc.php";
$info=$_POST['info'];
	switch($select){
	case 1:$temp="bookname='".$info."'";break;
	case 2:$temp="author='".$info."'";break;
	case 3:$temp="publisher='".$info."'";break;
	case 4:$temp="typeid=".$info;break;
	case 5:$temp="bookcaseid=".$info;break;
	}
$sql="update Bookinfo set ".$temp." where bookname='".$_SESSION['bookname']."';";
if(mysql_query($sql,$link)){
	echo "更新成功";
	require "showallbooks.php";
}
?>

