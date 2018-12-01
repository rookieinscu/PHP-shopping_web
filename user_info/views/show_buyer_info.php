<?php 
error_reporting("E~ALL||E~NOTICE");
session_start();
echo $_SESSION['user_nickname']; ?>
，正在查看您存储的的收货人信息：
<?php 
require_once("../../dbconnection/db.php");
require_once("../classes/Show_buyer_info.php");
?>
<a href="insert_buyer_info.php">新增收货地址</a>