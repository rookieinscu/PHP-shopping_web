<?php
class Registration
{
    private $db_connection = null;
    public $errors = array();
    public $messages = array();
    public function __construct()
    {
        if (isset($_POST["register"])) {
            $this->registerNewUser();
        }
    }
    private function registerNewUser()
    {
        if ($_POST['user_password_new'] !== $_POST['user_password_repeat']) {
			echo "<script>alert('两次密码输入不一致')</script>";
        } elseif (strlen($_POST['user_password_new']) < 6) {
			echo "<script>alert('密码最少6位！')</script>";
        } elseif (strlen($_POST['user_id'])!==13) {
			echo "<script>alert('请使用学号注册')</script>";
		} elseif (strlen($_POST['user_tel'])!==11) {
			echo "<script>alert('请检查您的手机号')</script>";
        } elseif ($_POST['user_location']=="请选择您的校区") {
            echo "<script>alert('请选择您的校区')</script>";
        } elseif (!empty($_POST['user_id'])
            && strlen($_POST['user_id']) ==13
            && !empty($_POST['user_password_new'])
            && !empty($_POST['user_password_repeat'])
            && ($_POST['user_password_new'] == $_POST['user_password_repeat'])) 
			{
			$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }
            if (!$this->db_connection->connect_errno) {
                $user_id = $this->db_connection->real_escape_string(strip_tags($_POST['user_id'], ENT_QUOTES));
                $user_password = $_POST['user_password_new'];

                $sql = "SELECT * FROM user_info WHERE user_id = '" . $user_id . "';";
                $query_check_user_id = $this->db_connection->query($sql);
                if ($query_check_user_id->num_rows ==1) {
					echo "<script>alert('Sorry, your student ID is already been registrated.')</script>";
                } else {

                    $sql = "INSERT INTO user_info (user_id,user_password,admin,user_name,user_nickname,user_tel,user_email,user_location,register_date)
                            VALUES('" . $user_id . "', '" . $user_password . "','0','" . $_POST['user_name'] . "','" . $_POST['user_nickname'] . "','" . $_POST['user_tel'] . "','" . $_POST['user_email'] . "','" . $_POST['user_location'] . "',CURDATE());";
                    $query_new_user_insert = $this->db_connection->query($sql);
                    if ($query_new_user_insert) {
						echo "<script>alert('帐号注册成功！');
						window.location.href='index_yes.php'</script>";
					} else {
						echo "<script>alert('帐号注册失败！')</script>";
                    }
                }
            } else {
				echo "<script>alert('Sorry, no database connection.')</script>";
            }
        } else {
            //$this->errors[] = "An unknown error occurred.";
			echo "<script>alert('An unknown error occurred.')</script>";
        }
    }
}
