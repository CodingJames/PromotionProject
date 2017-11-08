<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ผู้จัดการระบบ</title>
<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<?php
	include("connect_db.php");
	$am_name = $_POST["am_name"];
	$am_phone = $_POST["am_phone"];
	$am_user = $_POST["am_user"];
	$am_pass = $_POST["am_pass"];
	
	 	 	 	 	 	 	

		$sql="insert into tb_admin(
			  am_name
			  ,am_phone
			  ,am_user
			  ,am_pass
			  )values(
			  '$am_name'
			  ,'$am_phone'
			  ,'$am_user'
			  ,'$am_pass'
			  )";

	if(mysql_db_query($db_name,$sql)){
				?>
					<script type="text/javascript">
						alert("เพิ่มผู้ดูแลระบบเรียบร้อยแล้ว");
						window.location.href="manage_profile.php";
					</script>
				<?php
				}else{
					?>
					<script type="text/javascript">
						alert("ไม่สามารถเพิ่มผู้ดูแลระบบได้");
						window.location.href="manage_profile.php";
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