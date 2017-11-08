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
	$am_user = $_POST["am_username"];
	$am_pass = $_POST["am_password"];

		$sql = "select * from tb_admin where am_user ='$am_user' and am_pass = '$am_pass'"; 
		$rs = mysql_db_query($db_name,$sql);
		$rows = @mysql_num_rows($rs);
		//echo $sql;
		//exit();
		if($rows >= 1){
			if($r = mysql_fetch_array($rs)){
				
				$_SESSION["am_user"]=$am_user;
				?>
					<script type="text/javascript">
						window.location.href="index.php";
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
