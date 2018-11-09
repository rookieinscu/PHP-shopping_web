<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>书籍信息修改成功</title>
</head>
<?php
session_start();
require_once("../config/db.php");
require_once("../function/getinfo.php");
echo "你修改后的书籍信息如下";
echo "<br/>";
echo "编号:";
echo $_SESSION['book_number'];
echo "<br/>";
echo "书名：";
echo $_SEESION['book_name'];
echo "<br/>";
echo "作者：";
echo $_SESSION['book_writer'];
echo "<br/>";
echo "版次：";
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
<P>
<a class="register" href="www">返回个人书籍管理</a>