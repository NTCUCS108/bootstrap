<?php
session_start();
if($_SESSION['v']!="yes")
{
	header("location:../signin/comment_signin_withbrowse.php");
}
include("comment_connect.php");
$id = $_GET["id"];
$guestReply = $_POST["reply"];
$data = mysql_query("select * from comment where guestID = '$id'");
if(isset($guestReply))
{
	$time = date("Y/m/d G:i:s");
	mysql_query("update comment set guestReply='$guestReply',guestReplyTime='$time' where guestID='$id'");
	header("location:comment_admin_browse.php");
}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1 align="center">回覆頁面</h1>
<?php
$rs = mysql_fetch_row($data);
?>
<table align="center" width="60%" border="1">
	<tr>
		<td width="20%"><?php echo $rs[4];?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "暱稱：";?></td>
		<td width="80%"><?php echo $rs[1];?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "信箱：";?></td>
		<td width="80%"><?php echo $rs[2];?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "性別：";?></td>
		<td width="80%"><?php if($rs[3]==0)echo "女";else echo "男";?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "內容：";?></td>
		<td width="80%"><?php echo $rs[7];?></td><!--無法換行-->
	</tr>
	<tr>
		<td width="20%"><?php echo "時間：";?></td>
		<td width="80%"><?php echo $rs[5];?></td>
	</tr>
</table>
<br>
<form id="reply_form" name="reply_form" method="post" align="center">
回覆內容：
<br><textarea name="reply" id="reply" style="width:60%;" rows="8">
</textarea><br>
<input type="submit" value="送出">
</form>
</body>
</html>