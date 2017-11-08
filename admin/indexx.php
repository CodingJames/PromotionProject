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
	 	        
      </ul>
      	<img src="admin/pic/banner.png" class="img-responsive" alt="Responsive image">	
		
        </div>
        <div class="container">
        <div class="row">
        <div class="col-md-3" align="left">
        
        <?php include('menu.php'); ?>
        </div>
       
     	<div class="col-md-6" align="center">
     	  <div align="center" class="style2">     	    
   	      
          </div>
        <table class="table table-bordered" align="center" cellpadding="0" cellspacing="0" border="0">

                      <?php
			include("connect_db.php");
			
			$rows = 3;
			$total_data=mysql_num_rows(mysql_query("select * from tb_promotion"));
			$total_page=ceil($total_data/$rows);
			if(empty($_GET['page'])) 
				$page=1;
				else 
				$page=$_GET['page'];
			if($page>=$total_page) $page=$total_page;
				$start=($page-1)*$rows;
			
			$sql = "select * from tb_promotion limit $start,3";
			//echo $sql; exit();
			
			$rs = mysql_db_query($db_name,$sql);
			while($r = mysql_fetch_array($rs)){
	?>
            
            <tr>
            	<td align="center"><img src = "admin/picproduct/<?=$r["pt_pic"]?>" alt="" width="300" height="300" /></td>
            </tr>
            <tr align="left">
            	<td><h4>
                	ชื่อโปรโมชั่น&nbsp;:&nbsp;&nbsp;<?=$r["pt_headline"]?></br>                    
                    เริ่มต้นโปรโมชั่น&nbsp;:&nbsp;&nbsp;<?=$r["pt_dateup"]?></br>
                    สิ้นสุดโปรโมชั่น&nbsp;:&nbsp;&nbsp;<?=$r["pt_deadline"]?></br>                  
                    ร้านค้า&nbsp;:&nbsp;&nbsp;<?=$r["pt_td_id"]?></br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="detail_promotion.php?pt_id=<?=$r['pt_id']; ?>">รายละเอียดเพิ่มเติม</a>
                    </h4>
                </td>
            </tr>

              <?php
             	 }
			  ?>
		</table>
        
        <nav aria-label="Page navigation">
  <ul class="pagination">
    <li <?php if($page==1) echo 'class = "disabled"'; ?>>
      <a href="index.php?page=<?=$page - 1 ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php for($i=1;$i<=$total_page;$i++){ ?>
    <li <?php if($page==$i) echo 'class = "active"'; ?>><a href="index.php?page=<?=$i ?>"><?=$i?></a></li>   
    <?php } ?> 
    <li <?php if($page==$total_page) echo 'class = "disabled"'; ?>>
      <a href="index.php?page=<?=$page + 1 ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
        
     	<p>&nbsp;</p>
     	</div>
        
        <div class="col-md-3" align="right">
     	  <div align="center" class="style2">     	    
   	      
          </div>
        <table class="table table-bordered" align="right" cellpadding="0" cellspacing="0" border="0">

                      <?php
			
			$sql_h = "select * from tb_promotion  ORDER BY pt_hit DESC limit $start,3";
			//echo $sql; exit();
			
			$rs_h = mysql_db_query($db_name,$sql_h);
			while($r_h = mysql_fetch_array($rs_h)){
	?>
            
            <tr class="active">
            	<td align="center"><img src = "admin/picproduct/<?=$r_h["pt_pic"]?>" alt="" width="250" height="250" /></td>
            </tr>
            <tr class="active"lign="left">
            	<td><h4>
                	ชื่อโปรโมชั่น&nbsp;:&nbsp;&nbsp;<?=$r_h["pt_headline"]?></br>                    
                    จำนวนผู้เข้าชม&nbsp;:&nbsp;&nbsp;<?=$r_h["pt_hit"]?>&nbsp; ครั้ง</br> 
                    <a href="detail_promotion.php?pt_id=<?=$r_h['pt_id']; ?>">รายละเอียดเพิ่มเติม</a>
                    </h4>
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
       
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>