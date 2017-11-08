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
	$td_user = $_POST["td_user"];
	$td_pass = $_POST["td_pass"];

		$sql = "select * from tb_trader where td_user ='$td_user' and td_pass = '$td_pass'"; 
		//echo $sql; exit();
		$rs = mysql_db_query($db_name,$sql);
		$rows = @mysql_num_rows($rs);
		
		
		if($rows >= 1){
			if($r = mysql_fetch_array($rs)){
				
				$_SESSION["td_user"]=$r['td_user'];
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
