<?php
session_start();
if($_SESSION['v']!="yes")
{
	header("location:../signin/comment_signin_withbrowse.php");
}
include("comment_connect.php");
//checkbox批次刪除
if(isset($_POST['delete']))
{
$delete = $_POST['delete'];
foreach($delete as $value)
	mysql_query("delete from comment where guestID = '$value'");
}
//對資料庫的資料進行分頁
if(!isset($_GET["guestContentType"]))
	$search="不限";
else
	 $search = $_GET["guestContentType"];
$num = 10;//一頁筆數
if($search=="不限")//符合的資料共有幾筆
	$data = mysql_query("select * from comment");
else if($search=="已回覆")
	$data = mysql_query("select * from comment where guestReply != ''");
else if($search=="未回覆")
	$data = mysql_query("select * from comment where guestReply = ''");
else
	$data = mysql_query("select * from comment where guestContentType = '$search'");
$page = $_GET["page"];//目前在第幾頁
if(!isset($page))
	$page = 1;//未設定則內建1
$start = ($page-1)*$num;//跟著頁數變化資料從第幾筆開始顯示
$page_num = ceil(mysql_num_rows($data)/$num);//一共幾頁
if($search=="不限")
	$data = mysql_query("select * from comment order by guestTime desc limit $start,$num");//抓取正確範圍的資料
else if($search=="已回覆")
	$data = mysql_query("select * from comment where guestReply != '' order by guestTime desc limit $start,$num");
else if($search=="未回覆")
	$data = mysql_query("select * from comment where guestReply = '' order by guestTime desc limit $start,$num");
else
	$data = mysql_query("select * from comment where guestContentType = '$search' order by guestTime desc limit $start,$num");
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1 align="center">管理留言板</h1>
<form name="search" method="get">
搜尋類別：
<select name="guestContentType">
<?php
	echo '<option value="不限"';if($search=="不限") echo ' selected';echo '>不限</option>';
	echo '<option value="產品"';if($search=="產品") echo ' selected';echo '>產品</option>';
	echo '<option value="實績"';if($search=="實績") echo ' selected';echo '>實績</option>';
	echo '<option value="其他"';if($search=="其他") echo ' selected';echo '>其他</option>';
	echo '<option value="已回覆"';if($search=="已回覆") echo ' selected';echo '>已回覆</option>';
	echo '<option value="未回覆"';if($search=="未回覆") echo ' selected';echo '>未回覆</option>';
?>
</select><br>
<input type="submit" value="送出">
</form>
<button onclick="location.href = '../carousel/test_home.php';">回首頁</button>
<form name="delete comment" method="post">
<input type="submit" value="刪除勾選的留言">

<?php
for($i=1;$i<=mysql_num_rows($data);$i++){
	$rs = mysql_fetch_assoc($data);
?>
<table align="center" width="60%" border="1">
	<tr>
		<td width="5%">
			<input type="checkbox" name="delete[]" value="<?php echo $rs[guestID];?>">
		</td>
		<td width="10%"><?php echo "ID：$rs[guestID]"?></td>
		<td width="15%"><?php echo "類型：$rs[guestContentType]"?></td>
		<td width="60%"><?php echo "主旨：<a href='comment_admin_show.php?id=$rs[guestID]'>$rs[guestSubject]</a>"?></td>
		<td width="5%"><?php echo $rs[browse_count]?></td>
		<?php 
			if($rs[guestReply]!="")
				echo "<td width='5%' style='color:green;'>y</td>";
			else
				echo "<td width='5%' style='color:red;'>n</td>";
		?>
		
	</tr>
</table>
<?php
}
?>
</form>
<p align="center">
<?php
for($i=1;$i<=$page_num;$i++)
	echo "<a href='comment_admin_browse.php?guestContentType=$search&page=$i'>$i </a>"//顯示頁數
?>
</p>
</body>
</html>