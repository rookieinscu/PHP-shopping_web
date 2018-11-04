<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>四川大学线上图书交易平台</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content=""
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
<!--	<link href="http://maxcdn.bootstrapcdn.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="http://maxcdn.bootstrapcdn.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">-->
	<!-- //web-fonts -->
</head>

<body>
	<!-- bg effect -->
	<style>
#pic{
background-image:url(imgs/bg_img.gif);
background-size: 100%;
opacity: 0.9;
  position: absolute;
  top: 0%;
  left: 0;
  width: 100%;
  height: 623px;
  margin-top: 0px;
  overflow: hidden;
</style>
	<div id="pic">
		<div>
	<!-- //bg effect -->
	<!-- title -->
	<h1><font face="华文行楷">四川大学线上图书交易平台</font></h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form method="post" action="index.php" name="loginform">
			<h2>登录
			</h2>
			<div class="form-style-agile">

				  <input id="login_input_userid" class="login_input" type="text" placeholder="请输入姓名、学号或手机号" name="user_input" required />
			</div>
			<div class="form-style-agile">

				<input id="login_input_password" class="login_input" type="password" name="user_password" placeholder="请输入密码" autocomplete="off" required />
			</div>
		<!--	<div class="form-style-agile">
				<input id="login_input_verification_code" class="login_input" type="text" name="verification_code" placeholder="请输入验证码" autocomplete="off" required />
			</div>-->
			<input type="submit"  name="login" value="登录" />
			<a class="register" href="register.php">还没有账户？点此注册</a>
			<a class="changepassword" href="../../SCU/find_password/views/find_password.php"></br>忘记密码？</a>
		</form>

	</div>		
	<!-- //content -->


	<!-- copyright -->
	
	<!-- //copyright -->

	<!-- Jquery -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<!-- //Jquery -->

	<!-- effect js -->
	<script src="js/canva_moving_effect.js"></script>
	<!-- //effect js -->

</body>

</html>