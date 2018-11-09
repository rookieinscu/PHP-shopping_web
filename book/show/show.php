<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>nn</title>
</head>
<?php
require_once("../config/db.php");
error_reporting(E_ALL || ~E_NOTICE);
session_start();
	$n=0;
do{
            $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if (!$db_connection->set_charset("utf8")) {
                $errors[] = $db_connection->error;
            }
	if (isset($_POST['A'])){
		$book_classification="马列主义毛邓思想";
	}
	else if (isset($_POST['B'])){
		$book_classification="哲学";
	}
	else if (isset($_POST['C'])){
		$book_classification="社会科学总论";
	}
	else if (isset($_POST['D'])){
		$book_classification="政治、法律";
	}
	else if (isset($_POST['E'])){
		$book_classification="军事";
	}
	else if (isset($_POST['F'])){
		$book_classification="经济";
	}
	else if (isset($_POST['G'])){
		$book_classification="文化、科学、教育、体育";
	}
	else if (isset($_POST['H'])){
		$book_classification="语言、文字";
	}
	else if (isset($_POST['I'])){
		$book_classification="文学";
	}
	else if (isset($_POST["J"])){
		$book_classification="艺术";
	}
	else if (isset($_POST["K"])){
		$book_classification="历史、地理";
	}
	else if (isset($_POST["N"])){
		$book_classification="自然科学总论";
	}
	else if (isset($_POST["O"])){
		$book_classification="数理科学和化学";
	}
	else if (isset($_POST["P"])){
		$book_classification="天文学、地球科学";
	}
	else if (isset($_POST["Q"])){
		$book_classification="生物科学";
	}
	else if (isset($_POST["R"])){
		$book_classification="医药、卫生";
	}
	else if (isset($_POST["S"])){
		$book_classification="农业科学";
	}
	else if (isset($_POST["T"])){
		$book_classification="工业技术";
	}
	else if (isset($_POST["U"])){
		$book_classification="交通运输";
	}
	else if (isset($_POST["V"])){
		$book_classification="航空、航天";
	}
	else if (isset($_POST["X"])){
		$book_classification="环境科学、安全科学";
	}
	else if (isset($_POST["Z"])){
		$book_classification="综合性图书";
	}
		
            if (!$db_connection->connect_errno) {
                $sql = "SELECT book_number,book_name, book_writer, book_edition, book_publisher, book_course, book_price, book_classification, book_picture, book_sale
                        FROM book_info
                        LIMIT $n,1;";
				$n=$n+1;
                $result_of_login_check = $db_connection->query($sql);
				if ($result_of_login_check) {
                    $result_row = $result_of_login_check->fetch_object();
						$_SEESION['book_number']=$result_row->book_number;
						$_SEESION['book_name']=$result_row->book_name;
                        $_SESSION['book_writer'] = $result_row->book_writer;
						$_SESSION['book_edition'] = $result_row->book_edition;
						$_SESSION['book_publisher'] = $result_row->book_publisher;
						$_SESSION['book_course'] = $result_row->book_course;
						$_SESSION['book_classification'] = $result_row->book_classification;
						$_SESSION['book_price'] = $result_row->book_price;
						$_SESSION['book_picture'] = $result_row->book_picture;
						$_SEESION['book_sale']=$result_row->book_sale;
						if ($result_row->book_classification==$book_classification){
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