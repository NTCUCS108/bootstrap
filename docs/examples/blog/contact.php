<?php
	header ("content-type:text/html;charset=utf-8");
	mysql_connect("localhost","root","admin");
	mysql_select_db("company"); //選擇資料庫
	mysql_query("set names utf8"); //以utf-8讀取資料，讓資料可以讀取中文
	$data=mysql_query("select * from connectways"); 	
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

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">精德實業股份有限公司</a>
          <a class="blog-nav-item" href="../carousel/test_home.php">首頁</a>
          <a class="blog-nav-item" href="company.php">公司簡介</a>
          <a class="blog-nav-item" href="product.php">產品資訊</a>
          <a class="blog-nav-item" href="contact.php">聯絡方式</a>
		  <a class="blog-nav-item" href="../comment_withbrowse/comment_browse.php">留言板</a>
        </nav>
      </div>
    </div>
	 
	<p>
	<?php 
	$rs=mysql_fetch_row($data);
	echo "$rs[0]";
	?>
	
	</body>
</html>