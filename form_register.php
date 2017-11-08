<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
<!--
.style1 {
	color: #003300;
	font-weight: bold;
}
-->
</style>
</head>

<body>
 <a data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">REGISTER</a>
 
  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     </p> </div>
      <div class="modal-body">
<form class="form-horizontal" action="confirm_register.php" method="post" enctype="multipart/form-data" name="form" id="form">
  <table bordercolor="#BAF398" class="table table-bordered">
      <tr>
      <td colspan="2" align="center" bgcolor="#B7FFB7"><span class="style1">สมัครสมาชิก</span></td>
      </tr>
  	<tr>
    	<td>
	<div class="form-group">
    <label for="inputEmail3" class="col-sm-5 control-label">Username</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="cm_user" id="cm_user" placeholder="พิมพ์ชื่อเข้าสู่ระบบ" required="required">
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-5 control-label">Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" name="cm_pass" id="cm_pass" placeholder="พิมพ์รหัสผ่าน" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">เพศ</label>
    <div class="col-sm-5">     
         <select class="form-control" name="cm_gender">
         	<option value="0">เลือกเพศ</option>
      		<option value="หญิง">หญิง</option>
      		<option value="ชาย">ชาย</option>
    	</select>
     
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-5 control-label">ชื่อ-นามสกุล</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="cm_name" id="cm_name" placeholder="ชื่อ-นามสกุล" required="required">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-5 control-label">เบอร์โทรศัพท์</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="cm_tel" id="cm_tel" placeholder="เบอร์โทรศัพท์"required="required">
    </div>
    </div>
    <div class="form-group">
    <label for="input1" class="col-sm-5 control-label">หมวดหมู่ของสินค้า</label>
    <div class="col-sm-6">
      <input type="checkbox" name="pt_type[]" value="เสริมอาหาร"/>เสริมอาหาร
		<input type="checkbox" name="pt_type[]" value="อาหาร/เครื่องดื่ม"/>อาหาร/เครื่องดื่ม</br>
		<input type="checkbox" name="pt_type[]" value="เครื่องสำอาง"/>เครื่องสำอาง
		<input type="checkbox" name="pt_type[]" value="กระเป๋า"/>กระเป๋า
		<input type="checkbox" name="pt_type[]" value="เครื่องประดับ"/>เครื่องประดับ</br>
        <input type="checkbox" name="pt_type[]" value="เสื้อผ้า/ผ้าพันคอ"/>เสื้อผ้า/ผ้าพันคอ
        <input type="checkbox" name="pt_type[]" value="รองเท้า"/>รองเท้า
        <input type="checkbox" name="pt_type[]" value="อุปกรณ์กีฬา"/>อุปกรณ์กีฬา
        <input type="checkbox" name="pt_type[]" value="เกม/ของเล่น"/>เกม/ของเล่น
        <input type="checkbox" name="pt_type[]" value="อุปกรณ์ไอที"/>อุปกรณ์ไอที
        <input type="checkbox" name="pt_type[]" value="สมาร์ทโฟน"/>สมาร์ทโฟน
        <input type="checkbox" name="pt_type[]" value="เครื่องใช้ไฟฟ้า"/>เครื่องใช้ไฟฟ้า
    </div>
  </div>
    
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-10">
      <p>
  <p>
  <button type="submit" class="btn btn-primary btn-sm">สมัครสมาชิก</button>
  <button type="reset" class="btn btn-default btn-sm">ยกเลิก</button>
</p>
</p>
    </div>
  </div>
          </td>
   </tr>
</table>
</form>
      </div>

    </div>
  </div>
</div>
</body>
</html>
