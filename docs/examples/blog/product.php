﻿<?php
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
	
	#pacman {
	margin:0;
    width: 0;
    height: 0;
    border-right: 20px solid transparent;
    border-top: 20px solid #ffde00;
    border-left: 20px solid #ffde00;
    border-bottom: 20px solid #ffde00;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px; 
		transition: border-top 2s ease,border-left 2s ease,border-bottom  2s ease;
		-moz-transition: border-top 2s ease,border-left 2s ease, border-bottom  2s ease;
		-webkit-transition: border-top 2s ease,border-left 2s ease, border-bottom  2s ease;
		-ms-transition: border-top 2s ease,border-left 2s ease, border-bottom 2s ease;
		-o-webkit-transition: border-top 2s ease, border-left 2s ease, border-bottom  2s ease;
	}	
	#pacman:hover{
		border-top: 20px solid #3AD646;
		border-left: 20px solid #3AD646;
		border-bottom: 20px solid #3AD646;
	}
	table{
		border: 2px #c6d3fe solid;
		border-collapse:collapse;
		line-height: 30px;
		letter-spacing: 3px;
  }
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
$(function () {
           $('a[href*=#]:not([href=#])').click(function() {
               var target = $(this.hash);
               $('html,body').animate({
                   scrollTop: target.offset().top
               }, 1000);
               return false;
           }); 
		});
</script>
</head>

  <body>
  <!-- Google Analystic -->
  <?php include_once("analyticstracking.php") ?>

<?php 
include("page_connect.php");
?>

<?php 

	include("master.php");
	mysql_close();
	mysql_connect("localhost","root","admin");
	mysql_select_db("company"); //選擇資料庫
	mysql_query("set names utf8"); //以utf-8讀取資料，讓資料可以讀取中文
?>
	<br><br>
    <div class="container">	
		<div class="row">
			<div class="blog-header">
			<h2 class="blog-title"><strong>產品資訊</strong></h2>
			<p class="lead blog-description">Introduction of our products.</p>
			<!--<p class="blog-post-meta">July, 2017</p>-->
			</div>
		<?php 
		$data=mysql_query("select * from product where product_id != '-1' order by product_id"); 
		if(mysql_num_rows($data)>0){
		?>
				
			
			<div class="col-sm-8 blog-main">
				<?php 
				for($i=1;$i<=mysql_num_rows($data);$i++){
				$d_rs = mysql_fetch_row($data);
				?>
				<div class="blog-post" id="<?php echo $d_rs[5];?>">
				
				<div id="pacman"></div><h3 class="blog-post-title"><?php echo $d_rs[3];?></h3>
				
				<br><?php echo "$d_rs[4]";?>
				
				</div>
				<?php } ?>
			</div>
			
			<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          
				<div class="sidebar-module">
					<h4>產品列表</h4>
					<ol class="list-unstyled">
						<?php 
						$data=mysql_query("select * from product where product_id != '-1' order by product_id");
						for($i=1;$i<=mysql_num_rows($data);$i++){
						$d_rs = mysql_fetch_row($data);
						?>
						<li><a href="#<?php echo $d_rs[5];?>"><?php echo "$d_rs[3]";?></a></li>
						<?php }?>
					</ol>
				</div>
		  
			</div>
			
		<?php } ?>
		</div>
		
		<div class="col-sm-8 blog-main">
		
			<div class="gotop-sidebar">      
			<p>
			<a href="#"><img src="img/arrow.png" width="64px";height="64px"></a>
			</p>
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
  </body>