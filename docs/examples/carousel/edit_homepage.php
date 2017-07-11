<?php
session_start();
if($_SESSION['v']!='yes')
	header("location:../signin/siginin.php");
include("connect.php");
//checkbox批次刪除
if(isset($_POST['delete']))
{
$delete = $_POST['delete'];
foreach($delete as $value)
{
	$data=mysql_query("select * from slide where slide_id = '$value'");
	$rs=mysql_fetch_assoc($data);
	unlink("$rs[img_src]");//delete file
	mysql_query("delete from slide where slide_id = '$value'");
}
}
$data=mysql_query("select * from slide order by slide_id");
for($i=0;$i<mysql_num_rows($data);$i++)
{
	$rs = mysql_fetch_assoc($data);
	mysql_query("update slide set slide_id = '$i',alt = '$i' where slide_id='$rs[slide_id]'");
}
$data=mysql_query("select * from slide order by slide_id");
?>

<!DOCTYPE html>

<html>
<head>
</head>
<body>
<h1 align='center'>管理首頁板</h1><br>
<button onclick="location.href='./post.php'">新增</button>
<button onclick="location.href='./admin.php'">回管理者頁面</button><br>
<form name='delete_homepage' method='post'>
<input type='submit' value='刪除勾選投影片'>
<?php
for($i=1;$i<=mysql_num_rows($data);$i++){
	$rs = mysql_fetch_assoc($data);
?>
<table align="center" width="60%" border="1">
	<tr>
		<td width="5%"><input type='checkbox' name='delete[]' value='<?php echo "$rs[slide_id]";?>'></td>
		<td width="10%">slide id:<?php echo "$rs[slide_id]";?></td>
		<td width="85%">header:<?php echo "<a href='homepage_show.php?id=$rs[slide_id]'>$rs[headers]</a>";?></td>
	</tr>
</table>
<?php
}
?>
</form>
</body>
</html>