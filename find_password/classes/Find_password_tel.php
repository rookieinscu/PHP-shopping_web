<?php
	$Findpasswordtel = new findpasswordtel();
	class findpasswordtel{
		public function __construct(){
			session_start();
			require_once("../../dbconnection/db.php");
			$user_id=$_REQUEST["user_id"];
			$user_tel=$_REQUEST["user_tel"];
			$_SESSION['user_id'] = $user_id;
			
			$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }
            if (!$this->db_connection->connect_errno) {
                $sql = "SELECT user_tel, user_id
                        FROM user_info
                        WHERE user_id = '" . $user_id . "';";
                $result_of_login_check = $this->db_connection->query($sql);
				if ($result_of_login_check->num_rows==1) {
                    $result_row = $result_of_login_check->fetch_object();
					if($_POST['user_tel'] == $result_row->user_tel){
                        //执行发送验证码的过程
						echo "<script>alert('系统已发送验证码到您的手机，请注意查收');
						window.location.href='../views/reset_password_tel.php'</script>";
						//执行密码修改的步骤
                    } else {
						echo "<script>alert('学号和手机号不匹配！')</script>";
                    }
                } else {
					echo "<script>alert('该用户为注册！请检查学号输入是否正确！')</script>";
                }
            } 
		}
	}