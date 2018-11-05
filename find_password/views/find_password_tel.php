<p>通过手机号找回密码</p>
<p>Find password by microphone</p>
<form action="../classes/Find_password_tel.php" method="post" >
	<div>
		<input id="login_input_userid" class="login_id" type="text" placeholder="请输入您的学号" name="user_id" required />
		<?php echo"</br>"; ?>
	</div>
	<div>
		<input id="login_input_usertel" class="login_tel" type="text" placeholder="请输入您的手机号" name="user_tel" required />
		<?php echo"</br>"; ?>
	</div>
	<button class="btn btn-lg" id="sub_btn">发送验证码</button>
</form>
<a href="find_password.php">选择其他找回密码的方式</a>
