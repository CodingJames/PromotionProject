<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ลบร้านค้า</title>
</head>

<body>
<?php
	include("connect_db.php");
	
$td_id = $_POST['td_id'];
$result = mysql_query("select * from tb_trader where td_id ='$td_id'");
$dbarr = mysql_fetch_array($result);
$filepic = $dbarr['td_pic'];
unlink("piclogo/".$filepic);

$sql = mysql_query("DELETE FROM tb_trader where td_id = $td_id");
	
	if($sql){
		?>
        <script type="text/javascript">
			alert("ลบข้อมูลร้านค้าเรียบร้อยแล้ว");
			window.location = 'manage_store.php';
		</script>
        <?php
		}
?>


</body>
</html>
