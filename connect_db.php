<?php
	$connect_db = mysql_connect("45.77.15.236","promotion_admin","promotion1234");
	$db_name = "PromotionDB";
	
	if(!$connect_db){
		echo "connect fail";
		exit();
		}else{
			//echo "ติดต่อฐานข้อมูลสำเร็จ";
			mysql_select_db($db_name);
			mysql_query("set names utf8");
			}
?>