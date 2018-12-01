<?php
$changeuserimg = new Changeuserimg();
class Changeuserimg{
    public function __construct(){
		session_start();
		if($_FILES["user_img"]["error"]){
			echo $_FILES["user_img"]["error"];
		}	
		else{
    	//控制上传文件的类型，大小
    		//if(($_FILES["user_img"]["type"]=="image/jpg" || $_FILES["user_img"]["type"]=="image/png") && $_FILES["user_img"]["size"]<1024*1024*5){
				//找到文件存放的位置
				//在服务器中新建一个uploads文件夹,图片名中也加入当前时间
        		$filename = "../../imgs/".date("YmdHis").$_FILES["user_img"]["name"];
         		//转换编码格式，只有转换成GB2312，move_uploaded_file函数才不会把图片名字里的中文变成乱码
        		$filenewname = "../../imgs";
            	if (move_uploaded_file($_FILES["user_img"]["tmp_name"],$filenewname)){
				echo "0";}
            	//这里的filename要utf8_general_ci格式,不然和数据库中编码不一致
			}
			echo "1";
		}
	//}
}

		
		
		
		
		
		/*session_start();
		require_once("../../dbconnection/db.php");
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if (!$this->db_connection->set_charset("utf8")) {
            $this->errors[] = $this->db_connection->error;
        }
           if (!$this->db_connection->connect_errno) {
                $user_input = $this->db_connection->real_escape_string($_POST['user_input']);
				$user_id=$_SESSION['user_id'];
				$sql = "UPDATE user_info";



            $sql="insert into student values('".$name."','".$filename."')";
            if($conn->query($sql))
            {
                echo "数据插入数据库";
                }
                else
                {
                    echo "数据未插入数据库";
                    };
        }
    }
    else
    {
        echo "文件类型不正确！";
    }
}
$conn->close();*/
?>