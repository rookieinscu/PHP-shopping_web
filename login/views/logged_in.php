<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<p>hello 
	<?php
	echo $_SESSION['user_nickname']; 
	?>
	
	, you have been logged in already.</p>
<p>Now you can have a look at our stystem!</p>
<a href="../user_info/views/show_user_info.php">个人信息</a></p>
<p><a href="index_yes.php">退出登录</a></p>
