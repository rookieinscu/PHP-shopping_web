<!-- register form -->
<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>注册</title>
<link rel="stylesheet" type="text/css" href="css/register-style.css">
</head>
<body>	
	<style>
	background-image: url(../imgs/bg_img2.jpg);
	background-size: 100%;
	opacity: 1;
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 700px;
	overflow: hidden;
	</style>
<div class="htmleaf-container">
	<div class="wrapper">
		<div class="container">
			<h1>注册</h1>
				<form method="post" action="register.php" name="registerform">

    <!-- the user name input field uses a HTML5 pattern check -->
    <input id="login_input_userid" class="login_input" type="text" pattern="[0-9]{13}" name="user_id" placeholder="学号" required />

    <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" placeholder="密码" required autocomplete="off" />

    <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" placeholder="确认密码" required autocomplete="off" />

    <input id="login_input_username" class="login_input" type="text" name="user_name" pattern=".{2,}" placeholder="真实姓名" required />

    <input id="login_input_nickname" class="login_input" type="text" name="user_nickname" pattern=".{2,15}" placeholder="昵称（2-15字符）" required />

   <input id="login_input_usertel" class="login_input" type="text" name="user_tel" pattern="[0-9]{11}" placeholder="手机号码" />
					
<!--	<input id="login_input_userwechat" class="login_input" type="text" name="user_wechat"  placeholder="微信" />
	
	<input id="login_input_usertel" class="login_input" type="text" name="user_tel" pattern="[0-9]." placeholder="手机号码" />-->
					
	 <input id="login_input_email" class="login_input" type="text" name="user_email" pattern=".{6,}" placeholder="电子邮箱" required />

	<select id="login_input_userlocation" class="login_input" type="text" name="user_location" required>
		<option>请选择您的校区</option><option>望江校区</option><option>华西校区</option><option>江安校区</option>
	</select>
<!--	<button type="submit" id="register-button">注册账号</button>-->
	<input type="submit"  name="register" value="立即注册" />
	</form>  
<a href="index_yes.php"></br>返回登陆</a>
		</div>
	</div>
</div>
<script src="js/register-jquery-2.1.1.min.js" type="text/javascript"></script>

<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>