<?php
session_start();
if($_SESSION['v']!="yes")
{
	header("location:../signin/comment_signin.php");
}
include("comment_connect.php");
$data = mysql_query("select * from comment order by guestTime desc");
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1 align="center">管理者頁面</h1>
<?php
for($i=1;$i<=mysql_num_rows($data);$i++){
	$rs = mysql_fetch_row($data);
?>
<table align="center" width="60%" border="1">
	<tr>
		<td width="20%"><?php echo $rs[4]?></td>
		<td width="80%"><a href="comment_reply.php?id=<?php echo $rs[0];?>">回覆</a> 
						<a href="comment_delete.php?id=<?php echo $rs[0];?>">刪除</a>
		</td><!--用$rs["guestSubject"]無法顯示-->
	</tr>
	<tr>
		<td width="20%"><?php echo "ID："?></td>
		<td width="80%"><?php echo $rs[0]?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "暱稱："?></td>
		<td width="80%"><?php echo $rs[1]?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "信箱："?></td>
		<td width="80%"><?php echo $rs[2]?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "性別："?></td>
		<td width="80%"><?php if($rs[3]==0)echo "女";else echo "男";?></td>
	</tr>
	<tr>
		<td width="20%"><?php echo "內容："?></td>
		<td width="80%"><?php echo $rs[6]?></td><!--無法換行-->
	</tr>
	<tr>
		<td width="20%"><?php echo "時間："?></td>
		<td width="80%"><?php echo $rs[5]?></td>
	</tr>
	<?php if($rs[7]!=""){?>
            <tr>
              <td colspan="2" style="background:#999; color:white; text-align:center">站長回覆</td>
            </tr>
            <tr>
              <td colspan="2"><?php echo $rs[7];?></td>
            </tr>
    <?php } ?>
</table>
<br>
<?php
}
?>
</body>
</html>