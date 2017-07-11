<?php
session_start();
if($_SESSION['v']!='yes')
	header("location:../signin/siginin.php");
include("connect.php");
$id = $_GET["id"];
if(!isset($id))
	header("location:edit_homepage.php");
$data=mysql_query("select * from slide where slide_id = '$id'");
$rs=mysql_fetch_assoc($data);
?>

<!DOCTYPE html>

<html>
<head>
</head>
<body>
<h1 align="center">第<?php echo $id;?>則投影</h1><br>
<button onclick="location.href = 'edit_homepage.php';">回管理首頁板</button><br>
<table align="center" width="60%" border="1">
	<tr>
		<td width="20%"><?php echo "投影片id：$rs[slide_id]";?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "圖片位置：";?></td>
		<td width="80%"><?php echo "$rs[img_src]";?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "圖片內容：";?></td>
		<td width="80%"><?php echo "<img src='$rs[img_src]' style='max-width:500px;max-height:300px;'>";?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "投影片alt:$rs[alt]";?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "標題：";?></td>
		<td width="80%"><?php echo "$rs[headers]";?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "介紹：";?></td>
		<td width="80%"><?php echo "$rs[description]";?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "按鈕顯示：";?></td>
		<td width="80%"><?php echo "$rs[icon]";?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "網址連結：";?></td>
		<td width="80%"><?php echo "$rs[link_src]";?></td>
	</tr>
</table>
<p align="center">
	<a href="post.php?id=<?php echo "$rs[slide_id]"?>">編輯</a>
	<a href="delete.php?id=<?php echo "$rs[slide_id]"?>">刪除</a>
</p>
</body>
</html>