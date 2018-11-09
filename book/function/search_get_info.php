<?php
error_reporting(E_ALL || ~E_NOTICE);
session_start();
$n=0;
do{
            $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if (!$db_connection->set_charset("utf8")) {
                $errors[] = $db_connection->error;
            }
            if (!$db_connection->connect_errno) {
                $sql = "SELECT book_number,book_name, book_writer, book_edition, book_publisher, book_course, book_price, book_picture, book_sale
                        FROM book_info
                        LIMIT $n,1;";
				$n=$n+1;
                $result_of_login_check = $db_connection->query($sql);
				if ($result_of_login_check) {
                    $result_row=$result_of_login_check->fetch_object();
						$_SEESION['book_number']=$result_row->book_number;
						$_SEESION['book_name']=$result_row->book_name;
                        $_SESSION['book_writer'] = $result_row->book_writer;
						$_SESSION['book_edition'] = $result_row->book_edition;
						$_SESSION['book_publisher'] = $result_row->book_publisher;
						$_SESSION['book_course'] = $result_row->book_course;
						$_SESSION['book_price'] = $result_row->book_price;
						$_SESSION['book_picture'] = $result_row->book_picture;
						$_SEESION['book_sale']=$result_row->book_sale;
						if ($result_row->book_name==$_POST['search']){
						echo "编号:";
						echo $_SEESION['book_number'];
						echo "<br/>";
						echo "书名：";
						echo $_SEESION['book_name'];
						echo "<br/>";
						echo "作者：";
						echo $_SESSION['book_writer'];
						echo "<br/>";
						echo "版次：";
						echo $_SESSION['book_edition'];
						echo "<br/>";
						echo "出版商：";
						echo $_SESSION['book_publisher'];
						echo "<br/>";
						echo "适用课程：";
						echo $_SESSION['book_course'];
						echo "<br/>";
						echo "价格：";
						echo $_SESSION['book_price'];
						echo "<br/>";
						?>
						<p>
						   <a class="register" href="www.baidu.com">商品详情</a>
						<p>
						<?php
						}
					if ($result_row->book_number){
						
					}
				else{
					echo "没有更多的数据了！";
				}
				}
			}
  }while($result_row->book_number);
?>