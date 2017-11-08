<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	color: #009900;
}
-->
</style>
</head>

<body>
 <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">&nbsp;&nbsp;<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;สร้างกระทู้&nbsp;&nbsp;</button>
 
  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
<form class="form-horizontal" action="insert_webboard.php" method="post" enctype="multipart/form-data" name="form" id="form">
<?php 
	include("connect_db.php");
	$wb_username = $_SESSION["cm_id"];
	$sql = "select * from tb_customer where cm_id = '$wb_username'";
	$rs = mysql_db_query($db_name,$sql);
	while ($r = mysql_fetch_array($rs)){
	
?>
  <table class="table" >
      <tr>
      <td colspan="2" align="center"><span class="style1">สร้างกระทู้</span></td>
      </tr>
  	<tr>
    	<td>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-5 control-label">หัวข้อ</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="wb_name" id="wb_name" placeholder="หัวข้อกระทู้" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">รายละเอียด</label>
    <div class="col-sm-5">
      
      <textarea class="form-control" rows="5" name="wb_detail" id="wb_detail" placeholder="รายละเอียดของกระทู้" required="required"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-5">
      <button type="submit" class="btn btn-info">สร้างกระทู้
      <input type="hidden" name="wb_user" value="<?=$r['cm_user']?>">
      </button> 
      <button type="reset" class="btn btn-warning">ยกเลิก</button>
    </div>
  </div>
        </td>
   </tr>
</table>
<?php
	}
?>

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่างนี้</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
