<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ลบโปรโมชัน</title>
</head>

<body>
<?php
	include("connect_db.php");
	
$pt_id = $_POST['pt_id'];
$result = mysql_query("select * from tb_promotion where pt_id ='$pt_id'");
$dbarr = mysql_fetch_array($result);
$filepic = $dbarr['pt_pic'];
unlink("../admin/picproduct/".$filepic);

$sql = mysql_query("DELETE FROM tb_promotion where pt_id = $pt_id");
	
	if($sql){
		?>
        <script type="text/javascript">
			alert("ลบข้อมูลโปรโมชันเรียบร้อยแล้ว");
			window.location = 'promotion_me.php';
		</script>
        <?php
		}
?>


</body>
</html>
