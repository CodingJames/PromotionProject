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
	$pt_id = $_POST['pt_id'];
	$pt_headline = $_POST['pt_headline'];
	$pt_content = $_POST['pt_content'];
	$pt_dateup = $_POST['pt_dateup'];
	$pt_deadline = $_POST['pt_deadline'];
	$pt_link = $_POST['pt_link'];
	$pt_td_id = $_POST['pt_td_id'];
	$pt_pic = $_FILES["file_upload2"]["name"];
	$pt_pic_path  = $_FILES["file_upload2"]["tmp_name"];
	$date = date("dmY_his");
	

		if($pt_pic != ""){
			$last_pic = explode(".",$pt_pic);
			$pt_pic = $date."_5".".".$last_pic[1];
			}
		
		$sql = "update tb_promotion set 
					pt_headline = '$pt_headline', 
					pt_content = '$pt_content', 
					pt_dateup = '$pt_dateup', 
					pt_deadline = '$pt_deadline', 
					pt_link = '$pt_link', 
					pt_td_id = '$pt_td_id'";
		//echo $sql; exit();
		if($pt_pic != ""){
			$sql .=", pt_pic = '$pt_pic'";
		}
		$sql .=" where pt_id = '$pt_id'";
	//	echo $sql; exit();
		if(mysql_db_query($db_name,$sql)){
				if($pt_pic != ""){
		$sql.", pt_pic = '$pt_pic'";
			move_uploaded_file($pt_pic_path,"picproduct/".$pt_pic);
			
			} 

				?>
					<script type="text/javascript">
						alert("การแก้ไขข้อมูลสร็จสมบูรณ์");
						window.location.href="index.php";
					</script>
				<?php
	}else{
					?>
					<script type="text/javascript">
						alert("การแก้ไขข้อมูลล้มเหลว");
						window.location.href="form_edit_promotion.php?pt_id=<?=$pt_id?>";
					</script>
					<?php
		}
	
?>
</body>
</html>
