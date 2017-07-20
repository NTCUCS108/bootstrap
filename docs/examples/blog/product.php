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

    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="blog.css" rel="stylesheet">

    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <ul class="nav navbar-nav">
          <li><a class="blog-nav-item active" href="../carousel/test_home.php">精德實業股份有限公司</a></li>
          <li><a class="blog-nav-item" href="../carousel/test_home.php">首頁</a></li>
          <li><a class="blog-nav-item" href="company.php">公司簡介</a></li>
          <li><a class="blog-nav-item" href="product.php">產品資訊</a></li>
          <li><a class="blog-nav-item" href="contact.php">聯絡方式</a></li>
		  <li><a class="blog-nav-item" href="../comment_withbrowse/comment_browse.php">留言板</a></li>
		  <?php include("page_connect.php");
				$page = mysql_query("select * from page where dead_time = '0000-00-00 00:00:00' order by post_id");
				if(mysql_num_rows($page)>0) {?>
		  <li class="dropdown"><a class="dropdown-toggle blog-nav-item" data-toggle="dropdown" href="#">更多<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<?php for($i=1;$i<=mysql_num_rows($page);$i++) {
					$rs = mysql_fetch_assoc($page);?>
				<li><a href="../blog/page.php?id=<?php echo "$rs[post_id]";?>"><?php echo "$rs[name]";?></a></li>
				<?php }?>
			</ul>
		  </li>
		  <?php }?>
        </ul>
        </nav>
      </div>
    </div>
<?php 
mysql_close();
mysql_connect("localhost","root","admin");
	mysql_select_db("company"); //選擇資料庫
	mysql_query("set names utf8"); //以utf-8讀取資料，讓資料可以讀取中文
	$data=mysql_query("select * from product"); 
?>
    <div class="container">	
		<div class="row">
			<?php $rs=mysql_fetch_row($data);echo "$rs[1]";?>
		</div>	
    </div>	

    <footer class="blog-footer">      
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


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
