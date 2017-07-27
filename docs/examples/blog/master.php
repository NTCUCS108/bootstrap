<!DOCTYPE html>
<html lang="zh-hant">
  <head>

    <meta http-equiv="content-type" content="text/html" charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/favicon.ico">

    <title>精德實業股份有限公司</title>
    <link href="http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/examples/blog/button.css" rel="stylesheet">
    <link href="http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/examples/blog/blog.css" rel="stylesheet">

    <script src="http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/assets/js/ie-emulation-modes-warning.js"></script>
	<style type="text/css">

	.rotate:hover{
		-moz-transform:rotateY(180deg);
		-webkit-transform:rotateY(180deg);
		-o-transform:rotateY(180deg);
		-ms-transform:rotateY(180deg);
	}
	.rotate{
		-moz-transition:all 2s ease-out;
		-webkit-transition:all 2s ease-out;
		-o-transition:all 2s ease-out;
		-ms-transition:all 2s ease-out;
	}
	</style>
<body>
<?php
include("page_connect.php");
?>
<div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <div class="dropdown">
            <!--<button class="dropbtn"><a sytle="font-size:18px;" href="../carousel/homepage.php">精德實業股份有限公司</a></button>-->
			<a href="http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/examples/carousel/homepage.php">
			<div class="rotate">	<img src="http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/examples/ginder.jpg" height="57px" alt="精德實業股份有限公司"/></div>
			</a>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><a href="http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/examples/carousel/homepage.php">首頁</a></button>
            <?php $page = mysql_query("select * from page where dead_time = '0000-00-00 00:00:00' and parent = '首頁' order by post_id");
                  if(mysql_num_rows($page)>0){?>
                  <div class="dropdown-content">
                  <?php for($i=1;$i<=mysql_num_rows($page);$i++){
                        $rs = mysql_fetch_assoc($page);?>
                        <a href="http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/examples/blog/page.php?id=<?php echo "$rs[post_id]";?>"><?php echo "$rs[name]";?></a>
                  <?php }?>
                  </div>
            <?php }?>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><a href="http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/examples/blog/company.php">公司簡介</a></button>
            <?php $page = mysql_query("select * from page where dead_time = '0000-00-00 00:00:00' and parent = '公司簡介' order by post_id");
                  if(mysql_num_rows($page)>0){?>
                  <div class="dropdown-content">
                  <?php for($i=1;$i<=mysql_num_rows($page);$i++){
                        $rs = mysql_fetch_assoc($page);?>
                        <a href="http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/examples/blog/page.php?id=<?php echo "$rs[post_id]";?>"><?php echo "$rs[name]";?></a>
                  <?php }?>
                  </div>
            <?php }?>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><a href="http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/examples/blog/product.php">產品資訊</a></button>
            <?php $page = mysql_query("select * from page where dead_time = '0000-00-00 00:00:00' and parent = '產品資訊' order by post_id");
                  if(mysql_num_rows($page)>0){?>
                  <div class="dropdown-content">
                  <?php for($i=1;$i<=mysql_num_rows($page);$i++){
                        $rs = mysql_fetch_assoc($page);?>
                        <a href="http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/examples/blog/page.php?id=<?php echo "$rs[post_id]";?>"><?php echo "$rs[name]";?></a>
                  <?php }?>
                  </div>
            <?php }?>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><a href="http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/examples/blog/contact.php">聯絡方式</a></button>
            <?php $page = mysql_query("select * from page where dead_time = '0000-00-00 00:00:00' and parent = '連絡方式' order by post_id");
                  if(mysql_num_rows($page)>0){?>
                  <div class="dropdown-content">
                  <?php for($i=1;$i<=mysql_num_rows($page);$i++){
                        $rs = mysql_fetch_assoc($page);?>
                        <a href="http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/examples/blog/page.php?id=<?php echo "$rs[post_id]";?>"><?php echo "$rs[name]";?></a>
                  <?php }?>
                  </div>
            <?php }?>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><a href="http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/examples/comment_withbrowse/comment_browse.php">留言板</a></button>
            <?php $page = mysql_query("select * from page where dead_time = '0000-00-00 00:00:00' and parent = '留言板' order by post_id");
                  if(mysql_num_rows($page)>0){?>
                  <div class="dropdown-content">
                  <?php for($i=1;$i<=mysql_num_rows($page);$i++){
                        $rs = mysql_fetch_assoc($page);?>
                        <a href="http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/examples/blog/page.php?id=<?php echo "$rs[post_id]";?>"><?php echo "$rs[name]";?></a>
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
                          $rs = mysql_fetch_assoc($page);?>
                          <a href="http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/examples/blog/page.php?id=<?php echo "$rs[post_id]";?>"><?php echo "$rs[name]";?></a>
                    <?php }?>
                  </div>
                </div>
          <?php }?>

        </nav>
      </div>
</div>

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
