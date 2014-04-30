<h2>查看用户信息</h2>
<div>
<form action="checkreaderinfo.php" method="post">
输入要查看的用户名<input type="text" name="readername">
	<input type="submit" name="submit"value="确认">
<br/><br/>
<input type="submit" name="submit" value="查看所有读者信息">
<input type="submit" name="submit" value="查看所有管理员信息">
</form>
</div>
<div>
<?php
if(isset($_POST['readername']))
	require "checkreader.php";
?>

</div>
