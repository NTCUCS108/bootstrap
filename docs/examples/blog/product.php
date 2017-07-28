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
include("page_connect.php");
?>

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
 <!-- FOOTER -->
      <footer>
	  <?php
		include("../../../browse_count/browse_count_pic.php");
		//2017-7-5Warning: session_start(): Cannot send session cache limiter - headers already sent (output started at D:\AppServ\www\bootstrap-3.3.1\docs\examples\carousel\homepage.php:226) in D:\AppServ\www\bootstrap-3.3.1\browse_count\browse_count_pic.php on line 5
		//2017-7-6已處理，session_start()需在顯示網頁前執行
	  ?><br>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>Copyright, &copy; 2017 精德股份有限公司</p>
      </footer>
  </body>