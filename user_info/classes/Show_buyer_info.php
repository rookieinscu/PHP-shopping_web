<?php
$showbuyerinfo = new Showbuyerinfo();
class Showbuyerinfo{
	public function __construct(){
?>
<table border="1">
  <tr>
    <th>收货人姓名</th>
    <th>收货人电话</th>
	<th>收货人所在校区</th>
	<th>收货人详细地址</th>
	<th>修改/删除</th>
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
			$sql = "SELECT * FROM buyer_info WHERE user_id='".$user_id."'
            LIMIT $n,1;";
			$n=$n+1;
            $result_of_show_trade_info = $this->db_connection->query($sql);
			if ($result_of_show_trade_info) {
                    $result_row = $result_of_show_trade_info->fetch_object();
						$_SESSION['buyer_name'] = $result_row->buyer_name;
						$_SESSION['buyer_tel'] = $result_row->buyer_tel;
                        $_SESSION['buyer_location'] = $result_row->buyer_location;
						$_SESSION['buyer_address'] = $result_row->buyer_address;

				if($result_row->buyer_name){
							?><tr>
							<td><?php echo $_SESSION['buyer_name']; ?></td>
    						<td><?php echo $_SESSION['buyer_tel']; ?></td>
							<td><?php echo $_SESSION['buyer_location']; ?></td>
							<td><?php echo $_SESSION['buyer_address'] ?></td>
							<td><form method="post" action="change_buyer_info.php">
									<input name="user_id" type="hidden" value="<?php echo $_SESSION['user_id']; ?>">
									<input name="buyer_name" type="hidden" value="<?php echo $_SESSION['buyer_name']; ?>">
									<input name="buyer_tel" type="hidden" value="<?php echo $_SESSION['buyer_tel']; ?>">
									<input name="buyer_location" type="hidden" value="<?php echo $_SESSION['buyer_location']; ?>">
									<input name="buyer_address" type="hidden" value="<?php echo $_SESSION['buyer_address']; ?>">
									<input name="changebuyerinfo" type="submit" value="修改">
								</form>
								<form method="post" action="../classes/Delete_buyer_info.php">
									<input name="user_id" type="hidden" value="<?php echo $_SESSION['user_id']; ?>">
									<input name="buyer_name" type="hidden" value="<?php echo $_SESSION['buyer_name']; ?>">
									<input name="buyer_tel" type="hidden" value="<?php echo $_SESSION['buyer_tel']; ?>">
									<input name="buyer_location" type="hidden" value="<?php echo $_SESSION['buyer_location']; ?>">
									<input name="buyer_address" type="hidden" value="<?php echo $_SESSION['buyer_address']; ?>">
									<input name="deletebuyerinfo" type="submit" value="删除">
								</form>
							</td>
						</tr>
<?php
					}
			}
		}while($result_row->user_id);
	}
}
}
?>
</table>