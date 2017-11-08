<?php
include('connect_db.php');

$wb_id = $_REQUEST['wb_id'];

$st = mysql_query("DELETE FROM tb_webboard WHERE wb_id = $wb_id");

if($st){
	$delete1 = mysql_query("DELETE FROM tb_comment WHERE wb_id = $wb_id");
  }
  if($delete1){
	?>
	<script type="text/javascript">
		alert("ลบข้อมูลเรียบร้อย");
		window.location = 'webboard_me.php';
	</script>
	<?php
}

?>