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
</div>
		
        <div class="container">
        <div class="row">
        <div class="col-md-3" align="left">
        
        <?php include('menu.php'); ?>
        </div>
       
     	<div class="col-md-8" align="center">
     	  <div align="center" class="style2"> 
          </div>
        <table class="table table-bordered" align="center" cellpadding="0" cellspacing="0" border="0">

                      <?php
			include("connect_db.php");
			
			$pt_id = $_GET['pt_id'];
			$sql = "select * from tb_promotion where pt_id = '$pt_id'";
			//echo $sql; exit();
			
			$rs = mysql_db_query($db_name,$sql);
			
			while($r = mysql_fetch_array($rs)){
	?>
            
            <tr class="active">
            	<td align="center"><img src = "admin/picproduct/<?=$r["pt_pic"]?>" alt="" width="350" height="350" /></td>
            </tr>
            <tr class="active"lign="left">
            	<td><h4>
                	ชื่อโปรโมชั่น&nbsp;:&nbsp;&nbsp;<?=$r["pt_headline"]?></br>
                    รายละเอียด&nbsp;:&nbsp;&nbsp;<?=$r["pt_content"]?></br>
                    เริ่มต้นโปรโมชั่น&nbsp;:&nbsp;&nbsp;<?=$r["pt_dateup"]?></br>
                    สิ้นสุดโปรโมชั่น&nbsp;:&nbsp;&nbsp;<?=$r["pt_deadline"]?></br>
                    ลิงค์ข้อมูลเพิ่มเติม&nbsp;:&nbsp;&nbsp;<a href="<?=$r['pt_link']?>"><?=$r["pt_link"]?></a></br>
                    ร้านค้า&nbsp;:&nbsp;&nbsp;<?=$r["pt_td_id"]?></br>
                    ประเภทของสินค้า&nbsp;:&nbsp;&nbsp;<?=$r["pt_type"]?></br>
                    จำนวนผู้เข้าชม&nbsp;:&nbsp;&nbsp;<?=$r["pt_hit"]?>
                    </h4>
                    </br>
                </td>
            </tr>
			
              <?php
			   $pt_hitt = $r['pt_hit'];
				 $pt_hit = $pt_hitt + 1;
				 $sql_hit = mysql_query("update tb_promotion set
				 		pt_hit='$pt_hit'
						where pt_id = '$pt_id' ");
				
				//echo $sql_hit;
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