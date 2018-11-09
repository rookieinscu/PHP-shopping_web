<?php
session_start();
echo "编号:";
echo $_SESSION['book_number'];
echo "<br/>";
echo "书名：";
echo $_SEESION['book_name'];
echo "<br/>";
echo "作者：";
echo $_SESSION['book_writer'];
echo "<br/>";
echo "出版社：";
echo $_SESSION['book_edition'];
echo "<br/>";
echo "出版商：";
echo $_SESSION['book_publisher'];
echo "<br/>";
echo "适用课程：";
echo $_SESSION['book_course'];
echo "<br/>";
echo "价格：";
echo $_SESSION['book_price'];
?>