<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>แก้ไขข้อมูลผู้ดูแลระบบ</title>
</head>

<body>
<?php
	include("connect_db.php");
	$am_name = $_POST["am_name"];
    $am_user = $_POST["am_user"];	
    $am_phone = $_POST["am_phone"];	
    $am_pass = $_POST["am_pass"];	

	if($am_name == "" || $am_user == "" || $am_phone == "" || $am_pass == ""  ){
		
?>
		<script type="text/javascript">
			alert("คุณกรอกข้อมูลไม่ครบ");
			window.location.href="form_edit_admin.php?am_user=<?=$am_user; ?>";
		</script>
		<?php
		exit();	
	} 	 	 	 	 	 	 	
	if($am_name != "" || $am_user != "" || $am_phone != "" || $am_pass != ""  ){
		$sql="update tb_admin set am_name = '$am_name', am_phone = '$am_phone' , am_pass = '$am_pass' where am_user = '$am_user' ";
	}
	
	//echo $sql; exit();
if(mysql_db_query($db_name,$sql)){
				?>
					<script type="text/javascript">
						alert("การแก้ไขข้อมูลเสร็จสมบูรณ์");
						window.location.href="manage_profile.php";
					</script>
				<?php
		}else{
					?>
					<script type="text/javascript">
						alert("การแก้ไขข้อมูลล้มเหลว");
						window.location.href="form_edit_profile.php?am_user=<?=$am_user?>";
					
					</script>
					</script>
					<?php
		}

?>
</body>
</html>
