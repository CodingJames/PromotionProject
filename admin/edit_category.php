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
	$tp_id = $_POST['tp_id'];
	$tp_name = $_POST['tp_name'];
			$sql = "update tb_type set 
			tp_name = '$tp_name'
			where tp_id = '$tp_id'";
	if(mysql_db_query($db_name,$sql)){
		?>
					<script type="text/javascript">
						alert("การแก้ไขข้อมูลสร็จสมบูรณ์");
						window.location.href="manage_category.php";
					</script>
				<?php
	}else{
					?>
					<script type="text/javascript">
						alert("การแก้ไขข้อมูลล้มเหลว");
						window.location.href="form_edit_category.php?tp_id=<?=$tp_id?>";
					</script>
					<?php
		}
	
?>
</body>
</html>
