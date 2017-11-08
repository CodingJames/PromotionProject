<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	include("connect_db.php");
    $cm_text = $_POST["cm_text"];	
	$cm_id = $_REQUEST["cm_id"];
	$wb_id = $_REQUEST["wb_id"];	
	//echo "i want to go home".$wb_id; exit();
	//echo "i want to go home".$cm_id; exit();

	if($cm_text == "" || $cm_id == "" ){
		
?>
		<script type="text/javascript">
			alert("คุณกรอกข้อมูลไม่ครบ");
			window.location.href="form_edit_comment.php?cm_id=<?=$cm_id; ?>";
		</script>
		<?php
		exit();	
	} 	 	 	 	 	 	 	
	if($cm_text != "" || $cm_id != ""){
		$sql="update tb_comment set cm_text = '$cm_text' where cm_id = '$cm_id' ";
	}
	
	//echo $wb_id; exit();
if(mysql_db_query($db_name,$sql)){
				?>
					<script type="text/javascript">
						alert("การแก้ไขข้อมูลเสร็จสมบูรณ์");
						window.location.href="topic_detail.php?wb_id=<?=$wb_id?>";
					</script>
				<?php
		}else{
					?>
					<script type="text/javascript">
						alert("การแก้ไขข้อมูลล้มเหลว");
						window.location.href="form_edit_comment.php?cm_id=<?=$cm_id?>";
					</script>
					<?php
		}

?>
</body>
</html>
