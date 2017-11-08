<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
<!--
.style2 {
	font-size: 18px;
	font-weight: bold;
	color: #006600;
}
-->
</style>
</head>

<body>
 <a data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">LOGIN</a>
 
  
  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     </p> </div>
      <div class="modal-body">
<form class="form-horizontal" action="check_login.php" method="post" enctype="multipart/form-data" name="form" id="form">
  <td colspan="2" align="center"><div align="center"><span class="style2">LOGIN</span></div>
    </p></td>
      </tr>
  	<tr>
    	<td>
        <div class="form-group">
    <label for="inputEmail3" class="col-sm-5 control-label">Username</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="cm_user" id="cm_user" placeholder="พิมพ์ชื่อเข้าสู่ระบบ">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">PASSWORD</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" name="cm_pass" id="cm_pass" placeholder="พิมพ์รหัสผ่าน">
    </div>
  </div>
      <div class="form-group">
    <div class="col-sm-offset-5 col-sm-5">
      <a href="../form_register_member.php">สมัครสมาชิกใหม่</a>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-5">
      <button type="submit" class="btn btn-success">LOGIN</button>
      <button type="reset" class="btn btn-warning">CANCEL</button>
    </div>
  </div>

        </td>
</form>
      </div>

    </div>
  </div>
</div>
</body>
</html>
