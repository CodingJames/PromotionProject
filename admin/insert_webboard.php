<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>เพิ่มกระทู้</title>
<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<?php
	include("connect_db.php");

$wb_name = $_POST['wb_name'];
$wb_detail = $_POST['wb_detail'];
$wb_username = $_SESSION["am_user"];


/*echo $wb_name;
echo $wb_detail;
echo $wb_username;
echo $wb_date;
exit();
*/
	
	if($wb_name == "" || $wb_detail == "" ){
				?>
		<script type="text/javascript">
			alert("กรุณากรอกให้ครบด้วย");
			window.location.href="manage_webboard.php";
		</script>
		<?php
		exit();	
	} 	 	 
		if($wb_username == "" ){
				?>
		<script type="text/javascript">
			alert("กรุณาล็อกอินเข้าสู่ระบบก่อนตั้งกระทู้");
			window.location.href="login.php";
		</script>
		<?php
		exit();	
	} 	 	 	 	 	
	if($wb_name != "" || $wb_detail != "" ){
		$sql = "INSERT INTO tb_webboard(wb_name, wb_detail, wb_date, wb_memid) 
		VALUES('$wb_name','$wb_detail',NOW(),'$wb_username') ";
		}
	//echo "บ้าไปแล้ว".$sql; exit();
	if(mysql_db_query($db_name,$sql)){
				?>
					<script type="text/javascript">
						alert("สร้างกระทู้เรียบร้อยแล้ว");
						window.location.href="manage_webboard.php";
					</script>
				<?php
				}else{
					?>
					<script type="text/javascript">
						alert("ไม่สามารถทำการสร้างกระทู้ได้");
						window.location.href="manage_webboard.php";
					</script>
					<?php
				}
			
?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>