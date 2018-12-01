<p>hello<?php session_start(); echo $_SESSION['user_nickname']; ?> ，您正在修改头像<p>
<form action="../classes/Change_user_img.php" method="post" enctype="multipart/form-data">
请选择您要上传的文件：<input type="file" name='user_img' />
<input type="submit" value="上传文件" />
</form>
<a href="show_user_info.php">放弃</a>