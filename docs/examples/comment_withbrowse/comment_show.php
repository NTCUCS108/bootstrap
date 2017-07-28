<?php
session_start();
include("comment_connect.php");
if(mysql_num_rows(mysql_query("select * from comment where guestID = '$_GET[id]'")) == 0)
header("location:comment_browse.php");

?>

<head>
<meta charset="UTF-8" />
</head>
<body>
  <!-- Google Analystic -->
  <?php include_once("analyticstracking.php") ?>
<?php
mysql_close();
include("../blog/master.php");
mysql_close();
include("comment_connect.php");
$id = $_GET['id'];
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

<br><br><br>
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="box">
<div class="box-header">
<h1 align="center">第<?php echo $id;?>則留言</h1>
<br>
</div>
<div class="box-body">
<div class="row">
<p align="center">
<button class="btn btn-primary" onclick="location.href = 'comment_browse.php';">回留言板</button>
</p>
</div>
<br>
<table align="center" width="60%" border="1" class="table table-bordered">
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
</div>
</div>
</div>
</div>
</body>
