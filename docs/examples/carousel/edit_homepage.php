<?php
session_start();
if($_SESSION['v']!='yes')
	header("location:../signin/siginin.php");
include("connect.php");
$data=mysql_query("select * from slide order by slide_id");
?>

<!DOCTYPE html>

<html>
<head>
</head>
<body>
<h1 align='center'>管理首頁板</h1><br>
<button onclick="location.href='./post.php'">新增</button>
<button onclick="location.href='./delete.php'">刪除</button>
<button onclick="location.href='./admin.php'">回管理者頁面</button><br>
<?php
for($i=1;$i<=mysql_num_rows($data);$i++){
	$rs = mysql_fetch_assoc($data);
?>
<table align="center" width="60%" border="1">
	<tr>
		<td width="10%">slide id:<?php echo "$rs[slide_id]";?></td>
		<td width="90%">header:<?php echo "<a href='homepage_show.php?id=$rs[slide_id]'>$rs[headers]</a>";?></td>
	</tr>
</table>
<?php
}
?>
</body>
</html>