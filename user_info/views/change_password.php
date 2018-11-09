<?php
session_start();
echo($_SESSION['user_nickname']);
?>，您正在修改密码<br></p>
<form method="post" action="../classes/Change_password.php">
	<p>请输入原密码<br>
	<input id="user_password" class="change_input" type="password" name="user_password" placeholder="请输入原密码" required /></p>
	<p>请输入新密码（不得少于6位）<br>
	<input id="user_password_new" class="change_input" type="password" name="user_password_new" pattern=".{6,}" placeholder="请输入新密码" required /></p>
	<p>请再次输入新密码<br>
	<input id="user_password_repeat" class="change_input" type="password" name="user_password_repeat" pattern=".{6,}" placeholder="请再次输入新密码" required /></p>
	<input type="submit"  name="register" value="确定" />
</form>
<a href="show_user_info.php">放弃修改</a>
<?php
// show potential errors / feedback (from registration object)
if (isset($changeuserinfo)) {
    if ($changeuserinfo->errors) {
        foreach ($changeuserinfo->errors as $error) {
            echo $error;
        }
    }
    if ($changeuserinfo->messages) {
        foreach ($changeuserinfo->messages as $message) {
            echo $message;
        }
    }
}
?>