<?php
include('connect_db.php');

$cm_id = $_POST['cm_id'];
$wb_id = $_POST['wb_id'];


$st = mysql_query("DELETE FROM tb_comment WHERE cm_id = $cm_id");

if($st){
	?>
	<script type="text/javascript">
		alert("ลบความคิดเห็นแล้ว");
		window.location = 'topic_detail.php?wb_id=<?=$wb_id?>';
	</script>
	<?php
}

?>