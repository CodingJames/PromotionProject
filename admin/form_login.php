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
	color: #FF6666;
}
.style4 {color: #FF3333}
.style5 {color: #009900}
-->
</style>
</head>

<body>
 <a data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">ADMINISTRATOR</a>
 
  
  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     </p> </div>
      <div class="modal-body">
<form class="form-horizontal" action="admin/check_Login_admin.php" method="post" enctype="multipart/form-data" name="form" id="form">
  <td colspan="2" align="center"><div align="center"><span class="style2"><span class="style5">ADMINISTRATOR &nbsp;&nbsp;LOGIN</span></span></div>
    </p></td>
      </tr>
  	<tr>
    	<td>
        <div class="form-group">
    <label for="inputEmail3" class="col-sm-5 control-label">USERNAME</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="am_username" id="am_username" placeholder="พิมพ์ชื่อเข้าสู่ระบบ" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">PASSWORD</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" name="am_password" id="am_password" placeholder="พิมพ์รหัสผ่าน" required="required">
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
