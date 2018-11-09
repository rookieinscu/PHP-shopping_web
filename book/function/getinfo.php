<?php
			$book_number=$_SESSION['book_number'];
            $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if (!$db_connection->set_charset("utf8")) {
                $errors[] = $db_connection->error;
            }
            if (!$db_connection->connect_errno) {
                $sql = "SELECT book_name, book_writer, book_edition, book_publisher, book_course, book_price, book_picture
                        FROM book_info
                        WHERE book_number=$book_number;";
                $result_of_login_check = $db_connection->query($sql);
				if ($result_of_login_check->num_rows==1) {
                    $result_row = $result_of_login_check->fetch_object();
						$_SEESION['book_name']=$result_row->book_name;
                        $_SESSION['book_writer'] = $result_row->book_writer;
						$_SESSION['book_edition'] = $result_row->book_edition;
						$_SESSION['book_publisher'] = $result_row->book_publisher;
						$_SESSION['book_course'] = $result_row->book_course;
						$_SESSION['book_price'] = $result_row->book_price;
						$_SESSION['book_picture'] = $result_row->book_picture;
				}
			}
?>
