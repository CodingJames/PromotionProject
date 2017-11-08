<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ยืนยันการสมัครสมาชิก</title>
<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<?php
	include("connect_db.php");
	
	$td_pic = $_FILES["td_pic"]["name"];
	$td_pic_path = $_FILES["td_pic"]["tmp_name"];
    $td_user = $_POST["td_user"];
	$td_pass = $_POST["td_pass"];
	$td_name = $_POST["td_name"];
	$td_shopname = $_POST["td_shopname"];
	$td_tel = $_POST["td_tel"];
	$td_typeshop = $_POST["td_typeshop"];
	$date = date("dmY_his");

    	if($td_pic != ""){
		$last_pic = explode(".",$td_pic);
		$td_pic = $date."_5".".".$last_pic[1];
	}	 	 	 	 	 	 	
		
		$sql="insert into tb_trader(
			  td_id
			  ,td_user
              ,td_pass
			  ,td_pic
			  ,td_name
			  ,td_shopname
			  ,td_typeshop
			  ,td_tel
			  ,td_status
			   )values(
			  ''
			  ,'$td_user'
              ,'$td_pass'
			  ,'$td_pic'
			  ,'$td_name'
			  ,'$td_shopname'
			  ,'$td_typeshop'
			  ,'$td_tel'
			  ,'lock'
			  )";
	//echo $sql; exit();
   if(mysql_db_query($db_name,$sql)){
		if($td_pic != ""){
			//echo $td_pic_path,"../picproduct/".$picproduct;
			move_uploaded_file($td_pic_path,"../admin/piclogo/".$pt_pic);
				}
				?>
					<script type="text/javascript">
						alert("ทำการสมัครสมาชิกเรียบร้อยแล้ว กรุณาล็อกอินเข้าสู่ระบบ");
						window.location.href="../index.php";
					</script>
				<?php
				}else{
					?>
					<script type="text/javascript">
						alert("ไม่สามารถสมัครสมาชิกได้");
						window.location.href="../index.php";
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