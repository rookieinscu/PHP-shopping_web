<?php
//error_reporting("E~ALL||E~NOTICE");
$showuserbought = new Showuserbought();
class Showuserbought{
	public function __construct(){
?>
您好，
<?php echo($_SESSION['user_nickname']); ?>
，您正在查看您的购买/租入历史：
<table border="1">
  <tr>
    <th>交易编号</th>
    <th>交易时间</th>
	<th>书籍编号</th>
	<th>书籍名称</th>
	<th>卖家（出租方）</th>
	<th>价格</th>
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
			$sql = "SELECT * FROM trade_info WHERE book_buyer='".$user_id."'
            LIMIT $n,1;";
			$n=$n+1;
            $result_of_show_trade_info = $this->db_connection->query($sql);
			if ($result_of_show_trade_info) {
                    $result_row = $result_of_show_trade_info->fetch_object();
						$_SESSION['trade_number'] = $result_row->trade_number;
						$_SESSION['trade_time'] = $result_row->trade_time;
                        $_SESSION['book_number'] = $result_row->book_number;
						$_SESSION['book_price'] = $result_row->book_price;
						$book_number = $_SESSION['book_number'];
			$sql2 = "SELECT * FROM book_info WHERE book_buyer='".$user_id."';";	
			 $result_of_show_book_info = $this->db_connection->query($sql2);
			if ($result_of_show_book_info) {
                    $result_row2 = $result_of_show_book_info->fetch_object();	
						$_SESSION['book_name'] = $result_row2->book_name;
						$_SESSION['book_owner'] = $result_row2->book_owner;
						//$_SESSION['book_publisher'] = $result_row->book_publisher;
						//$_SESSION['book_course'] = $result_row->book_course;
						//$_SESSION['book_price'] = $result_row->book_price;
						//$_SESSION['book_picture'] = $result_row->book_picture;
						//$_SEESION['book_sale'] = $result_row->book_sale;
						//$_SEESION['book_date'] = $result_row->book_date;
						if ($result_row->book_sale==1){
?>
                        <tr>
    						<td><?php echo $_SESSION['trade_number']; ?></td>
    						<td><?php echo $_SESSION['trade_time']; ?></td>
							<td><?php echo $_SESSION['book_number']; ?></td>
							<td><?php echo $_SESSION['book_name']; ?></td>
							<td><?php echo $_SESSION['book_owner']; ?></td>
							<td><?php echo $_SESSION['book_price']; ?></td>
  						</tr>
<?php
													  }
				}
			}
		}while($result_row->book_number);
	}
}
}
?>
</table>