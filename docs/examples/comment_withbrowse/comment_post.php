<?php
include("comment_connect.php");
if($_POST['guestName']!='')
	$guestName=$_POST["guestName"];
if($_POST['guestEmail']!='')
	$guestEmail=$_POST["guestEmail"];
if(isset($_POST['guestGender']))
	$guestGender=$_POST["guestGender"];
if($_POST['guestSubject']!='')
	$guestSubject=$_POST["guestSubject"];
if($_POST['guestContent']!='')
	$guestContent=$_POST["guestContent"];
$createtime=date("Y/m/d G:i:s");
$guestContentType=$_POST["guestContentType"];
?>
<?php
if(isset($guestName) or isset($guestEmail) or isset($guestGender) or isset($guestSubject) or isset($guestContent))
{
	$check = 0;
	if(isset($guestName) and isset($guestEmail) and isset($guestGender) and isset($guestSubject) and isset($guestContent))
	{
		$check = 1;
		mysql_query("Insert into comment value('','$guestName','$guestEmail','$guestGender','$guestSubject','$createtime','$guestContentType','$guestContent','','','0','0')");
		header("location:comment_browse.php");
	}
}	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>精德實業股份有限公司</title>
<link rel="icon" href="../../favicon.ico">
<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../blog/blog.css" rel="stylesheet">
<link href="../blog/button.css" rel="stylesheet">
</head>
<body>
  <!-- Google Analystic -->
  <?php include_once("analyticstracking.php") ?>

<?php 
mysql_close();
include("../blog/page_connect.php");
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
                        <a href="../blog/page.php?id=<?php echo "$rs[post_id]";?>"><?php echo "$rs[name]";?></a>
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
                        $rs = mysql_fetch_assoc($page);?>
                        <a href="../blog/page.php?id=<?php echo "$rs[post_id]";?>"><?php echo "$rs[name]";?></a>
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
                        $rs = mysql_fetch_assoc($page);?>
                        <a href="../blog/page.php?id=<?php echo "$rs[post_id]";?>"><?php echo "$rs[name]";?></a>
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
                        $rs = mysql_fetch_assoc($page);?>
                        <a href="../blog/page.php?id=<?php echo "$rs[post_id]";?>"><?php echo "$rs[name]";?></a>
                  <?php }?>
                  </div>
            <?php }?>
          </div>
          <div class="dropdown">
		        <button class="dropbtn"><a href="comment_browse.php">留言板</a></button>
            <?php $page = mysql_query("select * from page where dead_time = '0000-00-00 00:00:00' and parent = '留言板' order by post_id");
                  if(mysql_num_rows($page)>0){?>
                  <div class="dropdown-content">
                  <?php for($i=1;$i<=mysql_num_rows($page);$i++){
                        $rs = mysql_fetch_assoc($page);?>
                        <a href="../blog/page.php?id=<?php echo "$rs[post_id]";?>"><?php echo "$rs[name]";?></a>
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
                          <a href="../blog/page.php?id=<?php echo "$rs[post_id]";?>"><?php echo "$rs[name]";?></a>
                    <?php }?>
                  </div>
                </div>
          <?php }?>
             
		    </nav>
      </div>
</div>
<br><br><br>
<section class="content">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="box">
	<div class="box-header">
		<h1 align="center">新增留言</h1><br>
		<?php
			if(!isset($check) and isset($_POST['guestName']))
			echo "<p align='center' style='color:red;'>尚未開始輸入</p>";
		?>
	</div>
	<br>
	<div class="box-body">
		<form  method="post" action="">
			<div class="form-group">
				<div class="col-md-offset-4 col-md-4">
				    暱    稱：<input class="form-control" width="60%" border="1" type="text" name="guestName" id="guestName" value="<?php if($_POST['guestName'] != '') echo "$_POST[guestName]";?>"><?php if(isset($check) and !isset($guestName)) echo "<p style='color:red;'>請輸入暱稱</p>";?><br>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-4 col-md-4">
				    信    箱：<input class="form-control" width="60%" border="1" type="email" name="guestEmail" id="guestEmail" value="<?php if($_POST['guestEmail'] != '') echo "$_POST[guestEmail]";?>"><?php if(isset($check) and !isset($guestEmail)) echo "<p style='color:red;'>請輸入信箱</p>";?><br>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-4 col-md-4">
				　  性 　 別：<input class="form-control" type="radio" name="guestGender" id="guestGender" value="1" <?php if($_POST['guestGender'] == '1') echo "checked=checked";?>>男
				     <input class="form-control" type="radio" name="guestGender" id="guestGender" value="0" <?php if($_POST['guestGender'] == '0') echo "checked=checked";?>>女<br><?php if(isset($check) and !isset($guestGender)) echo "<p style='color:red;'>請輸入性別</p>";?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-4 col-md-4">
				留言類型：<select name="guestContentType" width="60%" border="1" type="button" class="btn btn-success 	dropdown-toggle" data-toggle="dropdown">
						<span class="fa fa-caret-down"></span>
						<ul class="dropdown-menu">
						<?php 
							mysql_close();
							include("comment_connect.php");
							$type = mysql_query("select * from guestcontenttype where live = 1 order by post_id");
							for($i=1;$i<=mysql_num_rows($type);$i++)
							{
								$t_rs = mysql_fetch_assoc($type);
								echo "<option value=$t_rs[name]";if($guestContentType=="$t_rs[name]") echo ' selected';echo ">$t_rs[name]</option>";
							}
						?>		
							<option value="其他" <?php if($_POST['guestContentType'] == '其他') echo "selected";?>>其他</option>
					   </ul>
					   </select>
					   <br>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-4 col-md-4">
				留言主旨：<input class="form-control" width="60%" border="1" type="text" name="guestSubject" id="guestSubject" value="<?php if($_POST['guestSubject'] != '') echo "$_POST[guestSubject]";?>"><?php if(isset($check) and !isset($guestSubject)) echo "<p style='color:red;'>請輸入主旨</p>";?><br>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-4 col-md-4">
			留言內容：<textarea class="form-control" width="60%" border="1" name="guestContent" id="guestContent" rows="5" value="<?php if($_POST['guestContent'] != '') echo "$_POST[guestContent]";?>"></textarea><br><?php if(isset($check) and !isset($guestContent)) echo "<p style='color:red;'>請輸入內容</p>";?>
				</div>
			</div>
			<div class="form-group col-md-offset-5 col-md-2">
			<input class="form-control btn btn-primary" type="submit" align="center" value="送出">
			</div>
		</form>
	</div>
</div>
</div>
</div>
</section>
</body>
</html>