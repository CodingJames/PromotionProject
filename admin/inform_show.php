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
<title>จัดการร้านค้า</title>

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
   	      การแจ้งการโอนเงิน</p></div>
          <div class="com-md-12" align="center">
        <table class="table table-bordered" align="center">
			<tr>            	
                <td bgcolor="#FFFF66" align="center"><strong>รูปภาพ</strong></td>
                <td bgcolor="#FFFF66" align="center"><strong>ชื่อร้านค้า</strong></td>
                <td bgcolor="#FFFF66" align="center"><strong>รายละเอียด</strong></td>
                <td bgcolor="#FFFF66" align="center"><strong>วันที่</strong></td>
          </tr>
                      <?php
			include("connect_db.php");
			
			$rows = 3;
			$total_data=mysql_num_rows(mysql_query("select * from tb_inform"));
			$total_page=ceil($total_data/$rows);
			if(empty($_GET['page'])) 
				$page=1;
				else 
				$page=$_GET['page'];
			if($page>=$total_page) $page=$total_page;
				$start=($page-1)*$rows;
				
			$sql = "select * from tb_inform limit $start,3";
			$rs = mysql_db_query($db_name,$sql);
			while($r = mysql_fetch_array($rs)){
	?>
         <tr>
            <td align="center" valign="middle" bgcolor="#FFFFCC"><img src = "../trader/informpic/<?=$r["inform_pic"]?>" alt="" width="200" height="200" /></td>
            <td align="center" valign="bottom" bgcolor="#FFFFCC"><?=$r["inform_trader"]?></td>
            <td align="center" valign="bottom" bgcolor="#FFFFCC"><?=$r["inform_content"]?></td>   			<td align="center" valign="bottom" bgcolor="#FFFFCC"><?=$r["inform_date"]?></td>
         </tr>
              <?php
             	 }
			  ?>
		</table>
         <nav aria-label="Page navigation">
  <ul class="pagination">
    <li <?php if($page==1) echo 'class = "disabled"'; ?>>
      <a href="inform_show.php?page=<?=$page - 1 ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php for($i=1;$i<=$total_page;$i++){ ?>
    <li <?php if($page==$i) echo 'class = "active"'; ?>><a href="inform_show.php?page=<?=$i ?>"><?=$i?></a></li>   
    <?php } ?> 
    <li <?php if($page==$total_page) echo 'class = "disabled"'; ?>>
      <a href="inform_show.php?page=<?=$page + 1 ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>
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