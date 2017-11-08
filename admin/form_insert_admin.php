<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <button type="button" class="btn btn-info " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">&nbsp;&nbsp;<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;เพิ่มผู้ดูแลระบบ&nbsp;&nbsp;</button>
 
  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
<form class="form-horizontal" action="insert_admin.php" method="post" enctype="multipart/form-data" name="form" id="form">
  <table class="table" >
      <tr>
      <td colspan="2" align="center"><span class="style3">เพิ่มผู้ดูแลระบบ</span></td>
      </tr>
  	<tr>
    	<td>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-5 control-label">ชื่อผู้ดูแลระบบ</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="am_name" id="am_name" placeholder="พิมพ์ชื่อผู้ดูแลระบบ" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">เบอร์โทรศัพท์</label>
    <div class="col-sm-5">
      <input type="text" pattern="([0-9]){10}" class="form-control" name="am_phone" id="am_phone" placeholder="0899999999" required="required">
    </div>
  </div>
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">Username</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="am_user" id="am_user" placeholder="พิมพ์ Username" required="required">
    </div>
  </div>
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" name="am_pass" id="am_pass" placeholder="พิมพ์ Password" required="required">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-5">
      <button type="submit" class="btn btn-info">บันทึก</button>
      <button type="reset" class="btn btn-warning">ยกเลิก</button>
    </div>
  </div>
        </td>
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
