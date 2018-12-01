<?php
$deletebuyerinfo = new Deletebuyerinfo();
class Deletebuyerinfo{
    public function __construct(){
		session_start();
		require_once("../../dbconnection/db.php");
		if(isset($_POST['deletebuyerinfo'])){
			$this->deleteinfo();
		}
	}
	private function deleteinfo(){
        $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if (!$this->db_connection->set_charset("utf8")) {
            $this->errors[] = $this->db_connection->error;
        }
           if (!$this->db_connection->connect_errno) {
				$sql = "DELETE FROM buyer_info 
						WHERE user_id='" .$_SESSION['user_id']. "'and buyer_name='" .$_POST['buyer_name'] ."'and buyer_tel='" .$_POST['buyer_tel']."'and buyer_location='" .$_POST['buyer_location']. "'and buyer_address='" .$_POST['buyer_address']. "';";
			   $query_delete_buyerinfo = $this->db_connection->query($sql);
                    if ($query_delete_buyerinfo) {
						echo "<script>alert('信息删除成功！');
						window.location.href='../views/show_buyer_info.php'</script>";
					} else {
						echo "<script>alert('信息删除失败，请重试或联系管理员！');
						window.location.href='../views/show_buyer_info.php'</script>";
                    }
			}else {
			echo "<script>alert('信息删除失败，请重试或联系管理员！')</script>";
	}
	}
}
?>