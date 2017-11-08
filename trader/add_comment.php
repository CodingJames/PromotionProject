<?php
	ob_start();
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
include('connect_db.php');

$wb_id = $_POST['wb_id'];
$cm_memid = $_POST['td_user'];
$cm_text = $_POST['cm_text'];

			$sql="insert into tb_comment(
				  cm_id
				  ,cm_text
				  ,cm_memid
				  ,cm_date
                  ,wb_id
				  )values(
				  ''
				  ,'$cm_text'
				  ,'$cm_memid'
				  ,NOW()
                  ,'$wb_id'
				  )";
				// echo $sql; exit();
	if(mysql_db_query($db_name,$sql)){
		if($wb_id != ""){
			//******Update การตอบกระทู้ ********//
		$sqlup = "update tb_webboard set reply = reply + 1 where wb_id = '$wb_id' ";		
	}
		if(mysql_db_query($db_name,$sqlup)){
			
				?>
					<script type="text/javascript">
						window.location.href="topic_detail.php?wb_id=<?=$wb_id ?>";
					</script>
				<?php
	}else{
					?>
					<script type="text/javascript">
						alert("unsuccessful");
						window.location.href="topic_detail.php?wb_id=<?=$wb_id ?>";
					</script>
	<?php
	}	
}
	?>	  
</body>
</html>
