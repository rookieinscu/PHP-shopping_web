<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<p>hello 
	<?php echo $_SESSION['user_nickname']; ?>
	, you have been logged in already.</p>
<p>Now you can have a look at our stystem!</p>
<form action="../book_info/search/search.php" method="post">
			<lable>搜索</lable>
			<input name="search" placeholder="请输入您想搜索的书籍" type="text">
		</form>
<p><a href="../book_info/browse/browse.php">我要浏览</a>
<p><a href="../book_info/on_shelves/update.php">我要发布</a>
<p><a href="../user_info/views/show_user_info.php">个人信息</a>

<form method="post" action="../index_yes.php">
	<input type="submit"  name="logout" value="退出登录" />
</form>