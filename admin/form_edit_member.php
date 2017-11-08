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
<title>แก้ไขข้อมูลสมาชิก</title>
<script src="jquery-2.1.4.min.js"></script>
<script type="text/javascript"></script>

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
     	<div class="col-md-12"><img src="pic/banner.png" class="img-responsive" alt="Responsive image"></div>
        </div>
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
        <li><a href="index.php">จัดการโปรโมชั่น<span class="sr-only">(current)</span></a></li>
        <li><a href="manage_store.php">จัดการร้านค้า</a></li>
        <li><a href="manage_member.php">จัดการสมาชิก</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">โปรโมชั่นตามหมวดหมู่ <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index_category.php?pt_cate=เสริมอาหาร">เสริมอาหาร</a></li>
            <li><a href="index_category.php?pt_cate=อาหาร/เครื่องดื่ม">อาหาร/เครื่องดื่ม</a></li>
            <li><a href="index_category.php?pt_cate=เครื่องสำอาง">เครื่องสำอาง</a></li>
            <li><a href="index_category.php?pt_cate=กระเป๋า">กระเป๋า</a></li> 
            <li><a href="index_category.php?pt_cate=เครื่องประดับ">เครื่องประดับ</a></li>   
            <li><a href="index_category.php?pt_cate=เสื้อผ้า/ผ้าพันคอ">เสื้อผ้า/ผ้าพันคอ</a></li> 
            <li><a href="index_category.php?pt_cate=รองเท้่า">รองเท้า</a></li> 
            <li><a href="index_category.php?pt_cate=อุปกรณ์กีฬา">อุปกรณ์กีฬา</a></li> 
            <li><a href="index_category.php?pt_cate=เกม/ของเล่น">เกม/ของเล่น</a></li>           
            <li><a href="index_category.php?pt_cate=อุปกรณ์ไอที">อุปกรณ์ไอที</a></li> 
            <li><a href="index_category.php?pt_cate=สมาร์ทโฟน">สมาร์ทโฟน</a></li>
            <li><a href="index_category.php?pt_cate=เครื่องใช้ไฟฟ้า">เครื่องใช้ไฟฟ้า</a></li>   
          </ul>
        </li>
        <li><a href="manage_webboard.php">กระดานสนทนา</a></li>
        <li><a href="manage_contact.php">ที่ติดต่อเรา</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-left" role="search" name="form1" id="form1" method="post" action="index.php">
        <div class="form-group">
          <input type="text" name="p_search" id="p_search" class="form-control" placeholder="พิมพ์ชื่อโปรโมชัน">
        </div>
        <button class="btn btn-default" aria-label="Left Align" type="submit" name="b_search" id="b_search">
        
  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
</button>
      </form>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span></a>
          <ul class="dropdown-menu">
            <li><a href="manage_profile.php">จัดการข้อมูลส่วนตัว</a></li>
            <li><a href="logout.php">ออกจากระบบ</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
   		</div>
        <div class="container">
        <div class="col-md-0"></div>
        <div class="row">
     	<div class="col-md-12">
     	  <div align="center" class="style2">     	    
   	      <?php echo("สวัสดี คุณ ". $_SESSION["am_user"]); ?></p>
          <p></div>
        <form class="form-horizontal" action="edit_member.php" method="post" enctype="multipart/form-data" name="form" id="form">
     <?php
		 include("connect_db.php");
         $cm_id = $_REQUEST['cm_id'];	
		// $am_user = $_GET['am_user'];	
		
		 $sql = "select * from tb_customer where cm_id = '$cm_id'";
		 $rs = mysql_db_query($db_name,$sql);
		 $r = mysql_fetch_array($rs);         
     ?>
        <table class="table table-bordered" align="center">
			<tr>
            <td>
             	<div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">รหัสสมาชิก</label>
             	<div class="form-group">
    <label for="inputPassword3" class="col-sm-1 control-label"><?=$r["cm_id"]; ?></label>
          		</div>
          		</div>
                <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">ชื่อสมาชิก</label>
             	<div class="col-sm-4">  
                <input type="text" class="form-control" name="cm_name" id="cm_name" value="<?=$r["cm_name"]?>" required >
          		</div>
          		</div>
                <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">เพศ</label>
             	<div class="col-sm-4">  
                <?php
				$man = '';
				$femail = '';
					if($r['cm_gender'] == "ชาย"){ $man = "checked";
					}else{ $femail = "checked";}
			?>
			<input type="radio" name="cm_gender" value="ชาย" <?=$man ?>/>ชาย
			<input type="radio" name="cm_gender" value="หญิง" <?=$femail ?>/>หญิง
          		</div>
          		</div>
                <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">ชื่อเข้าระบบ</label>
             	<div class="col-sm-4">  
                <input type="text" class="form-control" name="cm_user" id="cm_user" value="<?=$r["cm_user"]?>" required>
          		</div>
          		</div>
                <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">รหัสผ่านเข้าระบบ</label>
             	<div class="col-sm-4">  
                <input type="text" class="form-control" name="cm_pass" id="cm_pass" value="<?=$r["cm_pass"]?>" required>
          		</div>
          		</div>
                <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">เบอร์โทรศัพท์</label>
             	<div class="col-sm-4">  
                <input type="text" pattern="([0-9]){10}" class="form-control" name="cm_tel" id="cm_tel" value="<?=$r["cm_tel"]?>">
          		</div>
          		</div>
                <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">หมวดหมู่ที่รับข้อมูล</label>
             	<div class="col-sm-5">  
                <?php
			$_array = explode(',',$r['cm_accept_cate']);
			$a1 = '';
			$a2 = '';
			$a3 = '';
			$a4 = '';
			$a5 = '';
			$a6 = '';
			$a7 = '';
			$a8 = '';
			$a9 = '';
			$a10 = '';
			$a11 = '';
			$a12 = '';
		foreach($_array as $id=>$key){
				if($key=='เสริมอาหาร'){
					$a1="checked";
				}if($key=='อาหาร/เครื่องดื่ม'){
					$a2="checked";
				}if($key=='เครื่องสำอาง'){
					$a3="checked";
				}if($key=='กระเป๋า'){
					$a4="checked";
				}if($key=='เครื่องประดับ'){
					$a5="checked";
				}if($key=='เสื้อผ้า/ผ้าพันคอ'){
					$a6="checked";
				}if($key=='รองเท้า'){
					$a7="checked";
				}if($key=='อุปกรณ์กีฬา'){
					$a8="checked";
				}if($key=='เกม/ของเล่น'){
					$a9="checked";
				}if($key=='เครื่องใช้ไฟฟ้า'){
					$a10="checked";	
				}if($key=='อุปกรณ์ไอที'){
					$a11="checked";	
				}if($key=='สมาร์ทโฟน'){
					$a12="checked";	
				}
		}	
			
		?>
		<input type="checkbox" name="cm_accept_cate[]" value="เสริมอาหาร" <?=$a1;?>/>เสริมอาหาร
		<input type="checkbox" name="cm_accept_cate[]" value="อาหาร/เครื่องดื่ม" <?=$a2;?>/>อาหาร/เครื่องดื่ม
		<input type="checkbox" name="cm_accept_cate[]" value="เครื่องสำอาง" <?=$a3;?>/>เครื่องสำอาง
		<input type="checkbox" name="cm_accept_cate[]" value="กระเป๋า" <?=$a4;?>/>กระเป๋า</br>
		<input type="checkbox" name="cm_accept_cate[]" value="เครื่องประดับ" <?=$a5;?>/>เครื่องประดับ
        <input type="checkbox" name="cm_accept_cate[]" value="เสื้อผ้า/ผ้าพันคอ" <?=$a6;?>/>เสื้อผ้า/ผ้าพันคอ
        <input type="checkbox" name="cm_accept_cate[]" value="รองเท้า" <?=$a7;?>/>รองเท้า
        <input type="checkbox" name="cm_accept_cate[]" value="อุปกรณ์กีฬา" <?=$a8;?>/>อุปกรณ์กีฬา
        </br>
        <input type="checkbox" name="cm_accept_cate[]" value="เกม/ของเล่น" <?=$a9;?>/>เกม/ของเล่น
        <input type="checkbox" name="cm_accept_cate[]" value="เครื่องใช้ไฟฟ้า" <?=$a10;?>/>เครื่องใช้ไฟฟ้า
        <input type="checkbox" name="cm_accept_cate[]" value="อุปการณ์ไอที" <?=$a10;?>/>อุปการณ์ไอที			        <input type="checkbox" name="cm_accept_cate[]" value="สมาร์ทโฟน" <?=$a10;?>/>สมาร์ทโฟน
          		</div>
          		</div>
                <div class="form-group">
    <div class="col-sm-offset-5 col-sm-5">
      <button type="submit" class="btn btn-success">แก้ไข</button> 
      <input type="hidden" name="cm_id" value="<?=$cm_id; ?>"> 
      <input type="button" class="btn btn-info" onclick="window.location.href='manage_member.php'" value="ยกเลิก">
    </div>
  </div>
                     </td>
                </tr>
		</table>
        </form>
     	<p>&nbsp;</p>
     	</div>
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