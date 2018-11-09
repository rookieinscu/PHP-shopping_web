<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>书籍信息录入</title>
</head>
<body>
<div class="sub-main-w3">
		<form action="sale.php"method="post">
			<label>书名</label>
				<input method="post" placeholder="书名" name="book_name" type="text" required>
			<br>
			<br>
			<label>作者</label>
				<input method="post" placeholder="作者" name="book_writer" type="text" required>
			<br>
			<br>
			<label>版次</label>
				<input method="post" placeholder="版次" name="book_edition" type="text" required>
			<br>
			<br>
			<label>出版社</label>
				<input method="post" placeholder="出版社" name="book_publisher" type="text" required>
			<br>
			<br>
			<label>适用课程</label>
				<input method="post" placeholder="该书的适用课程" name="book_course" type="text" required>
			<br>
			<br>
			<label>类别</label>
			<select id="login_input_userlocation" class="login_input" type="text" name="book_classification" required>
		<option>请选择书籍类别</option><option>马列主义毛邓思想</option><option>哲学</option><option>社会科学总论</option><option>政治、法律</option><option>军事</option><option>经济</option><option>文化、科学、教育、体育</option><option>语言、文字</option><option>文学</option><option>艺术</option><option>历史、地理</option><option>自然科学总论</option><option>数理科学和化学</option><option>天文学、地球科学</option><option>生物科学</option><option>医药、卫生</option><option>农业科学</option><option>工业技术</option><option>交通运输</option><option>航空、航天</option><option>环境科学、安全科学</option><option>综合性图书</option>
			</select>
			<br>
			<br>
			<label>价格（元）</label>
				<input method="post" placeholder="想要出售的价格" name="book_price" type="number" required>
			<br>
			<br>
			<label>简介</label>
				<input method="post" placeholder="书籍的简要介绍" name="book_introduction" type="text" required>
			<br>
			<br>
			<label for="file">图片</label>
			<input method="post" enctype="multipart/form-data" type="file" name="book_picture" id="file" /> 
			<br>
			<br>
				<input type="submit" name="ok" value="确定">
		</form>
	</div>
</body>
</html>