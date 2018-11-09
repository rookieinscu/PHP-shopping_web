<?php
session_start();
class Updatebookinfo
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
            if ($_POST['book_classification']=="请选择书籍类别")
			{
				echo "<script>alert('请选择书籍类别！')</script>";
			}
			else {
			$this->insertnewbook();
			}
        }
    }
    private function insertnewbook()
    {
		$book_number=rand(1,999999999);
		$_SESSION['A']=$book_number;
        $sql = "INSERT INTO book_info
		(book_number,book_owner,book_name,book_writer,book_edition,book_publisher,book_course,book_price,book_classification,book_introduction,book_picture,sale_or_rent,book_date)
         	VALUES('" . $book_number . "','" . 2016141093000 . "','" . $_POST['book_name'] . "','" . $_POST['book_writer'] . "','" . $_POST['book_edition'] . "','" . $_POST['book_publisher'] . "','" . $_POST['book_course'] . "','" . $_POST['book_price'] . "','" . $_POST['book_classification'] ."','" . $_POST['book_introduction'] . "','" . $_POST['book_pricture'] ."','" . 0 . "',CURDATE());";
         $query_new_book_insert = $this->db_connection->query($sql);
          if ($query_new_book_insert) {
						echo "<script>alert('书籍已成功上架！');
				window.location.href='show/rent_showresult.php'</script>";
			} else {
						echo "<script>alert('书籍上架失败！')</script>";
		  }
    }
}
?>