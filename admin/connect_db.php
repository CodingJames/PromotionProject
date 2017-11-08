<?php
	$connect_db = mysql_connect("localhost","root","");
	$db_name = "db_promotion";
	
	if(!$connect_db){
		echo "connect fail";
		exit();
		}else{
			//echo "ติดต่อฐานข้อมูลสำเร็จ";
			mysql_select_db($db_name);
			mysql_query("set names utf8");
			}
?>