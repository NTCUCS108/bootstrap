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
				<h3 class="blog-post-title"><?php echo $d_rs[3];?></h3>
				<table class="blog-table">
				<br><?php echo "$d_rs[4]";?>
				</table>
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

  </body>