<head>
	<link href="test_home.css" rel="stylesheet">
</head>
  <body>
  <!-- Google Analystic -->
  <?php include_once("analyticstracking.php"); ?>
  
<?php include("master.php"); ?>

  <?php
	session_start();//2017-7-6修復browse_count_pic
  mysql_close();
      include("carousel_connect.php");
      $homepage_select = mysql_query("select * from homepage_select");
      $h_rs = mysql_fetch_assoc($homepage_select);
  ?>
   
  <!-- Carousel
    ================================================== -->
    <?php
      
      if($h_rs['homepage_select'] == 'carousel')
      {
    ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
	  <?php
		$slide = mysql_query("select * from slide where slide_id != '-1' order by slide_id");
		for($i=1;$i<=mysql_num_rows($slide);$i++)
		{
			$s_rs=mysql_fetch_assoc($slide);
	  ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo "$s_rs[slide_id]";?>" <?php if($s_rs[slide_id]==0) echo 'class="active";'?>></li>
	<?php
	}
	?>
      </ol>
      <div class="carousel-inner" role="listbox">
	  <?php
		$slide = mysql_query("select * from slide where slide_id != '-1' order by slide_id");
		for($i=1;$i<=mysql_num_rows($slide);$i++)
		{
			$s_rs = mysql_fetch_assoc($slide);
	  ?>
        <div class="item<?php if($s_rs["slide_id"]==0) echo ' active';?>">
          <img src="<?php $img_src = explode("img/","$s_rs[img_src]"); echo "img/$img_src[1]";//位址問題img_src為後台看的位址?>" alt="<?php echo "$s_rs[slide_id]";?>" style='max-width:500px;max-height:300px;'>
          <div class="container">
            <div class="carousel-caption">
              <h1><?php echo "$s_rs[headers]";?></h1>
              <p><?php echo "$s_rs[description]";?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo "$s_rs[link_src]";?>" role="button"><?php echo "$s_rs[icon]";?></a></p>
            </div>
          </div>
        </div>
		<?php
		}
		?>
        
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <?php
      $circle = mysql_query("select * from circle where circle_id != '-1' order by circle_id");
      if(mysql_num_rows($circle)>0){      
      ?>
        <div class="row">
        <?php 
        for($i=1;$i<=mysql_num_rows($circle);$i++){
          $c_rs = mysql_fetch_assoc($circle);
        ?>
          <div class="col-lg-4">
            <img class="img-circle" src="<?php $img_src = explode("img/","$c_rs[img_src]"); echo "img/$img_src[1]";//位址問題img_src為後台看的位址?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
            <h2><?php echo $c_rs['headers'];?></h2>
            <p><?php echo $c_rs['description'];?></p>
            <p><a class="btn btn-default" href="<?php echo $c_rs['link_src'];?>" role="button"><?php echo $c_rs['icon'];?> &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        <?php }?>
        </div><!-- /.row -->
      <?php }?>



      <!-- START THE FEATURETTES -->
      <?php
      $featurette = mysql_query("select * from featurette where featurette_id != '-1' order by featurette_id");
      if(mysql_num_rows($featurette)>0){      
        for($i=1;$i<=mysql_num_rows($featurette);$i++){
          $f_rs = mysql_fetch_assoc($featurette);
      ?>
        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading"><?php echo $f_rs['headers'];?></h2>
            <p class="lead"><?php echo $f_rs['description'];?></p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" style="width:300px;height:300px;" src="<?php $img_src = explode("img/","$f_rs[img_src]"); echo "img/$img_src[1]";//位址問題img_src為後台看的位址?>" alt="Generic placeholder image">
          </div>
        </div>
      <?php }}?>
      <hr class="featurette-divider">
<?php }
else if($h_rs['homepage_select'] == 'html')
{
  echo "<div class='container marketing'>";
  $display = mysql_query("select * from homepage");
  $d_rs = mysql_fetch_assoc($display);
  echo "<br><br><br><br>$d_rs[content]";
}
?>
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
	  <?php
		include("../../../browse_count/browse_count_pic.php");
		//2017-7-5Warning: session_start(): Cannot send session cache limiter - headers already sent (output started at D:\AppServ\www\bootstrap-3.3.1\docs\examples\carousel\test_home.php:226) in D:\AppServ\www\bootstrap-3.3.1\browse_count\browse_count_pic.php on line 5
		//2017-7-6已處理，session_start()需在顯示網頁前執行
	  ?><br>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->
</body>