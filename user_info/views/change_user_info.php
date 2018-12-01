<p>hello<?php session_start(); echo $_SESSION['user_nickname']; ?> ，您正在修改个人信息<p>
<form method="post" action="../classes/Change_user_info.php" name="changeform">
<p>用户ID<br/>
<?php echo $_SESSION['user_id']; echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp（用户ID不可更改）";?></p>

<p><a href = "../views/change_user_img.php">更换头像点击这里</a></p>
<p>姓名（建议为真实姓名，方便买卖双方沟通）<br/>
<input id=user_name" class="change_input" type="text" name="user_name" pattern=".{2,}" value="<?php echo $_SESSION['user_name']; ?>" required /></p>

<p>昵称<br/>
<input id="user_nickname" class="change_input" type="text" name="user_nickname" pattern=".{2,15}" value="<?php echo $_SESSION['user_nickname']; ?>" required /></p>

<p>手机号码<br/>
<input id="user_tel" class="change_input" type="text" name="user_tel" pattern="[0-9]{11}" value="<?php echo $_SESSION['user_tel']; ?>" required/></p>

<p>电子邮箱<br/>
<input id="user_email" class="change_input" type="text" name="user_email" pattern=".{6,}" value="<?php echo $_SESSION['user_email']; ?>" required /></p>

<p>所在校区<br/>
<select id="user_location" class="change_input" type="text" name="user_location" required>
<?php 
	if($_SESSION['user_location'] == "望江校区"){
		echo "</option><option>望江校区</option><option>华西校区</option><option>江安校区</option>";
	}
	if($_SESSION['user_location'] == "华西校区"){
		echo "</option><option>华西校区</option><option>望江校区</option><option>江安校区</option>";
	}
	if($_SESSION['user_location'] == "江安校区"){
		echo "</option><option>江安校区</option><option>望江校区</option><option>华西校区</option>";
	}
?>
</select></p>

<input type="submit"  name="change_info" value="确定" />
</form>  
</div>
<a href="show_user_info.php">放弃</a>
</div>
</div>