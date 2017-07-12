<?php
session_start();
if($_SESSION['v']!='yes')
	header("location:../signin/siginin.php");
if(!isset($_GET['id']))
	header("location:edit_homepage.php");
include("connect.php");
$data=mysql_query("select * from slide where slide_id = '$id'");
$rs=mysql_fetch_assoc($data);
unlink("$rs[img_src]");//delete file
mysql_query("delete from slide where slide_id = '$id'");
$data=mysql_query("select * from slide order by slide_id");
for($i=0;$i<mysql_num_rows($data);$i++)
{
	$rs = mysql_fetch_assoc($data);
	mysql_query("update slide set slide_id = '$i',alt = '$i' where slide_id='$rs[slide_id]'");
}
header("location:edit_homepage.php");
?>
<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8" />
</head>
<body>
<?php ?>
</body>
</html>