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
	$cm_id = $_POST['cm_id'];
	$cm_name = $_POST['cm_name'];
	$cm_user = $_POST['cm_user'];
	$cm_pass = $_POST['cm_pass'];
	$cm_tel = $_POST['cm_tel'];
	$cm_gender = $_POST['cm_gender'];
	$cm_accept_cate = $_POST['cm_accept_cate'];
		

		for($i=0;$i<count($_POST['cm_accept_cate']);$i++){
			$sql = "update tb_customer set 
			cm_name = '$cm_name',
			cm_user = '$cm_user',
			cm_pass = '$cm_pass', 
			cm_tel = '$cm_tel', 
			cm_gender = '$cm_gender', 
			cm_accept_cate = '".implode(',',$_POST['cm_accept_cate'])."' where cm_id = '$cm_id'";

		}if(mysql_db_query($db_name,$sql)){
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
						window.location.href="form_edit_member.php?cm_id=<?=$cm_id?>";
					</script>
					<?php
		}
	
?>
</body>
</html>
