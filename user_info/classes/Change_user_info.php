<?php
$changeuserinfo = new Changeuserinfo();
class Changeuserinfo{
    public function __construct(){
		session_start();
		require_once("../../dbconnection/db.php");
        $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if (!$this->db_connection->set_charset("utf8")) {
            $this->errors[] = $this->db_connection->error;
        }
           if (!$this->db_connection->connect_errno) {
                $user_input = $this->db_connection->real_escape_string($_POST['user_input']);
				$user_id=$_SESSION['user_id'];
				$sql = "UPDATE user_info 
						SET user_name='" .$_POST['user_name']. "', user_nickname='" .$_POST['user_nickname'] ."', user_tel='" .$_POST['user_tel']. "', user_email='" .$_POST['user_email']. "', user_location='" .$_POST['user_location']. "'
						WHERE user_id='" .$user_id. "';";
                    $query_new_user_insert = $this->db_connection->query($sql);
                    if ($query_new_user_insert) {
						echo "<script>alert('信息修改成功！');
						window.location.href='../views/show_user_info.php'</script>";
					} else {
						echo "<script>alert('信息修改失败，请重试或联系管理员！')</script>";
                    }
			}else {
			echo "<script>alert('信息修改失败，请重试或联系管理员！')</script>";
	}
}
}
?>