<p>hello<?php session_start(); echo $_SESSION['user_nickname']; ?> ，您正在修改您的收货人信息<p>
<form method="post" action="../classes/Change_buyer_info.php" name="changeform">
<p>收货人姓名</br>
<input type="text" name="buyer_name" pattern=".{2,}" value="<?php echo $_POST['buyer_name']; ?>" required/></p>

<p>收货人手机号</br>
<input type="text" name="buyer_tel" pattern="[0-9]{11}" value="<?php echo $_POST['buyer_tel']; ?>" required/></p>

<p>所在校区</br>
<select type="text" name="buyer_location" required>
<?php 
	if($_POST['buyer_location'] == "望江校区"){
		echo "</option><option>望江校区</option><option>华西校区</option><option>江安校区</option>";
	}
	if($_POST['buyer_location'] == "华西校区"){
		echo "</option><option>华西校区</option><option>望江校区</option><option>江安校区</option>";
	}
	if($_POST['buyer_location'] == "江安校区"){
		echo "</option><option>江安校区</option><option>望江校区</option><option>华西校区</option>";
	}
?>
</select></p>

<p>收货详细地址（如东园1舍、西园21舍等）</br>
<input type="text" name="buyer_address" pattern=".{4,}" value="<?php echo $_POST['buyer_address']; ?>" required/></p>
</p>

<input type="submit"  name="changeinfo" value="确定" />
</form>  
<a href="show_buyer_info.php">放弃修改</a>