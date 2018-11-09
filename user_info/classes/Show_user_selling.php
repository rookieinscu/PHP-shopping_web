<?php
error_reporting("E~ALL||E~NOTICE");
$showuserselling = new Showuserselling();
class Showuserselling{
	public function __construct(){
?>
您好，
<?php echo($_SESSION['user_nickname']); ?>
，您正在查看您的上架书籍：
<table border="1">
  <tr>
    <th>书籍编号</th>
    <th>书籍名称（版本）</th>
	<th>书籍作者</th>
	<th>适用课程</th>
	<th>出版社</th>
	<th>书籍价格</th>
	<th>书籍上架时间</th>
  </tr>
<?php		
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }
            if (!$this->db_connection->connect_errno) {
                $user_id = $_SESSION['user_id'];
				$n = 0;
        do{           
			$sql = "SELECT *
            FROM book_info
			WHERE book_owner='".$user_id."'
            LIMIT $n,1;";
			$n=$n+1;
            $result_of_show_book_check = $this->db_connection->query($sql);
			if ($result_of_show_book_check) {
                    $result_row = $result_of_show_book_check->fetch_object();
						$_SESSION['book_number'] = $result_row->book_number;
						$_SESSION['book_name'] = $result_row->book_name;
                        $_SESSION['book_writer'] = $result_row->book_writer;
						$_SESSION['book_edition'] = $result_row->book_edition;
						$_SESSION['book_publisher'] = $result_row->book_publisher;
						$_SESSION['book_course'] = $result_row->book_course;
						$_SESSION['book_price'] = $result_row->book_price;
						$_SESSION['book_picture'] = $result_row->book_picture;
						$_SEESION['book_sale'] = $result_row->book_sale;
						$_SEESION['book_date'] = $result_row->book_date;
						if ($result_row->book_sale==1){
?>
                        <tr>
    						<td><?php echo $_SESSION['book_number']; ?></td>
    						<td><?php echo $_SESSION['book_name']; echo"("; echo $_SESSION['book_edition']; echo")"?></td>
							<td><?php echo $_SESSION['book_writer']; ?></td>
							<td><?php echo $_SESSION['book_course']; ?></td>
							<td><?php echo $_SESSION['book_publisher']; ?></td>
							<td><?php echo $_SESSION['book_price']; ?></td>
							<td><?php echo $_SEESION['book_date']; ?></td>
  						</tr>
<?php
													  }
				}
		}while($result_row->book_number);
	}
}
}
?>
</table>