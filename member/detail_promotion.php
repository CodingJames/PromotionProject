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
        <li><a href="webboard_member.php">Webboard<span class="sr-only">(current)</span></a></li>
        <li><a href="manage_detail.php"><span class="style1">แก้ไขข้อมูลส่วนตัว</a></span></li>
        <li><a href="contact_admin.php">ที่ติดต่อเรา</a></li>
        <li><a href="logout.php">ออกจากระบบ</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  <img src="pic/banner.png" class="img-responsive" alt="Responsive image">
</nav>
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
            	<td align="center"><img src = "../admin/picproduct/<?=$r["pt_pic"]?>" alt="" width="350" height="350" /></td>
            </tr>
            <tr class="active"lign="left">
            	<td><h4>
                	ชื่อโปรโมชั่น&nbsp;:&nbsp;&nbsp;<?=$r["pt_headline"]?></br>
                    รายละเอียด&nbsp;:&nbsp;&nbsp;<?=$r["pt_content"]?></br>
                    เริ่มต้นโปรโมชั่น&nbsp;:&nbsp;&nbsp;<?=$r["pt_dateup"]?></br>
                    สิ้นสุดโปรโมชั่น&nbsp;:&nbsp;&nbsp;<?=$r["pt_deadline"]?></br>
                    ลิงค์ข้อมูลเพิ่มเติม&nbsp;:&nbsp;&nbsp;<?=$r["pt_link"]?></br>
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