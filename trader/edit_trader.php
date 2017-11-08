<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
	include("connect_db.php");
	$td_user = $_POST['td_user'];
	$td_shopname = $_POST['td_shopname'];
	$td_name = $_POST['td_name'];
	$td_tel = $_POST['td_tel'];
	$td_user = $_POST['td_user'];
	$td_pass = $_POST['td_pass'];
	$td_typeshop = $_POST['td_typeshop'];
	$td_pic = $_FILES["file_upload2"]["name"];
	$td_pic_path  = $_FILES["file_upload2"]["tmp_name"];
	$date = date("dmY_his");
	

		if($td_pic != ""){
			$last_pic = explode(".",$td_pic);
			$td_pic = $date."_5".".".$last_pic[1];
			}
		
		$sql = "update tb_trader set 
					td_name = '$td_name', 
					td_typeshop = '$td_typeshop', 
					td_shopname = '$td_shopname', 
					td_user = '$td_user', 
					td_pass = '$td_pass', 
					td_tel = '$td_tel'";
		//echo $sql; exit();
		if($td_pic != ""){
			$sql .=", td_pic = '$td_pic'";
		}
		$sql .=" where td_user = '$td_user'";
	//	echo $sql; exit();
		if(mysql_db_query($db_name,$sql)){
				if($td_pic != ""){
		$sql.", td_pic = '$td_pic'";
			move_uploaded_file($td_pic_path,"../admin/piclogo/".$td_pic);
			
			} 

				?>
					<script type="text/javascript">
						alert("การแก้ไขข้อมูลสร็จสมบูรณ์");
						window.location.href="manage_detail.php";
					</script>
				<?php
	}else{
					?>
					<script type="text/javascript">
						alert("การแก้ไขข้อมูลล้มเหลว");
						window.location.href="manage_detail.php?td_user=<?=$td_user?>";
					</script>
					<?php
		}
	
?>
</body>
</html>
