<?php
session_start();
if($_SESSION['v']!="yes")
{
	header("location:../signin/comment_signin_withbrowse.php");
}
include("comment_connect.php");
$id = $_GET["id"];
if(!isset($id))
	$id = 1;
$data = mysql_query("select * from comment where guestID = '$id'");
$rs = mysql_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1 align="center">第<?php echo $id;?>則留言</h1><br>
<button onclick="location.href = 'comment_admin_browse.php';">回管理留言板</button>
<button onclick="location.href = '#';">上一則</button>
<button onclick="location.href = '#';">下一則</button>
<br>
<table align="center" width="60%" border="1">
	<tr>
		<td width="20%"><?php echo "主旨："?></td>
		<td width="80%"><?php echo $rs[guestSubject]?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "ID："?></td>
		<td width="80%"><?php echo $rs[guestID]?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "暱稱："?></td>
		<td width="80%"><?php echo $rs[guestName]?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "信箱："?></td>
		<td width="80%"><?php echo $rs[guestEmail]?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "性別："?></td>
		<td width="80%"><?php if($rs[guestGender]==0)echo "女";else echo "男";?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "內容："?></td>
		<td width="80%"><?php echo $rs[guestContent]?></td><!--無法換行-->
	</tr>
	<tr>
		<td width="20%"><?php echo "時間："?></td>
		<td width="80%"><?php echo $rs[guestTime]?></td>
	</tr>
	<?php if($rs[guestReply]!=""){?>
            <tr>
              <td colspan="2" style="background:#999; color:white; text-align:center">站長回覆</td>
            </tr>
            <tr>
              <td colspan="2"><?php echo $rs[guestReply];?></td>
            </tr>
    <?php } ?>
</table>
<br>
<p align="center">
	<a href="comment_reply.php?id=<?php echo $rs[guestID];?>">回覆</a>
	<a href="comment_delete.php?id=<?php echo $rs[guestID];?>">刪除</a>
</p>
</body>
</html>