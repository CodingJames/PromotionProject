<?php
	session_start();
	ob_start();
?>
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
	
	$inform_pic = $_FILES["inform_pic"]["name"];
	$inform_pic_path = $_FILES["inform_pic"]["tmp_name"];
    $inform_content = $_POST["inform_content"];
	$date = date("dmY_his");
	$inform_trader = $_SESSION['td_user'];

    	if($inform_pic != ""){
		$last_pic = explode(".",$inform_pic);
		$inform_pic = $date."_5".".".$last_pic[1];
	}	 	 	 	 	 	 	
		
		$sql="insert into tb_inform(
			  inform_id
			  ,inform_content
              ,inform_pic
			  ,inform_trader
			  ,inform_date
			  ,inform_status
			   )values(
			  ''
			  ,'$inform_content'
              ,'$inform_pic'
			  ,'$inform_trader'
			  ,NOW()
			  ,'0'
			  )";
	//echo $sql; exit();
   if(mysql_db_query($db_name,$sql)){
		if($inform_pic != ""){
			//echo $inform_pic_path,"informpic1".$inform_pic; exit();
			move_uploaded_file($inform_pic_path,"informpic/".$inform_pic);
				}
				?>
					<script type="text/javascript">
						alert("แจ้งการโอนเงินเรียบร้อยแล้ว");
						window.location.href="contact_admin.php";
					</script>
				<?php
				}else{
					?>
					<script type="text/javascript">
						alert("ไม่สามารถแจ้งการโอนเงินได้");
						window.location.href="contact_admin.php";
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