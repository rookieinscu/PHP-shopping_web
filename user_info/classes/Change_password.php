<?php 
class Change_password{
	private function change_user_password(){
		session_start();
		require_once("../../dbconnection/db.php");
			if ($_POST['user_password_new'] !== $_POST['user_password_repeat']) {
			echo "<script>alert('两次输入的新密码不一致')</script>";
        } elseif (strlen($_POST['user_password_new']) < 6) {
			echo "<script>alert('新密码最少6位！')</script>";
        }
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }
            if (!$this->db_connection->connect_errno) {
				$user_id=$_SESSION['user_id'];
				$sql1 = "SELECT user_password
				         FROM user_info
						 WHERE user_id = '" .$user_id. "';";
				$query_check_password = $this->db_connection->query($sql1);
				$old_password = $_POST['user_password'];
				if($_POST['user_password'] == $result_row->user_password){				
					$sql2 = "UPDATE user_info 
						SET user_password=" . $_POST['user_password_new'] . "
						WHERE user_id = '" .$user_id. "';";
					$query_new_user_changepass = $this->db_connection->query($sql2);
                	if ($query_new_user_changepass) {
						echo "<script>alert('密码修改成功，请您重新登录');
						window.location.href='../../login/index_yes.php'</script>";
					} else {echo "<script>alert('密码修改失败！')</script>";}
			}else {echo "<script>alert('原密码不正确！')</script>";}
			}
	}
}