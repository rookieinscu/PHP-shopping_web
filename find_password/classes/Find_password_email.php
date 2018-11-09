<?php
	session_start();
	require_once("../../dbconnection/db.php");
	$user_id=$_REQUEST["user_id"];
	$user_email=$_REQUEST["user_email"];
	setcookie('user_email',$user_email,time()+900);
	setcookie('user_id',$user_id,time()+900);

	$conn=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	// 检查连接 
	if (!$conn) 
	{ 
    	die("连接错误: " . mysqli_connect_error());  
	}
	
	$dbemail=null; 
	$sql1 = "SELECT user_id, user_password, user_name, user_email
            FROM user_info
            WHERE user_id = '" . $user_id . "' ;";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>0){    
		while($row=mysqli_fetch_array($result1)){
			$dbemail=$row['user_email'];
		}
		if($dbemail!=$user_email){
			echo "<script>alert('该邮箱尚未注册！')</script>";
		}else{
			$sql2 = "SELECT user_id, user_password, user_name, user_email
            		FROM user_info
					WHERE user_id = '" . $user_id . "' ;";
			$result2=mysqli_query($conn,$sql2);
			if(mysqli_num_rows($result2)>0){   
				while($row=mysqli_fetch_array($result2)){
					$user_id=$row['user_id'];
					$user_password=$row['user_password'];
					$arr = array($user_id,$user_password);
					$name_pass=implode(' ',$arr);
					$token = md5($name_pass);//组合验证码
				}
				$url = "http://localhost/SCU/find_password/views/reset_password_email.php?email=".$user_email."&token=".$token;//构造URL
				$time = date("Y-m-d H:i:s"); 
				$result = sendmail($time,$user_email,$url);
				if($result==1){//邮件发送成功
				echo "<script>alert('系统已向您的邮箱发送了一封邮件,请登录到您的邮箱及时重置您的密码！')</script>";
				}else{ 
					$msg = $result;
					echo $msg; 
				} 
			}
		}
	}else{
		echo "<script>alert('用户名不存在！')</script>";
	}
	function sendmail($time,$suer_email,$url){ 
		$user_email=$_REQUEST["user_email"];
		include_once("smtp.php"); 
		$smtpusermail = "yytongthree@163.com"; //SMTP服务器的用户邮箱 
		//这里面的一个true是表示使用身份验证,否则不使用身份验证. 
		$emailtype = "HTML"; //信件类型，文本:text；网页：HTML 
		$smtpemailto = $user_email; 
		$smtpemailfrom = $smtpusermail; 
		$emailsubject = "四川大学线上图书交易平台 - 找回密码"; 
		$emailbody = "亲爱的".$_SESSION['user_name']."：<br/>您在".$time."提交了找回密码请求。若不是本人操作，请忽略此邮件。<br/>请点击下面的链接重置密码：<br/><a href='".$url."'target='_blank'>".$url."</a>"; 
		
		$mail = new MySendMail();
	//	$mail->setServer("smtp@126.com", "XXXXX@126.com", "XXXXX"); //设置smtp服务器，普通连接方式
		$mail->setServer("smtp.163.com", "yytongthree", "yytong2017", 465, true); //设置smtp服务器，到服务器的SSL连接
		$mail->setFrom($smtpemailfrom); //设置发件人
		$mail->setReceiver($smtpemailto); //设置收件人，多个收件人，调用多次
		$mail->setMail($emailsubject, $emailbody); //设置邮件主题、内容
		$rs = $mail->sendMail();
		return $rs;
	}

?>