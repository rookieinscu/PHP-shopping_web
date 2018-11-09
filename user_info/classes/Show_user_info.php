<?php
$showuserinfo = new Showuserinfo();
class Showuserinfo{
	public function __construct(){
		require_once("../../dbconnection/db.php");
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }
            if (!$this->db_connection->connect_errno) {
                $user_id = $_SESSION['user_id'];
                $sql = "SELECT *
                        FROM user_info
                        WHERE user_id = '" . $user_id . "';";
                $result_of_show_info_check = $this->db_connection->query($sql);
                $result_row = $result_of_show_info_check->fetch_object();
                        $_SESSION['user_id'] = $result_row->user_id;
						$_SESSION['user_name'] = $result_row->user_name;
						$_SESSION['user_tel'] = $result_row->user_tel;
						$_SESSION['user_location'] = $result_row->user_location;
						$_SESSION['user_email'] = $result_row->user_email;
						$_SESSION['register_date'] = $result_row->register_date;
						$_SESSION['user_nickname'] = $result_row->user_nickname;
						//$_SESSION['user_integral'] = $result_row->user_integral;
						//$_SESSION[''] = $result_row->;
						//$_SESSION[''] = $result_row->;
			}
	}
}
