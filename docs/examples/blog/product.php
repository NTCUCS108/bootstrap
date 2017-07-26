<?php
	header ("content-type:text/html;charset=utf-8");	
?>

<head>
<style type="text/css">
	gotop-sidebar {
	float:right;
	position:fixed;
	right:0px;
	bottom:0px;
	}
	</style>
</head>

  <body>
  <!-- Google Analystic -->
  <?php include_once("analyticstracking.php") ?>


<?php 
mysql_close();
mysql_connect("localhost","root","admin");
	mysql_select_db("company"); //選擇資料庫
	mysql_query("set names utf8"); //以utf-8讀取資料，讓資料可以讀取中文
	$data=mysql_query("select * from product"); 
	include("master.php");
?>
	<br><br><br>
    <div class="container">	
		<div class="row">
			<?php $rs=mysql_fetch_row($data);echo "$rs[1]";?>
		</div>	
		
		<div class="gotop-sidebar">      
		<p>
        <a href="#"><img src="img/arrow.png" width="64px";height="64px"></a>
      </p>
    </div>
    </div>	

  </body>