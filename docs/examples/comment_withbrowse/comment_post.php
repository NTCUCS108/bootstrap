<?php
include("comment_connect.php");
if($_POST['guestName']!='')
	$guestName=$_POST["guestName"];
if($_POST['guestEmail']!='')
	$guestEmail=$_POST["guestEmail"];
if($_POST['guestGender']!='')
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
</head>
<body>
<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">精德實業股份有限公司</a>
          <a class="blog-nav-item" href="../carousel/test_home.php">首頁</a>
          <a class="blog-nav-item" href="../blog/company.php">公司簡介</a>
          <a class="blog-nav-item" href="../blog/product.php">產品資訊</a>
          <a class="blog-nav-item" href="../blog/contact.php">聯絡方式</a>
		  <a class="blog-nav-item" href="comment_browse.php">留言板</a>
        </nav>
    </div>
</div>
<br><br><br>
<section class="content">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="box">
	<div class="box-header">
		<h1 align="center">新增留言</h1>
	</div>
	<br>
	<div class="box-body">
		<form  method="post" action="">
			<div class="form-group">
				<div class="col-md-offset-4 col-md-4">
				    暱    稱：<input class="form-control" width="60%" border="1" type="text" name="guestName" id="guestName" value="<?php if($_POST['guestName'] != '') echo "$_POST[guestName]";?>"><br>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-4 col-md-4">
				    信    箱：<input class="form-control" width="60%" border="1" type="email" name="guestEmail" id="guestEmail" value="<?php if($_POST['guestEmail'] != '') echo "$_POST[guestEmail]";?>"><br>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-4 col-md-4">
				　  性 　 別：<input class="form-control" type="radio" name="guestGender" id="guestGender" value="1" <?php if($_POST['guestGender'] == '1') echo "checked=checked";?>>男
				     <input class="form-control" type="radio" name="guestGender" id="guestGender" value="0" <?php if($_POST['guestGender'] == '0') echo "checked=checked";?>>女<br>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-4 col-md-4">
				留言類型：<select name="guestContentType" width="60%" border="1" type="button" class="btn btn-success 	dropdown-toggle" data-toggle="dropdown">
						<span class="fa fa-caret-down"></span>
						<ul class="dropdown-menu">
						<option value="產品" <?php if($_POST['guestContentType'] == '產品') echo "selected";?>>產品</option>
						<option value="實績" <?php if($_POST['guestContentType'] == '實績') echo "selected";?>>實績</option>
						<option value="其他" <?php if($_POST['guestContentType'] == '其他') echo "selected";?>>其他</option>
					   </ul>
					   </select>
					   <br>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-4 col-md-4">
				留言主旨：<input class="form-control" width="60%" border="1" type="text" name="guestSubject" id="guestSubject" value="<?php if($_POST['guestSubject'] != '') echo "$_POST[guestSubject]";?>"><br>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-4 col-md-4">
			留言內容：<textarea class="form-control" width="60%" border="1" name="guestContent" id="guestContent" rows="5" value="<?php if($_POST['guestContent'] != '') echo "$_POST[guestContent]";?>"></textarea><br>
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
<?php
if(isset($check) and $check==0)
{
	echo "上傳失敗<br>未輸入：";
	if(!isset($guestName))
		echo "暱稱 ";
	if(!isset($guestEmail))
		echo "信箱 ";
	if(!isset($guestGender))
		echo "性別 ";
	if(!isset($guestSubject))
		echo "留言主旨 ";
	if(!isset($guestContent))
		echo "留言內容";
}
if(!isset($check) and isset($_POST['guestName']))
	echo "尚未開始輸入";
?>

</body>
</html>