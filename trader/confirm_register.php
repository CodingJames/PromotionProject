<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>สมัครสมาชิก</title>
<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<?php
	include("connect_db.php");
	$cm_user = $_POST["cm_user"];
	$cm_pass = $_POST["cm_pass"];
	$cm_name = $_POST["cm_name"];
	$cm_tel = $_POST["cm_tel"];
	$cm_gender = $_POST["cm_gender"];	 
		 	 	 	 	 	
	for($i=0;$i<count($_POST['pt_type']);$i++){
		$sql="insert into tb_customer(
			  cm_id
			  ,cm_user
			  ,cm_pass
			  ,cm_name
			  ,cm_gender
			  ,cm_tel
			  ,cm_accept_cate
			  )values(
			  ''
			  ,'$cm_user'
			  ,'$cm_pass'
			  ,'$cm_name'
			  ,'$cm_gender'
			  ,'$cm_tel'
			  ,'".implode(",",$_POST["pt_type"])."'
			  )";
	}
	if(mysql_db_query($db_name,$sql)){
				?>
					<script type="text/javascript">
						alert("สมัครสมาชิกเสร็จแล้ว กรุณาล็อกอินเพื่อเข้าสู่ระบบ");
						window.location.href="index.php";
					</script>
				<?php
				}else{
					?>
					<script type="text/javascript">
						alert("ไม่สามารถสมัครสมาชิกได้ มีข้อมูลนี้ในระบบแล้ว");
						window.location.href="index.php";
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