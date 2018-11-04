<?php
class Login
{
    private $db_connection = null;
    public $errors = array();
    public $messages = array();
    public function __construct()
    {
        session_start();
        if (isset($_GET["logout"])) {
            $this->doLogout();
        }
        elseif (isset($_POST["login"])) {
            $this->dologinWithPostData();
        }
    }

	private function dologinWithPostData()
    {
		if (!empty($_POST['user_input']) && !empty($_POST['user_password'])) {
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }
            if (!$this->db_connection->connect_errno) {
                $user_input = $this->db_connection->real_escape_string($_POST['user_input']);
                $sql = "SELECT *
                        FROM user_info
                        WHERE user_id = '" . $user_input . "' or user_name = '" . $user_input . "' or user_tel = '" . $user_input . "' ;";
                $result_of_login_check = $this->db_connection->query($sql);
				if ($result_of_login_check->num_rows==1) {
                    $result_row = $result_of_login_check->fetch_object();
					if($_POST['user_password'] == $result_row->user_password){
                        $_SESSION['user_id'] = $result_row->user_id;
						$_SESSION['user_name'] = $result_row->user_name;
						$_SESSION['user_tel'] = $result_row->user_tel;
						$_SESSION['user_location'] = $result_row->user_location;
						$_SESSION['user_email'] = $result_row->user_email;
						$_SESSION['register_date'] = $result_row->register_date;
						$_SESSION['user_nickname'] = $result_row->user_nickname;
						//$_SESSION[''] = $result_row->;
						//$_SESSION[''] = $result_row->;
						//$_SESSION[''] = $result_row->;
						$_SESSION['user_login_status'] = 1;
                    } else {
						echo "<script>alert('密码错误')</script>";
                    }
                } else {
					echo "<script>alert('用户名不存在')</script>";
                }
            } else {
                $this->errors[] = "Database connection problem.";
            }
        }
    }
    public function doLogout()
    {
        $_SESSION = array();
        session_destroy();
    }
    public function isUserLoggedIn()
    {
        if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1) {
            return true;
        }
        return false;
    }
}
