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
      <li><a href="promotion_me.php">โปรโมชันของฉัน</a></li>        
        <li><a href="manage_detail.php">แก้ไขข้อมูลส่วนตัว</a></li>
        <li><a href="webboard.php">Webboard<span class="sr-only">(current)</span></a></li>
        <li><a href="contact_admin.php">ที่ติดต่อเรา</a></li>
        <li><a href="logout.php">ออกจากระบบ</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  <img src="pic/banner.png" class="img-responsive" alt="Responsive image">
</nav>
</div>    
 <div class="container">
        <div class="col-md-0"></div>
        <div class="row">
     	<div class="col-md-12">
     	  <div align="center" class="style2">     	    
          <p><?php 
		  include ("connect_db.php");
		  $td_id2= $_SESSION['td_user'];
		
			$sql2 = "select * from tb_trader where td_user = '$td_id2' ";
		
			$rs2 = mysql_db_query($db_name,$sql2);
			while($r2 = mysql_fetch_array($rs2)){
		  
		  if($r2['td_status']=='unlock'){
		  include("form_insert_promotion.php"); 
		  }else{
			echo "ไม่สามารถเพิ่มกิจกรรมส่งเสริมการขายได้";  
			}
			}
		  ?></p></div>
        <table class="table table-bordered" align="center">
			<tr class="info">
            	
                <td  align="center">รูปภาพ</td>
                <td  align="center">ชื่อโปรโมชั่น</td>
                <td  align="center">รายละเอียด</td>
                <td  align="center">วันที่ลง</td>
                <td  align="center">หมดอายุ</td>
                <td  align="center">ลิงค์ข้อมูล</td>
                <td  align="center">ชื่อร้านค้า</td>
                <td  align="center">หมวดหมู่</td>
          </tr>
                      <?php
			include("connect_db.php");
			$td_id = $_SESSION['td_user'];
		
			$sql = "select * from tb_promotion where pt_td_id = '$td_id' ";
			//echo $sql; exit();
			
			$rs = mysql_db_query($db_name,$sql);
			while($r = mysql_fetch_array($rs)){
	?>
            <tr class="active">
            	
                <td align="left" bgcolor="#FADEF7"><img src = "../admin/picproduct/<?=$r["pt_pic"]?>" alt="" width="100" height="100" /></td>
               
                <td  align="center"><?=$r["pt_headline"]?></td>
                <td  align="center"><?=$r["pt_content"]?></td>
                <td  align="center"><?=$r["pt_dateup"]?></td>
                <td  align="center"><?=$r["pt_deadline"]?></td>
                <td  align="center"><?=$r["pt_link"]?></td>
                <td  align="center"><?=$r["pt_td_id"]?></td>
                <td  align="center"><?=$r["pt_type"]?></td>
               </form>
            </tr>
              <?php
             	 }
			  ?>
		</table>
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