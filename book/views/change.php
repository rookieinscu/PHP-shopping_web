<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>书籍信息修改</title>
</head>
<body>
	<?php
	session_start();
	?>
<div class="sub-main-w3">
	<!--<link rel="stylesheet" href="../css/changeinput.css" type="text/css" media="all" />-->
		<form action="../changebookinfo.php" method="post">
			<label>书名</label>
				<input value="<?php echo $_SESSION['book_name']; ?>" name="book_name" type="text" required>
			<br>
			<br>
			<label>作者</label>
				<input value="<?php echo $_SESSION['book_writer']; ?>" name="book_writer" type="text" required>
			<br>
			<br>
			<label>版次</label>
				<input value="<?php echo $_SESSION['book_edition']; ?>" name="book_edition" type="text" required>
			<br>
			<br>
			<label>出版社</label>
				<input value="<?php echo $_SESSION['book_publisher']; ?>" name="book_publisher" type="text" required>
			<br>
			<br>
			<label>适用课程</label>
				<input value="<?php echo $_SESSION['book_course']; ?>" name="book_course" type="text" required>
			<br>
			<br>
			<label>价格</label>
				<input value="<?php echo $_SESSION['book_price']; ?>" name="book_price" type="number" required>
			<br>
			<br>
			<label for="file">图片</label>
			<input enctype="multipart/form-data" type="file" name="book_picture" id="file" /> 
			<br>
			<br>
				<input type="submit" name="ok" value="确定修改">
		</form>
	</div>
</body>
</html>
