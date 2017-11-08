<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ลบหมวดหมู่</title>
</head>

<body>
<?php
	include("connect_db.php");
	
$tp_id = $_POST['tp_id'];
$sql = mysql_query("DELETE FROM tb_type where tp_id = $tp_id");
	
	if($sql){
		?>
        <script type="text/javascript">
			alert("ลบข้อมูลหมวดหมู่เรียบร้อยแล้ว");
			window.location = 'manage_category.php';
		</script>
        <?php
		}
?>


</body>
</html>
