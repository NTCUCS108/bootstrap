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