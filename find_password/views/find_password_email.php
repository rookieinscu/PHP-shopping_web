<p>通过邮箱找回密码</p>
<p>Find password by email</p>
<form action="../classes/Find_password_email.php" method="post" >
	<div>
		<input id="login_input_userid" class="login_id" type="text" placeholder="请输入您的学号" name="user_id" required />
		<?php echo"</br>"; ?>
	</div>
	<div>
		<input type="text" placeholder="请输入您的注册邮箱" name="user_email" class="form-control form-underlined" id="user_email" required/>
		<?php echo"</br>"; ?>
	</div>
	<button class="btn btn-lg" id="sub_btn">提交</button>
</form>
<a href="find_password.php">选择其他找回密码的方式</a>
