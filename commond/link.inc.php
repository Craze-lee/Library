<?php
	$db_host="localhost";
	$db_user="root";
	$db_pass="liyong";
	$db_name="ly_Library";
	$link=mysql_connect($db_host,$db_user,$db_pass);
	mysql_select_db($db_name,$link);
	mysql_query("set names utf8");

?>

