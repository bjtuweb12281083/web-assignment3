<html>
<head><meta charset="utf-8"/>
</head>
<body>
  <?php
    if (!$_REQUEST["hidden_token"]) {
      ?>
  <form action="login.php" method="post">
  <p align="center">
    用户名 : <input type="text" name="name"/>
    密码 : <input type="password" name="password"/>
  </p> 
  <p align="center">
    <input type="submit"name="Submit"value="登录">&nbsp;
	<input type="reset"name="reset"value="重置">&nbsp;
	<a class="a" href="register.php">注册</a>&nbsp;
	<a class="a" href="insert.php">查看注册记录</a>
	</p>
  </form>

<?php } else { ?>
  You already logged in. <a href="logout.php">logout</a>
<?php } ?>
</body>
</html>
