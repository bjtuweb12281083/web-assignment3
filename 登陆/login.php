<?php
$username = $_POST["name"];
$password = $_POST["password"];
$count = $_COOKIE["count"] ? $_COOKIE["count"] : 0;

$con = mysql_connect("localhost","root","181229");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("myd", $con);

$result = mysql_query("SELECT * FROM Persons
WHERE Name='$username'");
$result1 = mysql_query("SELECT * FROM Persons
WHERE Password='$password'");
if($row = mysql_fetch_array($result))
  {  
  echo "用户 ";
  echo $row['Name'];
  echo "<br />";
  }
else{
	echo "用户不存在，请注册";
}

if($row = mysql_fetch_array($result1))
  {
  echo "登录成功";
  echo "<br />";
  }
else{
  echo "密码错误";
}


?>
<html>
<head><meta charset="utf-8"/>
</head>
<body>
Welcome <? echo $_POST["name"] ?>!<br/>
You have visited the site <? echo $count ?> times.
<a href="logout.php">logout</a>
</body>
</html>
