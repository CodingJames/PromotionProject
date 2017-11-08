<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ปลดล็อค</title>
</head>

<body>
<?php
	include("connect_db.php");
	$td_user = $_GET["td_st"];
	
	
	$sql = "update tb_trader set td_status = 'unlock' where td_user = '$td_user'";
		
		if(mysql_db_query($db_name,$sql)){
				?>
					<script type="text/javascript">
						alert("ปลดล็อคเรียบร้อยแล้ว");
						window.location.href="manage_store.php";
					</script>
				<?php
		}else{
					?>
					<script type="text/javascript">
						alert("ไม่สามารถปลดล็อคได้");
						window.location.href="manage_store.php";
					</script>
					<?php
		}
?>
</body>
</html>
