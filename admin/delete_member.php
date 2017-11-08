<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ลบสมาชิก</title>
</head>

<body>
<?php
	include("connect_db.php");
	
$cm_id = $_POST['cm_id'];
$sql = mysql_query("DELETE FROM tb_customer where cm_id = $cm_id");
	
	if($sql){
		?>
        <script type="text/javascript">
			alert("ลบข้อมูลสมาชิกเรียบร้อยแล้ว");
			window.location = 'manage_member.php';
		</script>
        <?php
		}
?>


</body>
</html>
