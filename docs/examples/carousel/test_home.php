<?php


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>精德實業股份有限公司</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="button.css" rel="stylesheet">
	<link href="http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/examples/blog/blog.css" rel="stylesheet">
	<!-- Custom styles for this template -->
    
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <link href="test_home.css" rel="stylesheet">
	
	</head>
  <body>
  <!-- Google Analystic -->
  <?php include_once("analyticstracking.php") ?>

  <?php
	session_start();//2017-7-6修復browse_count_pic
	include("page_connect.php");
  ?>
   
<div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <div class="dropdown">
            <button class="dropbtn"><a sytle="font-size:18px;" href="test_home.php">精德實業股份有限公司</a></button>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><a href="test_home.php">首頁</a></button>
            <?php $page = mysql_query("select * from page where dead_time = '0000-00-00 00:00:00' and parent = '首頁' order by post_id");
                  if(mysql_num_rows($page)>0){?>
                  <div class="dropdown-content">
                  <?php for($i=1;$i<=mysql_num_rows($page);$i++){
                        $p_rs = mysql_fetch_assoc($page);?>
                        <a href="../blog/page.php?id=<?php echo "$p_rs[post_id]";?>"><?php echo "$p_rs[name]";?></a>
                  <?php }?>
                  </div>
            <?php }?>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><a href="../blog/company.php">公司簡介</a></button>
            <?php $page = mysql_query("select * from page where dead_time = '0000-00-00 00:00:00' and parent = '公司簡介' order by post_id");
                  if(mysql_num_rows($page)>0){?>
                  <div class="dropdown-content">
                  <?php for($i=1;$i<=mysql_num_rows($page);$i++){
                        $p_rs = mysql_fetch_assoc($page);?>
                        <a href="../blog/page.php?id=<?php echo "$p_rs[post_id]";?>"><?php echo "$p_rs[name]";?></a>
                  <?php }?>
                  </div>
            <?php }?>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><a href="../blog/product.php">產品資訊</a></button>
            <?php $page = mysql_query("select * from page where dead_time = '0000-00-00 00:00:00' and parent = '產品資訊' order by post_id");
                  if(mysql_num_rows($page)>0){?>
                  <div class="dropdown-content">
                  <?php for($i=1;$i<=mysql_num_rows($page);$i++){
                        $p_rs = mysql_fetch_assoc($page);?>
                        <a href="../blog/page.php?id=<?php echo "$p_rs[post_id]";?>"><?php echo "$p_rs[name]";?></a>
                  <?php }?>
                  </div>
            <?php }?>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><a href="../blog/contact.php">聯絡方式</a></button>
            <?php $page = mysql_query("select * from page where dead_time = '0000-00-00 00:00:00' and parent = '連絡方式' order by post_id");
                  if(mysql_num_rows($page)>0){?>
                  <div class="dropdown-content">
                  <?php for($i=1;$i<=mysql_num_rows($page);$i++){
                        $p_rs = mysql_fetch_assoc($page);?>
                        <a href="../blog/page.php?id=<?php echo "$p_rs[post_id]";?>"><?php echo "$p_rs[name]";?></a>
                  <?php }?>
                  </div>
            <?php }?>
          </div>
          <div class="dropdown">
		        <button class="dropbtn"><a href="../comment_withbrowse/comment_browse.php">留言板</a></button>
            <?php $page = mysql_query("select * from page where dead_time = '0000-00-00 00:00:00' and parent = '留言板' order by post_id");
                  if(mysql_num_rows($page)>0){?>
                  <div class="dropdown-content">
                  <?php for($i=1;$i<=mysql_num_rows($page);$i++){
                        $p_rs = mysql_fetch_assoc($page);?>
                        <a href="../blog/page.php?id=<?php echo "$p_rs[post_id]";?>"><?php echo "$p_rs[name]";?></a>
                  <?php }?>
                  </div>
            <?php }?>
          </div>
          <?php $page = mysql_query("select * from page where dead_time = '0000-00-00 00:00:00' and parent = '更多' order by post_id");
                if(mysql_num_rows($page)>0) {?>
                <div class="dropdown">
		              <button class="dropbtn"><a href="#">更多</a></button>
			            <div class="dropdown-content">
                    <?php for($i=1;$i<=mysql_num_rows($page);$i++) {
                          $p_rs = mysql_fetch_assoc($page);?>
                          <a href="../blog/page.php?id=<?php echo "$p_rs[post_id]";?>"><?php echo "$p_rs[name]";?></a>
                    <?php }?>
                  </div>
                </div>
          <?php }?>
             
		    </nav>
      </div>
</div>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
	  <?php
	  mysql_close();
	  include("carousel_connect.php");
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
      mysql_close();
      include("carousel_connect.php");
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

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

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


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
