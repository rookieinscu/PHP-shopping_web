<header>
	<h1>重置密码</h1>
	<p>Reset the password</p>
</header>
<?php
	$user_email=$_COOKIE['user_email'];
	$token=$_GET['token'];
	$user_id=$_COOKIE['user_id'];
	setcookie('token',$token,time()+900);
?>
		
<div class="form-content">
	<ul>
		<form action=../classes/Reset_password_email.php" method="post" >
			<li>
				<div class="form-group">
					<label class="control-label">新密码：</label>
						<input type="password" placeholder="新密码..." name="user_password" class="form-control form-underlined" id="user_password" required/>
				</div>
			</li>
			<li>
				<div class="form-group">
					<label class="control-label">确认新密码：</label>
						<input type="password" placeholder="确认新密码..." name="user_password_repeat" class="form-control form-underlined" id="user_password_repeat" required/>
				</div>
			</li>
			<li>
				<p align="center">
				<button class="btn btn-lg" id="sub_btn">提交</button>
				</p>
			</li>
		</form>
	</ul>
</div>