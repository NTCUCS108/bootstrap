<?php
	header ("content-type:text/html;charset=utf-8");	
?>

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
	$data=mysql_query("select * from companyintroduce"); 	
	include("master.php");
	?>
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<div class="box">
					<div class="box-header">
					</div>
				<div class="box-body" >
	<?php 
	$rs=mysql_fetch_row($data);
	echo "$rs[0]";
	?>
				</div>
	
				</div>
			</div>
		</div>
	</div>
	 <!-- FOOTER -->
	<div class="row">
	  <div class="col-md-offset-2 col-md-8">
      <footer>
	  <?php
		include("../../../browse_count/browse_count_pic.php");
		//2017-7-5Warning: session_start(): Cannot send session cache limiter - headers already sent (output started at D:\AppServ\www\bootstrap-3.3.1\docs\examples\carousel\homepage.php:226) in D:\AppServ\www\bootstrap-3.3.1\browse_count\browse_count_pic.php on line 5
		//2017-7-6已處理，session_start()需在顯示網頁前執行
	  ?><br>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>Copyright, &copy; 2017 精德股份有限公司</p>
      </footer>
      </div>
    </div>