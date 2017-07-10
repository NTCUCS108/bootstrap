<?php
session_start();
include("comment_connect.php");
$id = $_GET["id"];
if(!isset($id))
	$id = 1;
$data = mysql_query("select * from comment where guestID = '$id'");
$rs = mysql_fetch_assoc($data);
if($_SESSION["check $id"]!="v")//瀏覽人數更新
{
	$browse_count = $rs['browse_count'];
	$_SESSION["check $id"]="v";
	$browse_count++;
	mysql_query("update comment set browse_count = '$browse_count' where guestID = '$id'");
}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1 align="center">第<?php echo $id;?>則留言</h1><br>
<button onclick="location.href = 'comment_browse.php';">回留言板</button>
<button onclick="location.href = '#';">上一則</button>
<button onclick="location.href = '#';">下一則</button>
<br>
<table align="center" width="60%" border="1">
	<tr>
		<td width="20%"><?php echo "主旨："?></td>
		<td width="80%"><?php echo $rs[guestSubject]?></td><!--用$rs["guestSubject"]無法顯示-->
	</tr>
	<tr>
		<td width="20%"><?php echo "類型："?></td>
		<td width="80%"><?php echo $rs[guestContentType]?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "瀏覽次數："?></td>
		<td width="80%"><?php echo $rs[browse_count]?></td>
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
</body>
</html>