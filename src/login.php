
<!DOCTYPE html>
<html>
<head>
	<title>注入</title>
</head>
<body>
<h1>Welcome to TWLY!</h1>
<form method="post">
		<fieldset>
			<legend>用户登录</legend>
			<ul>
				<li>
					<label>用户名:</label>
					<input type="text" name="username">
				</li>
				<li>
					<label>密   码:</label>
					<input type="password" name="password">
				</li>
				<li>
					<label> </label>
					<input type="submit" name="login" value="登录">
				</li>
			</ul>
		</fieldset>
	</form>

<pre>
	<?php 
	header('location:login.php');
	 
	// 处理用户登录信息
	if (isset($_POST['login'])) {
		# 接收用户的登录信息
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		// 判断提交的登录信息
		if (($username == '') || ($password == '')) {
			// 若为空,视为未填写,提示错误,并3秒后返回登录界面
			header('refresh:3; url=login.php');
			echo "用户名或密码不能为空,系统将在3秒后跳转到登录界面,请重新填写登录信息!";
			exit;
		} elseif (($username != 'username') || ($password != 'password')) {
			# 用户名或密码错误,同空的处理方式
			header('refresh:3; url=login.php');
			echo "用户名或密码错误,系统将在3秒后跳转到登录界面,请重新填写登录信息!";
			exit;
		} elseif (($username = 'zhazhahui') && ($password = 'zhazhahui')) {
			
			// 处理完附加项后跳转到登录成功的首页
			header('location:index.php');
		}
	}
 ?>
</pre>
</body>
</html>
