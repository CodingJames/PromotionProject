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
<title>สำหรับร้านค้า</title>

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
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">HOME</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li><a href="promotion_me.php"><span class="style1">โปรโมชันของฉัน</a></span></li>        
        <li><a href="manage_detail.php"><span class="style1">แก้ไขข้อมูลส่วนตัว</a></span></li>
        <li><a href="webboard.php">Webboard<span class="sr-only">(current)</span></a></li>
        <li><a href="contact_admin.php">ที่ติดต่อเรา</a></li>
        <li><a href="logout.php">ออกจากระบบ</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  <img src="pic/banner.png" class="img-responsive" alt="Responsive image">
</nav>
</div>
</br>
<div class="container">
          <div class="row">
  		<div class="col-md-3">
        
        </div>
     	<div class="col-md-12">
        <div align="center" class="style2">     	    
   	      ข้อมูลร้านค้า</p>
          </div>
<form class="form-horizontal" action="edit_trader.php" method="post" enctype="multipart/form-data" name="form" id="form">
     <?php
		 include("connect_db.php");
         $td_user = $_SESSION['td_user'];	
				
		 $sql = "select * from tb_trader where td_user = '$td_user'";
		 $rs = mysql_db_query($db_name,$sql);
		 $r = mysql_fetch_array($rs);         
     ?>
        <table class="table table-bordered" align="center" >
			<tr>
            <td>
             	
                <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">รูปภาพของร้าน</label>
             	<div class="col-sm-5">  
                <img id="viewpic" alt="Picture Promotion" src = "../admin/piclogo/<?=$r["td_pic"]?>" width="150" height="150" />
                <input type="file" name="file_upload2" id="file_upload2" onChange="$('#viewpic')[0].src = window.URL.createObjectURL(this.files[0])" />
          		</div>
          		</div>
                <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">ชื่อร้านค้า</label>
             	<div class="col-sm-5">  
                <input type="textarea" class="form-control" name="td_shopname" id="td_shopname" value="<?=$r["td_shopname"]?>">
          		</div>
          		</div>
                <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">ชื่อ-นามสกุล</label>
             	<div class="col-sm-5">  
                <input type="text" class="form-control" name="td_name" id="td_name" value="<?=$r["td_name"]?>" required >
          		</div>
          		</div>
                <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">เบอร์โทรศัพท์</label>
             	<div class="col-sm-5">  
                <input type="text" pattern="([0-9]{10})" class="form-control" name="td_tel" id="td_tel" value="<?=$r["td_tel"]?>">
          		</div>
          		</div>
                <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">Username</label>
             	<div class="col-sm-5">  
                <input type="text" class="form-control" name="td_user" id="td_user" value="<?=$r["td_user"]?>">
          		</div>
          		</div>
                <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">Password</label>
             	<div class="col-sm-5">  
                <input type="text" class="form-control" name="td_pass" id="td_pass" value="<?=$r["td_pass"]?>">
          		</div>
          		</div>
                <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">หมวดหมู่ร้านค้า</label>
             	<div class="col-sm-5">                
               <select class="form-control" name="td_typeshop" required>
               
		<option value="เสริมอาหาร"<?php if($r['td_typeshop']=='เสริมอาหาร'){echo "selected";}?>>เสริมอาหาร</option>
		<option value="อาหาร/เครื่องดื่ม"<?php if($r['td_typeshop']=='อาหาร/เครื่องดื่ม'){echo "selected";}?>>อาหาร/เครื่องดื่ม</option>
		<option value="เครื่องสำอาง"<?php if($r['td_typeshop']=='เครื่องสำอาง'){echo "selected";}?>>เครื่องสำอาง</option>
		<option value="เครื่องประดับ"<?php if($r['td_typeshop']=='เครื่องประดับ'){echo "selected";}?>>เครื่องประดับ</option>
		<option value="เสื้อผ้า/ผ้าพันคอ"<?php if($r['td_typeshop']=='เสื้อผ้า/ผ้าพันคอ'){echo "selected";}?>>เสื้อผ้า/ผ้าพันคอ</option>
        <option value="รองเท้า"<?php if($r['td_typeshop']=='รองเท้า'){echo "selected";}?>>รองเท้า</option>
        <option value="อุปกรณ์กีฬา"<?php if($r['td_typeshop']=='อุปกรณ์กีฬา'){echo "selected";}?>>อุปกรณ์กีฬา</option>
        <option value="เกม/ของเล่น"<?php if($r['td_typeshop']=='เกม/ของเล่น'){echo "selected";}?>>เกม/ของเล่น</option>
        <option value="อุปกรณ์ไอที"<?php if($r['td_typeshop']=='อุปกรณ์ไอที'){echo "selected";}?>>อุปกรณ์ไอที</option>
        <option value="สมาร์ทโฟน"<?php if($r['td_typeshop']=='สมาร์ทโฟน'){echo "selected";}?>>สมาร์ทโฟน</option>
        <option value="เครื่องใช้ไฟฟ้า"<?php if($r['td_typeshop']=='เครื่องใช้ไฟฟ้า'){echo "selected";}?>>เครื่องใช้ไฟฟ้า</option>
			</select>
       			</div>
          		</div>
                  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-5">
      <button type="submit" class="btn btn-success">แก้ไข</button> 
      <input type="hidden" name="td_user" value="<?=$td_user; ?>"> 
      <button type="reset" class="btn btn-warning">ยกเลิก</button>
      <input type="button" class="btn btn-info" onclick="window.location.href='index.php'" value="หน้าแรก">
    </div>
  </div>
                     </td>
                </tr>
		</table>
        </form>
      </div>
       
  <div class="col-md-7" align="center">
  </div>
  <div class="col-md-2"></div>
</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>