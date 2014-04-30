
<h1>
用户注册
</h1>
<form action="register.php" method="post">
	登陆ID： <input type="text" name="id"><br/>
	用户名：	<input type="text" name="name"><br/>
	性别：<input type="text" name="sex"><br/>
	用户类型：<input type="radio" checked>读者<br/>
	职业：<input type="number" name="vocation"><br/>
	电话：<input type="text" name="tel"><br/>
	Email:<input type="email" name="email"><br/>
	有效证件：<input type="text" name="papetype"><br/>	
	证件号码：<input type="text" name="papeNo"><br/>
	密码：<input type="password" name="password"><br/>
	<input type="submit" value="注册"><input type="reset" value="重置"><br/>
</form>

<?php
	require "commond/link.inc.php";
if(isset($_POST['id']))
{	
	$id=$_POST['id'];
	$rows=mysql_num_rows(mysql_query("select * from Login_usr where id=$id",$link));
	if($rows==1)
		echo "此用户已注册";
	else
	{
	$name=$_POST['name'];
	$sex=$_POST['sex'];
	$typeid=0;
	$vocation=$_POST['vocation'];
	$tel=$_POST['tel'];
	$email=$_POST['email'];
	$papetype=$_POST['papetype'];
	$papeNo=$_POST['papeNo'];
	$passsword=$_POST['password'];
	$sql="insert into Readerinfo(id,name,sex,typeid,vocation,tel,email,papetype,papeNo,password) values($id,'".$name."','".$sex."',$typeid,'".$vocation."','".$tel."','".$email."','".$papetype."','".$papeNo."','".$passsword."');";
	if(mysql_query($sql))
	{	
		echo "注册成功";
		echo "<meta http-equiv='refresh'content='0;url=index.php'>";	
	}
	else
		echo "注册失败，请输入有效信息";
		}
}
else
	echo "请输入有效信息";
?>
