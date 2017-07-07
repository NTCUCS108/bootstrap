<?php
include("comment_connect.php");
//對資料庫的資料進行分頁
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
<h1 align="center">留言板</h1><br>
<button onclick="location.href = './comment_post.php';">我要留言</button>
<button onclick="location.href = '../carousel/test_home.php';">回首頁</button>
<?php
for($i=1;$i<=mysql_num_rows($data);$i++){
	$rs = mysql_fetch_row($data);//顯示資料
?>
<table align="center" width="60%" border="1">
	<tr>
		<td width="10%"><?php echo "ID：$rs[0]"?></td>
		<td width="85%"><?php echo "主旨：<a href='comment_show.php?id=$rs[0]'>$rs[4]</a>"?></td><!--用$rs["guestSubject"]無法顯示-->
		<?php 
			if($rs[8]!="")
				echo "<td width='5%'>y</td>";
			else
				echo "<td width='5%'>n</td>";
		?>
		
	</tr>
</table>
<?php
}
?>
<p align="center">
<?php
for($i=1;$i<=$page_num;$i++)
	echo "<a href='comment_browse.php?page=$i'>$i </a>"//顯示頁數
?>
</p>
</body>
</html>