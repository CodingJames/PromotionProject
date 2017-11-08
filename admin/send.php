<?php 
include 'sendClass.php';  // สำคัญ
$sms = new thsms();

include 'connect_db.php';
$pt_pic = $_GET['pt_pic'];


$sql1 = mysql_query("select * from tb_promotion where pt_pic = '$pt_pic'");
$r = mysql_fetch_array($sql1);
$pt_type = $r['pt_type'];

//$ex = str_replace(',',' ',$pt_type);
//echo $ex;


$sql2 = "select * from tb_customer where cm_accept_cate like '%$pt_type%'";
$rs = mysql_db_query($db_name,$sql2);

$rows = mysql_num_rows($rs);
 if(empty($rows)){
?>
	<script type="text/javascript">
		window.location.href="index.php";
	</script>
<?php
 }else{
while($r2 = mysql_fetch_array($rs)){	
$massage = $r['pt_content'];
$telSend = $r2['cm_tel'];
$adminTel = 'PROMOTION';

$sms->username   = 'shutjane';
$sms->password   = 'ebed71';
 
//$a = $sms->getCredit();
//var_dump($a);
 
$b = $sms->send( $adminTel, $telSend, $massage);
//var_dump($b);

}
 }
?>
<script type="text/javascript">
		window.location.href="index.php";
</script>