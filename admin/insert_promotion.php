<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>เพิ่มโปรโมชั่น</title>
<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<?php
	include("connect_db.php");
	$pt_headline = $_POST["pt_headline"];
	$pt_content = $_POST["pt_content"];
	$pt_pic = $_FILES["pt_pic"]["name"];
	$pt_pic_path = $_FILES["pt_pic"]["tmp_name"];
    $pt_dateline = date("Y-m-d");
	$pt_link = $_POST["pt_link"];
	$pt_td_id = $_POST["td_name"];
	$pt_type = $_POST["pt_type"];
	$date = date("dmY_his");

   for($i=0;$i<count($_POST['pt_type']);$i++){
    	if($pt_pic != ""){
		$last_pic = explode(".",$pt_pic);
		$pt_pic = $date."_5".".".$last_pic[1];
	}	 	 	 	 	 	 	
		
		$sql="insert into tb_promotion(
			  pt_id
			  ,pt_headline
              ,pt_content
			  ,pt_pic
			  ,pt_dateup
			  ,pt_deadline
			  ,pt_link
			  ,pt_td_id
			  ,pt_type
			  )values(
			  ''
			  ,'$pt_headline'
              ,'$pt_content'
			  ,'$pt_pic'
              ,NOW()
			  ,'$pt_dateline'
			  ,'$pt_link'
			  ,'$pt_td_id'
			  ,'$pt_type'
			  )";
	//echo $sql; exit();
   }if(mysql_db_query($db_name,$sql)){
		if($pt_pic != ""){
			//echo $pt_pic_path,"../picproduct/".$picproduct;
			move_uploaded_file($pt_pic_path,"picproduct/".$pt_pic);
				}
				?>
					<script type="text/javascript">
						alert("เพิ่มโปรโมชั่นเรียบร้อยแล้ว");
						window.location.href="send.php?pt_pic=<?=$pt_pic ?>";
					</script>
				<?php
				}else{
					?>
					<script type="text/javascript">
						alert("ไม่สามารถเพิ่มโปรโมชั่นได้");
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