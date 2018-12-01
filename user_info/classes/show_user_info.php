<?php
session_start();
require_once("../../dbconnection/db.php");
require_once("../classes/Show_user_info.php");
?>
<img src="<?php echo $_SESSION['user_img']; ?>" alt="头像"  height=100px/>
<?php
echo"<p>帐号：".$_SESSION['user_id'];
echo"<p>姓名：".$_SESSION['user_name'];
echo"<p>昵称：".$_SESSION['user_nickname'];
echo"<p>邮箱：".$_SESSION['user_email'];
echo"<p>电话号码：".$_SESSION['user_tel'];
echo"<p>所在校区：".$_SESSION['user_location'];
echo"<p>您目前拥有&nbsp&nbsp".$_SESSION['user_integral']."&nbsp&nbsp积分";
echo"<p>您在".$_SESSION['register_date']."注册本系统";
?>

<p><a href="change_user_info.php"><br>修改信息</a>
<a href="change_password.php"><br>修改密码</a>
<a href=""><br>查看我的收藏</a>
<a href="show_buyer_info.php"><br>管理我的收货地址</a>
<a href="show_user_bought.php"><br>我购买的书籍</a>
<a href="show_user_selling.php"><br>我上架的书籍</a>


