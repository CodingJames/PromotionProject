<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ตรวจสอบการล็อกอิน</title>
</head>

<body>
<?php
	include("connect_db.php");
	$cm_user = $_POST["cm_user"];
	$cm_pass = $_POST["cm_pass"];

		$sql = "select * from tb_customer where cm_user ='$cm_user' and cm_pass = '$cm_pass'"; 
		$rs = mysql_db_query($db_name,$sql);
		$rows = @mysql_num_rows($rs);
		//echo $sql;
		//exit();
		if($rows >= 1){
			if($r = mysql_fetch_array($rs)){
				
				$_SESSION["cm_id"]=$r['cm_id'];
				?>
					<script type="text/javascript">
						window.location.href="member/index.php";
					</script>
				<?php
			}
		}else{
			?>
            <script type="text/javascript">
				alert("ข้อมูลการล็อกอินไม่ถูกต้อง");
				window.history.back();
			</script>
            <?php
			}
			?>
</body>
</html>
