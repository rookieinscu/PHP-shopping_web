<?php
	include_once("../../dbconnection/db.php");
	$user_password=$_REQUEST['user_password'];
	$user_password_repeat=$_REQUEST['user_password_repeat'];
	if($user_password!=$user_password_repeat){
        echo "<script>alert('两次输入密码不一致！')</script>";
	}
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if (!$conn)
	{
		die('Could not connect: ' . mysqli_error());
	}
	if($_COOKIE['user_id']){
		$user_id=$_COOKIE['user_id'];
		$sql = "UPDATE user_info SET user_password='$user_password' WHERE user_id='{$user_id}'";
		//执行SQL语句  
		if(mysqli_query($conn,$sql)){
			echo "<script>alert('修改成功！');
			window.location.href='../login/index.php'</script>";
		}else {
			echo "<script>alert('修改失败！')</script>";
		}
	}else{
		if($_COOKIE['user_email'] && $_COOKIE['token']){
			$user_email=$_COOKIE['user_email'];
			$token=$_COOKIE['token'];
			$check=array();
			$uname=array();
			$sql = "SELECT user_id, user_password FROM user_info WHERE user_email='{$user_email}'";
			$result=mysqli_query($conn,$sql) or die("Error in query: $sql. ".mysqli_error());
			if(mysqli_num_rows($result)>0) { 
				$count=0;
				while($row=mysqli_fetch_array($result)){
					$uname[]=$row['user_id'];
					$user_id=$row['user_id'];
					$password=$row['password'];
					$arr = array($user_id,$password);
					$name_pass=implode(' ',$arr);
					$add = md5($name_pass);//组合验证码
					$check[]=$add;
					$count++;
				}
			}
			for($i=0;$i<$count;$i++){
				if($check[$i] == $token){
					$sql1 = "UPDATE user_info SET user_password='$user_password' WHERE user_id='{$user_id[$i]}'";
					//执行SQL语句  
					if(mysqli_query($conn,$sql1)){
						echo "<script>alert('修改成功！');
						window.location.href='../../login/index_yes.php'</script>";
					}
				}
			}
		}else{
			echo "<script>alert('修改失败！111')</script>";
		}
	}
     //释放记录集所占用的内存  
	mysqli_close($conn);
?>