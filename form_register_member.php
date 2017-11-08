<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Notify Promotions</title>

    <!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
<!--
body {
	background-image: url(pic/bg.gif);
}
.style2 {
	font-size: 18px;
	color: #FF3300;
	font-weight: bold;
}
-->
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
  <body>
  		<div class="container">
        <div class="row">
        <div class="col-md-12">
 
 		<div class="navbar navbar-default">  
       <ul class="nav nav-tabs">
      	  <li role="presentation" class="active"><a href="index.php">HOME</a></li>
          <li role="presentation"><?php include("form_login.php");?></li>
          <li role="presentation"><?php include("trader/form_login_trader.php");?></li>     
          <li role="presentation"><?php include("admin/form_login.php");?></li>
	 	        
      </ul>
      	<img src="admin/pic/banner.png" class="img-responsive" alt="Responsive image">	
		
        </div>
		
        <div class="container">
        <div class="row">
        <div class="col-md-3" align="left">
        
        </div>
       
     	<div class="col-md-6">
     	
        <form class="form-horizontal" action="confirm_register.php" method="post" enctype="multipart/form-data" name="form" id="form">
  <table class="table table-bordered" >
      <tr bgcolor="#FF9966">
      <td colspan="2" align="center"><span class="style1">สมัครสมาชิก</span></td>
      </tr>
  	<tr>
    	<td>
     <div class="form-group">
    <label for="inputEmail3" class="col-sm-5 control-label">Username</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="cm_user" id="cm_user" placeholder="พิมพ์ชื่อเข้าสู่ระบบ" required>
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-5 control-label">Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" name="cm_pass" id="cm_pass" placeholder="พิมพ์รหัสผ่าน" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">เพศ</label>
    <div class="col-sm-5">     
         <select class="form-control" name="cm_gender" required>
         	<option value="">เลือกเพศ</option>
      		<option value="หญิง">หญิง</option>
      		<option value="ชาย">ชาย</option>
    	</select>
     
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-5 control-label">ชื่อ-นามสกุล</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="cm_name" id="cm_name" placeholder="ชื่อ-นามสกุล" required>
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-5 control-label">เบอร์โทรศัพท์</label>
    <div class="col-sm-5">
      <input type="text" pattern="([0-9]){10}" class="form-control" name="cm_tel" id="cm_tel" placeholder="0899999999"required="required">
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
        <div class="row">
  <div class="col-md-3">
  
  </div>
  <div class="col-md-7" align="center">
  </div>
  <div class="col-md-0"></div>
</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>