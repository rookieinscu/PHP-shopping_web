<?php
class Updateinfo
{
    private $db_connection = null;
    public $errors = array();
    public $messages = array();
	public function __construct()
    {
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }
        if (isset($_POST["ok"])) {
            $this->updatenewbook();
        }
    }
    private function updatenewbook()
    {
		$book_number=866605538;
        $sql = "UPDATE book_info 
						SET book_name='" . $_POST['book_name'] . " ', book_writer='" . $_POST['book_writer'] . "' , 
						book_edition='" . $_POST['book_edition'] . "' , book_publisher='" . $_POST['book_publisher'] . " ', 
						book_course='" . $_POST['book_course'] . " ', book_price='" . $_POST['book_price'] . " ', 
						book_picture='" . $_POST['book_picture'] . "'
						WHERE book_number=$book_number;";
         $query_new_book_insert = $this->db_connection->query($sql);
          if ($query_new_book_insert) {
						echo "<script>alert('书籍信息修改成功！');
				window.location.href='show/Showchangeresult.php'</script>";
			} else {
						echo "<script>alert('书籍信息修改失败！')</script>";
		  }
    }
}
?>