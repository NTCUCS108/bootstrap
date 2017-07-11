<?php
session_start();
if($_SESSION['v']!='yes')
	header("location:../signin/siginin.php");
if(!isset($_GET['id']))
	header("location:edit_homepage.php");
include("connect.php");
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
</head>
<body>
<?php ?>
</body>
</html>