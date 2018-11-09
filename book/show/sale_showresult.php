<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>书籍上架成功</title>
</head>
<?php
session_start();
require_once("../config/db.php");
require_once("sale_showinfo.php");
echo "你的书籍信息如下";
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
echo "<br/>";
echo "简介：";
echo $_SESSION['book_introduction'];
?>
<P>
<a href="../sale.php">继续发布书籍信息</a>
<P>
<a href="../Browse_choose.php">我要浏览书籍</a>