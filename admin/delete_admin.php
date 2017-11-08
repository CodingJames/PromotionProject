<?php
include('connect_db.php');

$am_user = $_REQUEST['am_user'];
//echo $am_user; exit();

$st = mysql_query("DELETE FROM tb_admin WHERE am_user = '$am_user'");

//$sql = "DELETE FROM tb_admin WHERE am_user = $am_user";
//echo $sql; exit();
if($st){
	?>
	<script type="text/javascript">
		alert("complete");
		window.location = 'manage_profile.php';
	</script>
	<?php
}

?>