<?php
session_start();
if($_SESSION['v']!="yes")
{
	header("location:./comment_signin.php");
}
include("comment_connect.php");
$num = 10;//一頁筆數
$data = mysql_query("select * from comment");
$page = $_GET["page"];//目前在第幾頁
if(!isset($page))
	$page = 1;//未設定則內建1
$start = ($page-1)*$num;//跟著頁數變化資料從第幾筆開始顯示
$page_num = ceil(mysql_num_rows($data)/$num);//一共幾頁
$data = mysql_query("select * from comment order by guestTime desc limit $start,$num");//抓取正確範圍的資料
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1 align="center">管理留言板</h1>

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
		<td width="80%"><?php echo $rs[7]?></td><!--無法換行-->
	</tr>
	<tr>
		<td width="20%"><?php echo "時間："?></td>
		<td width="80%"><?php echo $rs[5]?></td>
	</tr>
	<?php if($rs[8]!=""){?>
            <tr>
              <td colspan="2" style="background:#999; color:white; text-align:center">站長回覆</td>
            </tr>
            <tr>
              <td colspan="2"><?php echo $rs[8];?></td>
            </tr>
    <?php } ?>
</table>
<br>
<?php
}
?>
</body>
</html>