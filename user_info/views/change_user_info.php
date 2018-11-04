<?php 
<div class="htmleaf-container">
	<div class="wrapper">
		<div class="container">
			<h1>修改个人信息</h1>
				<form method="post" action="../classes/Change_user_info.php" name="changeform">
					<p>用户ID&nbsp&nbsp&nbsp&nbsp
					<?php 
						session_start();
						$user_id = $_SESSION['user_id'];
						echo $user_id; 
						echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp（用户ID不可更改）";
					?></p>
					
					<p>姓名（建议为真实姓名，方便买卖双方沟通）&nbsp&nbsp&nbsp&nbsp
					<input id=user_name" class="change_input" type="text" name="user_name" pattern=".{2,}" value="<?php 
						$user_name = $_SESSION['user_name'];
						echo $user_name; 
					?>" required /></p>
					
					<p>昵称&nbsp&nbsp&nbsp&nbsp
					<input id="user_nickname" class="change_input" type="text" name="user_nickname" pattern=".{2,15}" value="<?php 
						$user_nickname = $_SESSION['user_nickname'];
						echo $user_nickname; 
					?>" required /></p>
					
					<p>手机号码&nbsp&nbsp&nbsp&nbsp
					<input id="user_tel" class="change_input" type="text" name="user_tel" pattern="[0-9]{11}" value="<?php 
						$user_tel = $_SESSION['user_tel'];
						echo $user_tel; 
					?>" /></p>

					<p>电子邮箱&nbsp&nbsp&nbsp&nbsp
					<input id="user_email" class="change_input" type="text" name="user_email" pattern=".{6,}" value="<?php 
						$user_email = $_SESSION['user_email'];
						echo $user_email; 
					?>" required /></p>

					<p>所在校区&nbsp&nbsp&nbsp&nbsp
					<select id="user_location" class="change_input" type="text" name="user_location" required>
						<option><?php 
						$user_location = $_SESSION['user_location'];
						echo $user_location; 
					?></option><option>望江校区</option><option>华西校区</option><option>江安校区</option>
					</select></p>
					
					<input type="submit"  name="change_info" value="确定" />
			</form>  
		</div>
		<a href="show_user_info.php">放弃</a>
	</div>
</div>