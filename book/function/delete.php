<?php
$db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if (!$db_connection->set_charset("utf8")) {
                $errors[] = $db_connection->error;
            }
            if (!$db_connection->connect_errno) {
				$book_number=866605538;
				$sql = "UPDATE book_info 
						SET book_sale='" . 0 . "'
						WHERE book_number=$book_number;";
			}
$query_book_unload = $db_connection->query($sql);
          if ($query_book_unload) {
						echo "<script>alert('书籍下架成功！');
				window.location.href='function/afterdelete.php'</script>";
			} else {
						echo "<script>alert('书籍下架失败！')</script>";
		  }
?>