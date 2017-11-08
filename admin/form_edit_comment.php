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
<title>แก้ไขความคิดเห็น</title>

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
        <li><a href="manage_category.php">จัดการหมวดหมู่สินค้า</a></li>
        <li><a href="manage_webboard.php">กระดานสนทนา</a></li>
        <li><a href="manage_contact.php">ที่ติดต่อเรา</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="button" class="btn btn-default" aria-label="Left Align">
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
          </div>
        
         </p>
  <div class="row">
  		<div class="col-md-3"></div>
     	<div class="col-md-6">

        <table class="table table-striped" align="center">
        <?php
        	$wb_id = $_REQUEST['wb_id'];
			include("connect_db.php");
            $sql1 = "select * from tb_webboard where wb_id = '$wb_id'";
            $rs1 = mysql_db_query($db_name,$sql1);
            while($r1 = mysql_fetch_array($rs1)){
            
        ?>
                    <tr>
            	<td class="active" align="left" colspan="4"><strong>
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
			  $cm_id = $_REQUEST['cm_id'];
			$sql = "select tb_comment.*, tb_webboard.wb_name, tb_webboard.wb_detail from tb_comment inner join tb_webboard on tb_comment.wb_id = tb_webboard.wb_id where tb_comment.wb_id = '$wb_id' and tb_comment.cm_id != '$cm_id' ";
			//echo $sql; exit();
			$rs = mysql_db_query($db_name,$sql);
			while($r = mysql_fetch_array($rs)){

	?>

            <tr>
            	<td class="warning" align="left" colspan="2"><?=$r['cm_text'];?></td>
              <form class="form-horizontal" action="form_edit_comment.php" method="post" enctype="multipart/form-data" name="form" id="form">
                <td class="warning" align="right"><button type="submit" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                <input type="hidden" name="cm_id" value="<?=$r{cm_id}?>"> 
                 <input type="hidden" name="wb_id" value="<?=$r{wb_id}?>">        </td>
              </form>
                <form class="form-horizontal" action="delete_comment.php" method="post" enctype="multipart/form-data" name="form" id="form">
                <td class="warning" align="center"><button type="submit" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button> 
                <input type="hidden" name="cm_id" value="<?=$r{cm_id}?>"> 
                                </td></form>
            </tr>
            <tr>
            	<td width="41%" align="center" class="warning"><span class="style4">
           	    <?=$r['cm_memid'];?>
            	</span></td>
              <td width="45%" align="center" class="warning"><span class="style4">
              <?=$r['cm_date'];?>
              </span></td>
              <td class="warning" align="left"></td>
              <td class="warning" align="left"></td>
          </tr>
            <?php
				}
			?>
<form class="form-horizontal" action="edit_comment.php" method="post" enctype="multipart/form-data" name="form" id="form">
   <?php
  			$wb_id = $_REQUEST['wb_id'];
			$cm_id = $_REQUEST['cm_id'];
		$sql1 = "select * from tb_comment where cm_id = '$cm_id' ";
			//echo $sql1; exit();
			$rs1 = mysql_db_query($db_name,$sql1);
			while($r1 = mysql_fetch_array($rs1)){
    ?>
  	<tr>
 
    	<td colspan="2" align="center" class="warning" >
  <div class="form-group">
    <div class="col-sm-12">
     
      <input type="text" class="form-control" name="cm_text" id="cm_text" value="<?=$r1['cm_text'];?>">
    </div>
  </div>
        </td>
        <td align="left" valign="bottom" class="warning" > <button type="submit" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="แสดงความคิดเห็น"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
          <input type="hidden" name="cm_id" value="<?=$cm_id?>" />
          <input type="hidden" name="wb_id" value="<?=$wb_id?>" /></td>
          <td class="warning" align="left"></td>

   </tr>
   	<?php
    	}
	?>	
</form>
		</table>
      </div>
        
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