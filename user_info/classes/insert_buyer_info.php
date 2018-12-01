<?php 
//error_reporting("E~ALL||E~NOTICE");
session_start();
echo $_SESSION['user_nickname']; ?>
，新增收货人信息：

<form method="post" action="../classes/Insert_buyer_info.php" name="changeform">
<p>收货人姓名</br>
<input type="text" name="buyer_name" pattern=".{2,}" value="<?php echo $_SESSION['user_name']; ?>" required/></p>

<p>收货人手机号</br>
<input type="text" name="buyer_tel" pattern="[0-9]{11}" value="<?php echo $_SESSION['user_tel']; ?>" required/></p>

<p>所在校区</br>
<select type="text" name="buyer_location" required>
<?php 
	if($_SESSION['user_locaiton'] == "望江校区"){
		echo "</option><option>望江校区</option><option>华西校区</option><option>江安校区</option>";
	}
	if($_SESSION['user_locaiton'] == "华西校区"){
		echo "</option><option>华西校区</option><option>望江校区</option><option>江安校区</option>";
	}
	if($_SESSION['user_locaiton'] == "江安校区"){
		echo "</option><option>江安校区</option><option>望江校区</option><option>华西校区</option>";
	}
?>
</select></p>
<p>收货详细地址</br>
<input type="text" name="buyer_address" pattern=".{4,}" placeholder="（如东园1舍、西园21舍等）" required/></p>
</p>
<input type="submit"  name="insertinfo" value="确定" />
</form>  
