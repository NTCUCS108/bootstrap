<?php
session_start();
if($_SESSION['v']!='yes')
	header("location:../signin/siginin.php");
include("connect.php");
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$alt=$id;
	$data=mysql_query("select * from slide where slide_id = '$id'");
	$rs=mysql_fetch_assoc($data);
}
else
{
	$data=mysql_query("select * from slide");
	$id = mysql_num_rows($data);
	$alt = $id;
}
if($_POST['img_src']!='')
	$img_src=$_POST['img_src'];
if($_POST['header']!='')
	$headers=$_POST['header'];
if($_POST['description']!='')
	$description=$_POST['description'];
if($_POST['icon']!='')
	$icon=$_POST['icon'];
if($_POST['link_src']!='')
	$link_src=$_POST['link_src'];
?>

<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8" />
</head>
<body>
<?php if($_GET['use_origin_pic']!="true")include("../upload/upload_homepage_pic.php");?>
<?php if(isset($rs) and $_GET['use_origin_pic']!="true") echo "<button><a href='post.php?id=$rs[slide_id]&use_origin_pic=true'>使用原本的圖片</a></button>"?>
<form method="post">
	header:<input type='text' name='header' value="<?php if(isset($rs))echo "$rs[headers]";?>"><br>
	description:<input type='text' name='description' value="<?php if(isset($rs))echo "$rs[description]";?>"><br>
	icon:<input type='text' name='icon' value="<?php if(isset($rs))echo "$rs[icon]";?>"><br>
	link:<input type='text' name='link_src' value="<?php if(isset($rs))echo "$rs[link_src]";else echo '#';?>"><br>
	<input type='submit' value='提交'><br>
</form>
<?php
if($_GET['use_origin_pic']=="true")
	$_SESSION['img_src'] = $rs['img_src'];
if(isset($headers) and isset($description) and isset($icon) and isset($link_src) and isset($_SESSION['img_src']))
{
	if($_GET['use_origin_pic']!="true")
		unlink($rs['img_src']);
	if(isset($_GET['id']))
	{
		mysql_query("update slide set headers = '$headers',description = '$description',icon = '$icon',link_src = '$link_src',img_src = '$_SESSION[img_src]' where slide_id = '$id'");
	}
	else
		mysql_query("Insert into slide value('$id','$_SESSION[img_src]','$alt','$headers','$description','$icon','$link_src')");
	unset($_SESSION["img_src"]);
	header("location:edit_homepage.php");
	exit();
}	
else
	echo "尚未輸入完成";
?>
</body>
</html>