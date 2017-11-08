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
          <li role="presentation" class="active"><?php include("form_register.php");?></li>
          <li role="presentation"><?php include("form_login.php");?></li>
          <li role="presentation"><?php include("admin/form_login.php");?></li>
	 	<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span></a>
          <ul class="dropdown-menu">
          	<li><a align="center">หมวดหมู่ของโปรโมชั่น</a></li>
            <li><a href="promotion_type1.php">เครื่องประดับ</a></li>
            <li><a href="promotion_type2.php">เครื่องสำอาง</a></li>
            <li><a href="promotion_type3.php">อาหารและเครื่องดื่ม</a></li>
          </ul>
        </li>
        
      </ul>
      	<img src="admin/pic/banner.png" class="img-responsive" alt="Responsive image">	
		
        </div>
		
        <div class="container">
        <div class="row">
        <div class="col-md-3" align="left">
        
        <div class="table-responsive">
			<table class="table">
            <tr>
            <img src="picicon/headmenu.png" class="img-responsive" alt="Responsive image">
  				</tr>
                <tr>
            <img src="picicon/type_dug.png" class="img-responsive" alt="Responsive image">
  				</tr>
                <tr>
            <img src="picicon/type_food.png" class="img-responsive" alt="Responsive image">
  				</tr>
                <tr>
            <img src="picicon/type_cosmetic.png" class="img-responsive" alt="Responsive image">
  				</tr>
                <tr>
            <img src="picicon/type_bag.png" class="img-responsive" alt="Responsive image">
  				</tr>
                <tr>
            <img src="picicon/type_accessories.png" class="img-responsive" alt="Responsive image">
  				</tr>
                 <tr>
            <img src="picicon/type_clothes.png" class="img-responsive" alt="Responsive image">
  				</tr>
                <tr>
            <img src="picicon/type_shoes.png" class="img-responsive" alt="Responsive image">
  				</tr>
                <tr>
            <img src="picicon/type_sport.png" class="img-responsive" alt="Responsive image">
  				</tr>
                <tr>
            <img src="picicon/type_game.png" class="img-responsive" alt="Responsive image">
  				</tr>
                <tr>
            <img src="picicon/type_it.png" class="img-responsive" alt="Responsive image">
  				</tr>
                <tr>
            <img src="picicon/type_phone.png" class="img-responsive" alt="Responsive image">
  				</tr>
                <tr>
            <img src="picicon/type_watching.png" class="img-responsive" alt="Responsive image">
  				</tr>
                <tr>
            <img src="picicon/footermenu.png" class="img-responsive" alt="Responsive image">
  				</tr>
            </table>
		</div>
        </div>
       
     	<div class="col-md-7">
     	  <div align="center" class="style2">     	    
   	      <?php //echo("สวัสดี คุณ ". $_SESSION["am_user"]); ?></p>
          </div>
        <table class="table table-bordered" align="center" cellpadding="0" cellspacing="0" border="0">

                      <?php
			include("connect_db.php");
						$sql = "select * from tb_promotion";
			//echo $sql; exit();
			
			$rs = mysql_db_query($db_name,$sql);
			while($r = mysql_fetch_array($rs)){
	?>
            
            <tr class="active">
            	<td align="center"><img src = "admin/picproduct/<?=$r["pt_pic"]?>" alt="" width="450" height="450" /></td>
            </tr>
            <tr class="active"lign="left">
            	<td><h4>
                	ชื่อโปรโมชั่น&nbsp;:&nbsp;&nbsp;<?=$r["pt_headline"]?></br>
                    รายละเอียด&nbsp;:&nbsp;&nbsp;<?=$r["pt_content"]?></br>
                    เริ่มต้นโปรโมชั่น&nbsp;:&nbsp;&nbsp;<?=$r["pt_dateup"]?></br>
                    สิ้นสุดโปรโมชั่น&nbsp;:&nbsp;&nbsp;<?=$r["pt_deadline"]?></br>
                    ลิงค์ข้อมูลเพิ่มเติม&nbsp;:&nbsp;&nbsp;<?=$r["pt_link"]?></br>
                    ร้านค้า&nbsp;:&nbsp;&nbsp;<?=$r["pt_td_id"]?></br>
                    ประเภทของสินค้า&nbsp;:&nbsp;&nbsp;<?=$r["pt_type"]?>
                    </h4>
                    </br>
                </td>
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