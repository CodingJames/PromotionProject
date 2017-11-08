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
        <div class="row">
        <div class="col-md-3" align="center">
                 <table class="table table-bordered" align="center" cellpadding="0" cellspacing="0" border="0">
        <?php 
			include("connect_db.php");
			$td_user = $_SESSION['td_user'];
			//echo $td_status;
			$sql = "select * from tb_trader where td_user = '$td_user'";
			//echo $sql;
			$rs = mysql_db_query($db_name,$sql);
			while($r = mysql_fetch_array($rs)){
				if($r['td_status']=="lock"){				
		?>
         		<tr bgcolor="#FFFFCC">
            		<td align="center">
                    <img src = "../picicon/person.png" alt="" width="150" height="150" /></br>
                    <img src = "../picicon/status.png" alt=""  />
                    <?php include("form_insert_inform.php");?>
            	</tr>
                <?php
             	 }else{
				 ?>
				 <tr bgcolor="#FFFFCC">
                
            		<td align="center">
                    <img src = "../picicon/person.png" alt="" width="150" height="150" /></br>
                    <img src = "../picicon/status2.png" alt=""  />

                    </td>
            	</tr>
                
                <?php
			}
			}
			  ?>
            </table>
            </form>
         </div>
        <div class="col-md-9" align="left">
        <img src="pic/contact_bank.png" class="img-responsive" alt="Responsive image"></br>
        <img src="pic/contactmail.png" class="img-responsive" alt="Responsive image">
        <img src="pic/contactface.png" class="img-responsive" alt="Responsive image">
        <img src="pic/contacttel.png" class="img-responsive" alt="Responsive image">
        <img src="pic/line.png" class="img-responsive" alt="Responsive image"></br></p>
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