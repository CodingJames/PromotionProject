 <table class="table table-bordered" align="right" cellpadding="0" cellspacing="0" border="0">

                      <?php
			
			$sql_h = "select * from tb_promotion ORDER BY pt_hit DESC limit 3";
						
			$rs_h = mysql_db_query($db_name,$sql_h);
			while($r_h = mysql_fetch_array($rs_h)){
	?>
            
            <tr class="active">
            	<td align="center"><img src = "../admin/picproduct/<?=$r_h["pt_pic"]?>" alt="" width="250" height="250" /></td>
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