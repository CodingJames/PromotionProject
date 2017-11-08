<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Promotion</title>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #006600;
}
-->
</style>
</head>

<body>
 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">&nbsp;&nbsp;<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;แจ้งโอนเงิน&nbsp;&nbsp;</button>
 
 
  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
<form class="form-horizontal" action="insert_inform.php" method="post" enctype="multipart/form-data" name="form" id="form">
  <table class="table" >
      <tr>
      <td colspan="2" align="center"><span class="style1">แจ้งการโอนเงิน</span></td>
      </tr>
  	<tr>
    	<td><span class="style1">
  <div class="form-group">
    <label for="input2" class="col-sm-5 control-label">เพิ่มหลักฐานการโอน</label>
    <div class="col-sm-5">
      <input type="file" id="inform_pic" name="inform_pic">
    </div>
  </div>
    <div class="form-group">
    <label for="input1" class="col-sm-5 control-label">รายละเอียด</label>
    <div class="col-sm-5">
      <textarea class="form-control" name="inform_content" id="inform_content" placeholder="รายละเอียดการโอนเงิน" required="required"></textarea>
    </div>
  </div>
   
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-5">
      <button type="submit" class="btn btn-info">แจ้งโอน</button>
      <button type="reset" class="btn btn-warning">ยกเลิก</button>
    </div>
  </div>
       </span> </td>
   </tr>
</table>
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
