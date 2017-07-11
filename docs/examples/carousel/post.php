<?php
session_start();
if($_SESSION['v']!='yes')
	header("location:../signin/siginin.php");
include("connect.php");
$data=mysql_query("select * from slide order by slide_id");
$id = mysql_num_rows($data);
$alt = $id;
if($_POST['img']!='')
	$img_src=$_POST['img'];
if($_POST['header']!='')
	$headers=$_POST['header'];
if($_POST['description']!='')
	$description=$_POST['description'];
if($_POST['icon']!='')
	$icon=$_POST['icon'];
if($_POST['link']!='')
	$link_src=$_POST['link'];
?>

<!DOCTYPE html>

<html>
<head>
</head>
<body>
<?php include("../upload/upload_homepage_pic.php");?>
<form method="post">
	header:<input type='text' name='header'><br>
	description:<input type='text' name='description'><br>
	icon:<input type='text' name='icon'><br>
	link:<input type='text' name='link' value='#'><br>
	img:<input type='text' name='img'><br>
	<input type='submit' value='提交'><br>
</form>
<?php
if(isset($headers) and isset($description) and isset($icon) and isset($link_src) and isset($img_src))
{
	//echo $headers,$description,$icon,$link_src,$img_src;
	mysql_query("Insert into slide value('$id','$img_src','$alt','$headers','$description','$icon','$link_src')");
	header("location:edit_homepage.php");
}	
else
	echo "尚未輸入完成";
?>
</body>
</html>