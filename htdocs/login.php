<?php
	$userid = $_GET["userid"];//get是从服务器上获取数据，post是向服务器传送和接受数据
	$userpwd = $_GET["userpwd"];
	echo $userid . $userpwd;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="login.php" method="get">
		<input name="userid" type="text" id="txtUserid" />
		<input name="userpwd" type="text" id="txtUserPwd" />
		<input type="submit" value="登录" />
	</form>
</body>
</html>