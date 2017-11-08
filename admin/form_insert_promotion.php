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
 <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">&nbsp;&nbsp;<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;Add Promotion&nbsp;&nbsp;</button>
 
 
  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
<form class="form-horizontal" action="insert_promotion.php" method="post" enctype="multipart/form-data" name="form" id="form">
  <table class="table" >
      <tr>
      <td colspan="2" align="center"><span class="style1">เพิ่มโปรโมชั่น</span></td>
      </tr>
  	<tr>
    	<td><span class="style1">
  <div class="form-group">
    <label for="input2" class="col-sm-5 control-label">เลือกรูปภาพ</label>
    <div class="col-sm-5">
      <input type="file" id="pt_pic" name="pt_pic">
    </div>
  </div>
  <div class="form-group">
    <label for="input1" class="col-sm-5 control-label">ชื่อโปรโมชั่น</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="pt_headline" id="pt_headline" placeholder="ชื่อโปรโมชั่น" required="required">
    </div>
  </div>
    <div class="form-group">
    <label for="input1" class="col-sm-5 control-label">รายละเอียด</label>
    <div class="col-sm-6">    
      <textarea class="form-control" rows="5" name="pt_content" id="pt_content" placeholder="รายละเอียด" required="required"></textarea>
    </div>
  </div>
   <div class="form-group">
    <label for="input1" class="col-sm-5 control-label">หมวดหมู่โปรโมชัน</label>
    <div class="col-sm-5">
    <select class="form-control" name="pt_type" required>
    		<option value="">เลือกหมวดหมู่สินค้า</option>
			<option value="เสริมอาหาร">เสริมอาหาร</option>
			<option value="อาหาร/เครื่องดื่ม">อาหาร/เครื่องดื่ม</option>
			<option value="เครื่องสำอาง">เครื่องสำอาง</option>
			<option value="กระเป๋า">กระเป๋า</option>
			<option value="เครื่องประดับ">เครื่องประดับ</option>
            <option value="เสื้อผ้า/ผ้าพันคอ">เสื้อผ้า/ผ้าพันคอ</option>
            <option value="รองเท้า">รองเท้า</option>
            <option value="อุปกรณ์กีฬา">อุปกรณ์กีฬา</option>
            <option value="เกม/ของเล่น">เกม/ของเล่น</option>
            <option value="อุปกรณ์ไอที">อุปกรณ์ไอที</option>
            <option value="สมาร์ทโฟน">สมาร์ทโฟน</option>
            <option value="เครื่องใช้ไฟฟ้า">เครื่องใช้ไฟฟ้า</option>
      </select>
    </div>
  </div>
    <div class="form-group">
    <label for="input1" class="col-sm-5 control-label">หมดอายุ</label>
    <div class="col-sm-5">
      <input type="date" class="form-control" name="pt_dateline" id="pt_dateline" placeholder="วันที่หมดอายุ" required="required">
    </div>
  </div>
    <div class="form-group">
    <label for="input1" class="col-sm-5 control-label">ลิงค์ข้อมูล</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="pt_link" id="pt_link" placeholder="ลิงค์ที่อยู่เว็บไซต์" required="required">
    </div>
  </div>
    <div class="form-group">
    <label for="input1" class="col-sm-5 control-label">ร้านค้า</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="td_name" id="td_name" 
      placeholder="ชื่อร้านค้า" required="required">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-5">
      <button type="submit" class="btn btn-info">เพิ่มข้อมูล</button>
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
