<?php
include("comment_connect.php");
$data = mysql_query("select * from comment order by guestTime desc");
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1 align="center">留言板</h1><br>
<button onclick="location.href = 'comment_post.php';">我要留言</button>
<button onclick="location.href = '../carousel/test_home.php';">回首頁</button>
<?php
for($i=1;$i<=mysql_num_rows($data);$i++){
	$rs = mysql_fetch_row($data);
?>
<table align="center" width="60%" border="1">
	<tr>
		<td width="20%"><?php echo "主旨："?></td>
		<td width="80%"><?php echo $rs[4]?></td><!--用$rs["guestSubject"]無法顯示-->
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