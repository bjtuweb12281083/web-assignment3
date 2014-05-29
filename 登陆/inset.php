<?php
$con = mysql_connect("localhost","root","181229");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("myd", $con);

$sql="INSERT INTO Persons (Name,Password)
VALUES
('$_POST[name]','$_POST[password]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($con)
?>
<?php
$con = mysql_connect("localhost","root","181229");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("myd", $con);
$result = mysql_query("SELECT * FROM Persons");

echo "<div>
<p>注册历史</p>
<p>Name&nbsp;&nbsp;&nbsp; </p>
</div>";

while($row = mysql_fetch_array($result))
  {
  echo "<p>";
  echo "<p>" . $row['Name'] . "</p>";
  echo "</p>";
  }
echo "</div>";
mysql_close($con);
?>
<html>
<head>
  <meta charset="utf-8"/>
</head>
<body>
	<a href="index.php">返回</a>
</body>
</html>