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
        <li><a href="manage_detail.php">แก้ไขข้อมูลส่วนตัว</a></li>
        <li><a href="contact_admin.php">ที่ติดต่อเรา</a></li>
        <li><a href="logout.php">ออกจากระบบ</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  <img src="pic/banner.png" class="img-responsive" alt="Responsive image">
</nav>
</div>
   		</div>
        <div class="container">
        <div class="col-md-0"></div>
        <div class="row">
     	<div class="col-md-12">
     	  <div align="center" class="style2">     	    
   	      
          </div>
           </p>
  <div class="row">
  		<div class="col-md-2"></div>
     	<div class="col-md-8" align="center">

        <table class="table table-striped" align="center">
        <?php
        	$wb_id = $_REQUEST['wb_id'];
			include("connect_db.php");
            $sql1 = "select * from tb_webboard where wb_id = '$wb_id'";
            $rs1 = mysql_db_query($db_name,$sql1);
            while($r1 = mysql_fetch_array($rs1)){
            
        ?>
                    <tr>
            	<td align="left" colspan="4" background="pic/blue-background-images-15.jpg"><strong>
           	    <?=$r1['wb_name'];?>
            	</strong></p>
                <span class="style5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           	    <?=$r1['wb_detail'];?>
            	</span>
                </td>
            </tr>
            <?php
            	}
            ?>
              <?php
			$sql = "select tb_comment.*, tb_webboard.wb_id, tb_webboard.wb_name, tb_webboard.wb_detail from tb_comment inner join tb_webboard on tb_comment.wb_id = tb_webboard.wb_id where tb_comment.wb_id = '$wb_id' ";
			//echo $sql; exit();
			$rs = mysql_db_query($db_name,$sql);
			while($r = mysql_fetch_array($rs)){

	?>

            <tr>
            	<td class="warning" align="left" colspan="2"><?=$r['cm_text'];?></td>
              <form class="form-horizontal" action="form_edit_comment.php" method="post" enctype="multipart/form-data" name="form" id="form">
                <td class="warning" align="right"><button type="submit" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                <input type="hidden" name="cm_id" value="<?=$r['cm_id']?>">   
               <input type="hidden" name="wb_id" value="<?=$r['wb_id']?>"></td>
              </form>
                <form class="form-horizontal" action="delete_comment.php" method="post" enctype="multipart/form-data" name="form" id="form">
                <td class="warning" align="center"><button type="submit" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button> 
                <input type="hidden" name="cm_id" value="<?=$r['cm_id']?>"> 
                <input type="hidden" name="wb_id" value="<?=$r['wb_id']?>">
                                </td></form>
            </tr>
            <tr>
            	<td align="center" class="warning"><span class="style4">
           	    ผู้แสดงความคิดเห็น&nbsp; : &nbsp;<?=$r['cm_memid'];?>
            	</span></td>
              <td align="center" class="warning"><span class="style4">
              <?=$r['cm_date'];?>
              </span></td>
              <td class="warning" align="left"></td>
              <td class="warning" align="left"></td>
          </tr>
            <?php
				}
			?>
<form class="form-horizontal" action="add_comment.php" method="post" enctype="multipart/form-data" name="form" id="form">
  	<tr>
    <?php
    	$wb_id = $_GET['wb_id'];
		$wb_username = $_SESSION["cm_id"];
	$sql = "select * from tb_customer where cm_id = '$wb_username'";
	$rs = mysql_db_query($db_name,$sql);
	$cm_user = mysql_result($rs,0,1);
    ?>
    	<td colspan="2" align="center" class="warning" >
  <div class="form-group">
    <div class="col-sm-12">
      <textarea class="form-control" rows="1" name="cm_text" id="cm_text" placeholder="แสดงความคิดเห็น"></textarea>
    </div>
  </div>
        </td>
        <td align="left" valign="bottom" class="warning" > <button type="submit" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="แสดงความคิดเห็น"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
          <input type="hidden" name="wb_id" value="<?=$wb_id?>" />
          <input type="hidden" name="cm_user" value="<?=$cm_user?>" />
          </td>
          <td class="warning" align="left"></td>
		
   </tr>
</form>
		</table>
      </div>
        <div class="col-md-4"></div>
  </div>
          
          
     	</div>
        </div>
        </div>
        
        <div class="row">
  <div class="col-md-3">
  
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