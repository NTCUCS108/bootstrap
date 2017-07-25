<?php
	header ("content-type:text/html;charset=utf-8");
		
?>

<!DOCTYPE html>
<html lang="zh-hant">
  <head>

    <meta http-equiv="content-type" content="text/html";charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>精德實業股份有限公司</title>
    <link href="button.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

  <body>
  <!-- Google Analystic -->
  <?php include_once("analyticstracking.php") ?>
  
<?php 
include("page_connect.php");
?>
<div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <div class="dropdown">
            <button class="dropbtn"><a sytle="font-size:18px;" href="../carousel/test_home.php">精德實業股份有限公司</a></button>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><a href="../carousel/test_home.php">首頁</a></button>
            <?php $page = mysql_query("select * from page where dead_time = '0000-00-00 00:00:00' and parent = '首頁' order by post_id");
                  if(mysql_num_rows($page)>0){?>
                  <div class="dropdown-content">
                  <?php for($i=1;$i<=mysql_num_rows($page);$i++){
                        $rs = mysql_fetch_assoc($page);?>
                        <a href="page.php?id=<?php echo "$rs[post_id]";?>"><?php echo "$rs[name]";?></a>
                  <?php }?>
                  </div>
            <?php }?>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><a href="company.php">公司簡介</a></button>
            <?php $page = mysql_query("select * from page where dead_time = '0000-00-00 00:00:00' and parent = '公司簡介' order by post_id");
                  if(mysql_num_rows($page)>0){?>
                  <div class="dropdown-content">
                  <?php for($i=1;$i<=mysql_num_rows($page);$i++){
                        $rs = mysql_fetch_assoc($page);?>
                        <a href="page.php?id=<?php echo "$rs[post_id]";?>"><?php echo "$rs[name]";?></a>
                  <?php }?>
                  </div>
            <?php }?>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><a href="product.php">產品資訊</a></button>
            <?php $page = mysql_query("select * from page where dead_time = '0000-00-00 00:00:00' and parent = '產品資訊' order by post_id");
                  if(mysql_num_rows($page)>0){?>
                  <div class="dropdown-content">
                  <?php for($i=1;$i<=mysql_num_rows($page);$i++){
                        $rs = mysql_fetch_assoc($page);?>
                        <a href="page.php?id=<?php echo "$rs[post_id]";?>"><?php echo "$rs[name]";?></a>
                  <?php }?>
                  </div>
            <?php }?>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><a href="contact.php">聯絡方式</a></button>
            <?php $page = mysql_query("select * from page where dead_time = '0000-00-00 00:00:00' and parent = '連絡方式' order by post_id");
                  if(mysql_num_rows($page)>0){?>
                  <div class="dropdown-content">
                  <?php for($i=1;$i<=mysql_num_rows($page);$i++){
                        $rs = mysql_fetch_assoc($page);?>
                        <a href="page.php?id=<?php echo "$rs[post_id]";?>"><?php echo "$rs[name]";?></a>
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
                        $rs = mysql_fetch_assoc($page);?>
                        <a href="page.php?id=<?php echo "$rs[post_id]";?>"><?php echo "$rs[name]";?></a>
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
                          <a href="page.php?id=<?php echo "$rs[post_id]";?>"><?php echo "$rs[name]";?></a>
                    <?php }?>
                  </div>
                </div>
          <?php }?>
             
        </nav>
      </div>
</div>	 
	<?php
	mysql_close();
	mysql_connect("localhost","root","admin");
	mysql_select_db("company"); //選擇資料庫
	mysql_query("set names utf8"); //以utf-8讀取資料，讓資料可以讀取中文
	$data=mysql_query("select * from connectways"); 
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