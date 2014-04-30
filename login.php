<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf8">
	<title></title>
</head>
<body>
<?php require "commond/link.inc.php"?>
	<div>
<?php
	$loginid= $_POST['loginid'];
	$loginpw= $_POST['loginpw'];
	if($loginpw){
		$sql="select * from Login_usr where id=$loginid and password='".$loginpw."';";
		$result=mysql_query($sql,$link);
		$row=mysql_fetch_array($result);
		if(!$row)
			echo "用户名或密码错误";
		else{
			if($row["usrtype"]=="读者")
			{
				$_SESSION['reader']=$row["name"];
				echo "WELCOME!";
				echo"<meta http-equiv='refresh'content='0;url=reader.php'>";
			}
			else
			{
				$_SESSION['manager']=$row["name"];
				echo "WELCOME!";
					echo"<meta http-equiv='refresh'content='0;url=manager.php'>";
			}
		}
	}
	else
		echo "输入错误";
?>		
	</div>
</body>
</html>
