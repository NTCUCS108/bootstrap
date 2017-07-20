<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>精德實業股份有限公司</title>
<link rel="icon" href="../../favicon.ico">
<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../blog/blog.css" rel="stylesheet">

</head>

<body>
<?php 
include("page_connect.php");
$page = mysql_query("select * from page where dead_time = '0000-00-00 00:00:00' order by post_id");
?>
<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
          <ul class="nav navbar-nav">
          <li><a class="blog-nav-item active" href="../carousel/test_home.php">精德實業股份有限公司</a></li>
          <li><a class="blog-nav-item" href="../carousel/test_home.php">首頁</a></li>
          <li><a class="blog-nav-item" href="../blog/company.php">公司簡介</a></li>
          <li><a class="blog-nav-item" href="../blog/product.php">產品資訊</a></li>
          <li><a class="blog-nav-item" href="../blog/contact.php">聯絡方式</a></li>
		  <li><a class="blog-nav-item" href="comment_browse.php">留言板</a></li>
		  <?php if(mysql_num_rows($page)>0) {?>
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

<br><br><br>
<?php 
mysql_close();
include("comment_connect.php");
if(!isset($_GET["guestContentType"]))
	$search="不限";
else
	 $search = $_GET["guestContentType"];
if(!isset($_GET["sortorder"]))
	$sortorder="guestTime";
else
	$sortorder=$_GET["sortorder"];
if(!isset($_GET["sortway"]))
	$sortway="desc";
else
	$sortway=$_GET["sortway"];
$num = 10;//一頁筆數
if($search=="不限")//符合的資料共有幾筆
	$data = mysql_query("select * from comment");
else
	$data = mysql_query("select * from comment where guestContentType = '$search'");
$page = $_GET["page"];//目前在第幾頁
if(!isset($page))
	$page = 1;//未設定則內建1
$start = ($page-1)*$num;//跟著頁數變化資料從第幾筆開始顯示
$page_num = ceil(mysql_num_rows($data)/$num);//一共幾頁
if($search=="不限")//抓取正確範圍的資料
	$data = mysql_query("select * from comment order by $sortorder $sortway limit $start,$num");
else
	$data = mysql_query("select * from comment where guestContentType = '$search' order by $sortorder $sortway limit $start,$num");
?>
<section class="content">
	<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="box">
			<div class="box-header">
	
				<div class="row">
					<h1 align="center">留言板</h1><br>
					<form name="search" method="get">
						<p><font size="4">查看留言板</font></p>
						<font size="2">搜尋類別：</font>
						<select name="guestContentType" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
						<span class="fa fa-caret-down"></span>
						<ul class="dropdown-menu">
						<?php
							echo '<option value="不限"';if($search=="不限") echo ' selected';echo '>不限</option>';
							echo '<option value="產品"';if($search=="產品") echo ' selected';echo '>產品</option>';
							echo '<option value="實績"';if($search=="實績") echo ' selected';echo '>實績</option>';
							echo '<option value="其他"';if($search=="其他") echo ' selected';echo '>其他</option>';
						?>
						</ul>
						</select>
						<br>

						<font size="2">排序類別：</font>
						<select name="sortorder" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
						<span class="fa fa-caret-down"></span>
						<ul class="dropdown-menu">
						<?php
							echo '<option value="guestTime"';if($sortorder=="guestTime") echo ' selected';echo '>時間</option>';
							echo '<option value="browse_count"';if($sortorder=="browse_count") echo ' selected';echo '>瀏覽人數</option>';
						?>
						</ul>
						</select><br>

						<font size="2">排序順序：</font>
						<select name="sortway" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
						<span class="fa fa-caret-down"></span>
						<ul class="dropdown-menu">
						<?php
							echo '<option value="desc"';if($sortway=="desc") echo ' selected';echo '>新or多</option>';
							echo '<option value=""';if($sortway=="") echo ' selected';echo '>舊or少</option>';
						?>
						</ul>
						</select>

						<br>
						<input type="submit" class="btn btn-primary" value="送出">
					</form>
									<button type="button" class="btn btn-warning pull-right" onclick="location.href = './comment_post.php';" >我要留言</button>
				</div>
			</div>
<br><br>
			<div class="box-body">
				
				<?php
				for($i=1;$i<=mysql_num_rows($data);$i++){
				$rs = mysql_fetch_assoc($data);//顯示資料
				?>
				<table align="center" width="60%" border="1" class="table table-bordered">
					<tr>
						<td width="10%"><?php echo "ID：$rs[guestID]"?></td>
						<td width="15%"><?php echo "類型：$rs[guestContentType]"?></td>
						<td width="65%"><?php echo "主旨：<a href='comment_show.php?id=$rs[guestID]'>$rs[guestSubject]</a>"?></td>
						<td width="5%"><?php echo $rs[browse_count]?></td>
						<?php 
							if($rs[guestReply]!="")
								echo "<td width='5%' style='color:green;'>y</td>";
							else
								echo "<td width='5%' style='color:red;'>n</td>";
						?>
						
					</tr>
				</table>
				<?php
				}
				?>
				<div class="box-tools">
						<p align="center">
							<?php
							for($i=1;$i<=$page_num;$i++)
								echo "<a href='comment_browse.php?guestContentType=$search&sortorder=$sortorder&sortway=$sortway&page=$i'>$i </a>"//顯示頁數
							?>
						</p>
				</div>
				</div>
		</div>
	</div>
	</div>
</section>
</body>
</html>