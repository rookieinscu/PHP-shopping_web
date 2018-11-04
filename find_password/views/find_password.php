<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>邮箱找回</title>
</head>
<body class="login-page">
	<section class="login-contain">
		<header>
			<h1>通过邮箱找回密码</h1>
			<p>Find the password by email</p>
		</header>
		<div class="form-content">
			<ul>
				<li>
					<div class="form-group">
					<form action="../classes/Find_password_email.php" method="post" >
						<input type="text" placeholder="请输入您的学号" name="user_id" class="form-control form-underlined" id="user_id"/>
					</div>
				</li>
				<li>
					<div class="form-group">
                        <input type="text" placeholder="请输入您的注册邮箱" name="user_email" class="form-control form-underlined" id="user_email"/>
					</div>
				</li>
				<li>

					<button class="btn btn-lg" id="sub_btn">提交</button>
					
					</form>
                </p>
                </li>
			</ul>
		</div>
	</section>
</body>
</html>
